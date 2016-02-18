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

var_dump(ArrayExt::arrayValRepeat($array));