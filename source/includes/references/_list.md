## List references

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
    "total": 43,
    "per_page": 20,
    "current_page": 1,
    "last_page": 2,
    "next_page_url": "https://api.dinkomo.frnk.ca/0.2/reference?page=2",
    "prev_page_url": null,
    "from": 1,
    "to": 20,
    "data": [
        {
            "type": "book",
            "data": {
                "author": "Florence Abena Dolphyne",
                "title": "A Comprehensive Course in Twi (Asante) for the Non-Twi Learner",
                "date": "1996-01-01",
                "publisher": "Ghana Universities Press",
                "isbn": "9964302452",
                "isbn-13": "9789964302450",
                "city": "Accra"
            },
            "string": "",
            "deletedAt": null,
            "uniqueId": "NE1lCDWP"
        },
        {...}
    ]
}
```

`GET /references`
