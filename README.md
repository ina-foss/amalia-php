# amalia-php

PHP implementation of the metadata model behind amalia.js

Installation
-----------
There is one recommended way to install amalia-model via [Composer](https://getcomposer.org/):

* adding the dependency to your ``composer.json`` file:

```js
  "require": {
      ..
      "goetas/xsd2php":"^2.0",
      "jms/serializer": "serializer-master-dev as 1.0",
      "ina/amalia-model":"0.1.0",
      ..
  },
  "repositories": [{
      "type": "vcs",
      "url": "https://github.com/goetas/serializer.git"
  }],
```


Development
-----

# Generate PHP classes 

```bach
    composer run-script generate-source
    composer run-script generate-jms
```

