## Retrieve a definition

> Sample request

```shell

```

```javascript
// ...
```

```php
<?php

// ...
// /api/0.2/definition/8MyQRHYM?embed=uri,editUri,mainTitle,titleString,titleList,translation,languageList
```

> Sample response

```json
{
    "type": "word",
    "subType": "noun",
    "mainLanguageCode": "twi",
    "rating": ​1,
    "meta": {},
    "createdAt": "2015-04-09 13:10:07",
    "updatedAt": "2015-04-09 13:10:07",
    "deletedAt": null,
    "uri": "http://dinkomo.frnk.ca/twi/ɔdɔ",
    "editUri": "http://dinkomo.frnk.ca/admin/definition/8MyQRHYM/edit?return=summary",
    "mainTitle": "ɔdɔ",
    "titleString": "ɔdɔ, dɔ",
    "titleList":
    [
        {

            "title": "ɔdɔ",
            "transliteration": "",
            "reference": "",
            "createdAt": "2016-05-13 14:39:09",
            "updatedAt": "2016-05-13 14:39:09",
            "deletedAt": null

        },
        {
            "title": "dɔ",
            "transliteration": "",
            "reference": "",
            "createdAt": "2016-05-13 14:39:09",
            "updatedAt": "2016-05-13 14:39:09",
            "deletedAt": null
        }
    ],
    "translation":
    {
        "practical":
        {
            "eng": "love"
        },
        "literal":
        {
            "eng": ""
        },
        "meaning":
        {
            "eng": "an intense feeling of deep affection"
        }
    },
    "languageList":
    {
        "twi": "Asante Twi",
        "aka": "Akan"
    },
    "uniqueId": "8MyQRHYM",
    "resourceType": "definition"
}
```

`GET /definitions/{id}`
