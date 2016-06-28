@setup

    # Setup variables.
    $repository = "git@github.com:frnkly/dinkomo-api-docs.git";
    $baseDir = "/var/www/html/apps/dinkomo-api-docs";
    $releasesDir = "{$baseDir}/releases";
    $liveDir = "/var/www/html/live/dinkomo-api-docs";
    $newReleaseName = date('Ymd-His');

    /**
     * Logs a message to the console.
     * Credits:
     *
     * @param string $message
     * @return string
     */
    function msg($message) {
        return "echo '\033[32m" . $message . "\033[0m';\n";
    }
@endsetup



{{-- Servers --}}

@servers(['local' => '127.0.0.1', 'production' => 'root@45.55.60.14'])



{{-- Zero downtime deployment --}}

{{-- Credits: https://serversforhackers.com/video/deploying-with-envoy-cast --}}
{{-- Credits: https://dyrynda.com.au/blog/an-envoyer-like-deployment-script-using-envoy --}}
{{-- Credits: https://murze.be/2015/11/zero-downtime-deployments-with-envoy --}}


@macro('deploy', ['on' => 'production'])

    git-clone
    update-permissions
    update-symlinks
    purge-releases

@endmacro

@task('deploy-code', ['on' => 'production'])

    cd {{ $liveDir }}
    git pull origin master

@endtask

@task('git-clone')

    {{ msg('Cloning git repository...') }}

    # Check if the release directory exists. If it doesn't, create one.
    [ -d {{ $releasesDir }} ] || mkdir -p {{ $releasesDir }};

    # cd into the releases directory.
    cd {{ $releasesDir }};

    # Clone the repository into a new folder.
    git clone --depth 1 {{ $repository }} {{ $newReleaseName }}  &> /dev/null;

@endtask

@task('update-permissions')

    {{ msg('Updating directory owner and permissions...') }}

    # cd into releases folder
    cd {{ $releasesDir }};

    # Update group owner and permissions
    chgrp -R www-data {{ $newReleaseName }};
    chmod -R ug+rwx {{ $newReleaseName }};

@endtask

@task('update-symlinks')

    {{ msg('Creating symlink to latest release...') }}

    ln -nfs {{ $releasesDir }}/{{ $newReleaseName }} {{ $liveDir }};
    chgrp -h www-data {{ $liveDir }};

@endtask

@task('purge-releases')

    {{ msg('Purging old releases...') }}

    # This will list our releases by modification time and delete all but the 5 most recent.
    purging=$(ls -dt {{ $releasesDir }}/* | tail -n +5);

    if [ "$purging" != "" ]; then
        echo Purging old releases: $purging;
        rm -rf $purging;
    else
        echo "No releases found for purging at this time";
    fi

@endtask

@task('build', ['on' => 'local'])

    cd ~/dev/dinkomo/api-docs/

    bundle exec middleman build

@endtask



{{-- Testing Envoy --}}

@task('test-local', ['on' => 'local'])

    {{ msg('Testing Envoy on localhost...') }}

    ls -a

@endtask

@task('test-production', ['on' => 'production'])

    {{ msg('Testing Envoy on production server...') }}

    cd {{ $releasesDir }}
    ls -a

@endtask
