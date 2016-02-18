<?
/*
    Расширение базового функционала PHP для работы с массивами
*/
namespace sergey144010\BaseFunctionExtension;

class ArrayExt
{
    /*
     * Проверка ключей массива
     * Ключи числа или нет
     *
     * @return bool true if all keys array is an integer,
     * false otherwise.
     */
    public static function is_array_key_number( $array )
    {
        if(is_array($array)){
            foreach($array as $key=>$val){
                if(!is_int($key)){
                    return false;
                };
            };
            return true;
        }else{
            /* На входе не массив */
            /* ENTER NOT ARRAY */
            return false;
        };
    }

    /*
     * Проверка ключей массива
     * Ключи строки или нет
     *
     * @return bool true if all keys array is an string,
     * false otherwise.
     */
    public static function is_array_key_string( $array )
    {
        if(is_array($array)){
            foreach($array as $key=>$val){
                if(!is_string($key)){
                    return false;
                };
            };
            return true;
        }else{
            /* На входе не массив */
            /* ENTER NOT ARRAY */
            return false;
        };
    }

    /*
     * Проверка ключей массива
     * Ключи строки и числа или нет
     *
     * @return bool true if keys array is an string and is an integer,
     * false otherwise.
     */
    public static function is_array_key_mixed( $array )
    {
        if(is_array($array)){
            $keys_int = false;
            $keys_assoc = false;
            $vals_int = false;
            $vals_assoc = false;
            foreach($array as $key=>$val){
                if(is_int($key)){
                    $keys_int[] = $key;
                    $vals_int[] = $val;
                };
                if(is_string($key)){
                    $keys_assoc[] = $key;
                    $vals_assoc[] = $val;
                };
            };
            if($keys_int && $keys_assoc){
                return true;
            }else{
                return false;
            };
        }else{
            /* На входе не массив */
            /* ENTER NOT ARRAY */
            return false;
        };
    }

    /*
     * Проверка присутствуют ли одинаковые значения в массиве
     *
     * Если значения повторяются возвращает true
     * Если значения не повторяются возвращает false
     *
     * @return true || false
     */
    public static function is_array_value_repeat( $array )
    {
        if(is_array($array)){

            foreach($array as $key=>$val){
                foreach($array as $key2=>$val2){
                    if($key === $key2){continue;};
                    if($val == $val2){return true;};
                };
            };
            return false;
        }else{
            /* На входе не массив */
            /* ENTER NOT ARRAY */
            return false;
        };
    }
/* !!!
 * $array = array(
    123 => 0,
    'qwe' => 'asd1',
);
 * здесь выводит true
 */

    /*
     * Возвращает встречающиеся значения в массиве
     * если такие имеются, иначе false.
     *
     * Принимает исходный массив и возвращает массив с одинаковыми значеними.
     * Если второй аргумент true, то возвращает массив с исходными ключами.
     * Если второй аргумент false, то возвращает массив не сохраняя исходные ключи.
     * Второй аргумент имеет смысл ставить в false если уверены, что в исходном массиве
     * только одно значение имеет совпадения.
     *
     * @return array
     * false otherwise.
     */
    public static function array_value_repeat( $array, $key_save=true  )
    {
        if(is_array($array)){
            $array_out = false;
            foreach($array as $key=>$val){
                foreach($array as $key2=>$val2){
                    if($key === $key2){continue;};
                    if($val == $val2){
                        if($key_save === true){
                            $array_out[$val][] = $key;
                        };
                        if($key_save === false){
                            # Здесь сохранение найденного
                            $array_out[] = $val;
                            #$array_out[] = $val2;
                        };
                    };
                };
            };
            if($key_save === true){
                if(is_array($array_out)){
                    foreach ($array_out as $key=>$val) {
                        $array_out[$key] = array_unique($val);
                    };
                };
            };
            return $array_out;
        }else{
            /* На входе не массив */
            /* ENTER NOT ARRAY */
            return false;
        };
    }

    /*
     * Псевдонимы для методов в верблюжьем стиле
     * @Alias
     */
    public static function isArrayKeyNumber( $array )
    {
        return self::is_array_key_number($array);
    }
    public static function isArrayKeyString( $array )
    {
        return self::is_array_key_string($array);
    }
    public static function isArrayKeyMixed( $array )
    {
        return self::is_array_key_mixed($array);
    }
    public static function isArrayValRepeat( $array )
    {
        return self::is_array_value_repeat($array);
    }
    public static function arrayValRepeat()
    {
        $args = func_get_args();
        if(!isset($args[1])){$args[1]=true;};
        return self::array_value_repeat($args[0], $args[1]);
    }
}