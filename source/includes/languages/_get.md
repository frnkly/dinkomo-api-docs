## Retrieve a language resource

> Sample request

```shell

```

```javascript
// ...
```

```php
<?php

// ...
// /api/0.2/language/OJjYiQEa?embed=parentName,definitionsCount,uri,editUri,firstDefinition,latestDefinition,randomDefinition
```

> Sample response

```json
{
    "code": "twi",
    "parentCode": "aka",
    "name": "Asante Twi",
    "transliteration": "",
    "altNames": "Ashanti,  Twi",
    "createdAt": "2015-04-09 13:08:27",
    "updatedAt": "2016-05-03 14:08:58",
    "deletedAt": null,
    "parentName": "Akan",
    "definitionsCount": ​950,
    "uri": "http://dinkomo.frnk.ca/twi",
    "editUri": "http://dinkomo.frnk.ca/admin/language/twi/edit",
    "firstDefinition":
    {
        "mainTitle": "ɔdɔ",
        "translation":
        {
            "practical": {
                "eng": "love"
            },
            "literal": {
                "eng": ""
            },
            "meaning": {
                "eng": "an intense feeling of deep affection"
            }
        },
        "type": "word",
        "subType": "noun"
    },
    "latestDefinition":
    {
        ...
    },
    "randomDefinition":
    {
        ...
    },
    "uniqueId": "OJjYiQEa",
    "resourceType": "language"
}
```

`GET /languages/{code}`
