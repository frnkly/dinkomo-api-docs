## List tags

> Sample request

```shell

```

```javascript
// ...
```

```php
<?php

// ...
```

> Sample response

```json
{
    "total": 87,
    "per_page": 20,
    "current_page": 1,
    "last_page": 5,
    "next_page_url": "https://api.dinkomo.frnk.ca/0.2/tag?page=2",
    "prev_page_url": null,
    "from": 1,
    "to": 20,
    "data": [
        {
            "title": "numbers",
            "deletedAt": null,
            "language": "en",
            "uniqueId": "8MygI5E2"
        },
        {
            "title": "face",
            "deletedAt": null,
            "language": "en",
            "uniqueId": "oMBLIdEA"
        },
        {...}
    ]
}
```

`GET /tags`
