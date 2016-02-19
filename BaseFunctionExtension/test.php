<?
require_once("ArrayExt.php");

use sergey144010\BaseFunctionExtension\ArrayExt;

$array = array(
    0 => 123,
    1 => 333,
    2 => 333,
    3 => 123,
    4 => 333,
    5 => 333,
    6 => 123,
    7 => 333,
    8 => 333,
    9 => 123,
    10 => 333,
    11 => 333,

);
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

var_dump(ArrayExt::isArrayValRepeat($array));
echo '<br>';
var_dump(ArrayExt::arrayValRepeat($array, false));
echo '<br>';
var_dump(ArrayExt::countValRepeat($array, 0));
