php-base-function-extension
==========================

Extension of the basic PHP functionality for working with arrays.

Install
-------
 Add repositories and require in composer.json

```php
{
    "repositories":[
        {
            "type": "vcs",
            "url":"https://github.com/sergey144010/php-base-function-extension",
        }
    ],
    "require": {
    "sergey144010/php-base-function-extension": "dev-master",
    }
}
```
and make
composer.phar update

composer.phar require
 - package name: "sergey144010/php-base-function-extension": "dev-master"


Usage
-----

```php
use sergey144010\BaseFunctionExtension\ArrayExt;

/*
* Returns the number of repeated array values.
*/

$array = array(
    123 => 0,
    7 => 7,
    12 => 0,
    4 => 4,
    3 => 0,
    'qwe1' => 'asd1',
    8 => 8,
    'qwe2' => 'asd1',
    5 => 5,
    'qwe3' => 'asd1',
    9 => 9,
    'qwe4' => 'asd1',
);
$arrayRepeat = ArrayExt::arrayValRepeat($array);
var_dump($arrayRepeat);

/* Return
array(2) {
  [0]=>
  int(3)
  ["asd1"]=>
  int(4)
}
*/

# or 
if(ArrayExt::isArrayKeyNumber($array)){
    # ... some code ...
}
# or
if(ArrayExt::isArrayKeyString($array)){
    # ... some code ...
}
# or
$countValRepeat = ArrayExt::countValRepeat($array, 0);

```

## Methods
```php
isArrayKeyNumber( $array )
isArrayKeyString( $array )
isArrayKeyMixed( $array )
isArrayValRepeat( $array )
arrayValRepeat()
countValRepeat($array, $val)
```
