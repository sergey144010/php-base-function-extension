php-base-function-extension
==========================

Version 0.0.1



Install
-------

 composer.phar require
  - package name: "sergey144010/php-base-function-extension": "dev-master"


Usage
-----

```php
use sergey144010\BaseFunctionExtension\ArrayExt;

...
$arrayRepeat = ArrayExt::arrayValRepeat($array);
or 
if(ArrayExt::isArrayKeyNumber($array)){
    #some code
}
or
if(ArrayExt::isArrayKeyString($array)){
    #some code
}

...

```
