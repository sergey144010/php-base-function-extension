<?
require_once("../BaseFunctionExtension/ArrayExt.php");

use sergey144010\BaseFunctionExtension\ArrayExt;

/*
 * Test 1
 *
 * There are duplicate values in the array or not.
 *
 */
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
var_dump(ArrayExt::isArrayValRepeat($array));
echo PHP_EOL;

$array = array(
    'test',
    'asd',
    'dfg',
    'afrwe',
    '123fsa',
    'nki89'
);
var_dump(ArrayExt::isArrayValRepeat($array));
echo PHP_EOL;

$array = array(
    'test',
    'asd',
    'dfg',
    'test',
    '123fsa',
    'nki89'
);
var_dump(ArrayExt::isArrayValRepeat($array));
echo PHP_EOL;

$array = array(
    '321',
    'asd',
    'dfg',
    '321',
    '123fsa',
    'nki89'
);
var_dump(ArrayExt::isArrayValRepeat($array));
echo PHP_EOL;

/*
 * Test 2
 *
 * Returns the number of repeated array values.
 *
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
var_dump(ArrayExt::arrayValRepeat($array, false));
echo PHP_EOL;

/*
 * Test 3
 *
 * Returns the number of the specified repeated value of the array.
 *
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
var_dump(ArrayExt::countValRepeat($array, 0));
echo PHP_EOL;
