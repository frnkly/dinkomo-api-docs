## List alphabets

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
    "total": 34,
    "per_page": 20,
    "current_page": 1,
    "last_page": 2,
    "next_page_url": "https://api.dinkomo.frnk.ca/0.2/alphabet?page=2",
    "prev_page_url": null,
    "from": 1,
    "to": 20,
    "data": [
        {
            "name": "ፊደል",
            "transliteration": "ፊደል",
            "code": "amh-Ethi",
            "scriptCode": "Ethi",
            "letters": "",
            "createdAt": "2016-07-08 03:28:14",
            "updatedAt": "2016-07-24 22:33:07",
            "deletedAt": null,
            "uniqueId": "nMY3oCmE",
            "resourceType": "alphabet"
        },
        {
            "name": "Twi Alphabet",
            "transliteration": "Twi Alphabet",
            "code": "twi-Latn",
            "scriptCode": "Latn",
            "letters": "abdeɛfghiklmnoɔprstuwy\nABDEƐFGHIKLMNOƆPRSTUWY",
            "createdAt": "2016-07-06 23:23:02",
            "updatedAt": "2016-07-24 22:33:07",
            "deletedAt": null,
            "uniqueId": "DEPjLtzM",
            "resourceType": "alphabet"
        },
        {...}
    ]
}
```

`GET /alphabets`
