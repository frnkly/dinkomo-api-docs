## List countries

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
    "total": 264,
    "per_page": 20,
    "current_page": 1,
    "last_page": 14,
    "next_page_url": "https://api.dinkomo.frnk.ca/0.2/country?page=2",
    "prev_page_url": null,
    "from": 1,
    "to": 20,
    "data": [
        {
            "name": "Åland Islands",
            "altNames": "",
            "code": "AX",
            "createdAt": "2016-07-06 23:22:34",
            "updatedAt": "2016-07-24 22:33:07",
            "deletedAt": null,
            "uniqueId": "YEpvf75M",
            "resourceType": "country"
        },
        {
            "name": "Zimbabwe",
            "altNames": "",
            "code": "ZW",
            "createdAt": "2016-07-06 23:22:34",
            "updatedAt": "2016-07-24 22:33:07",
            "deletedAt": null,
            "uniqueId": "NE1PfwXW",
            "resourceType": "country"
        },
        {...}
    ]
}
```

`GET /countries`
