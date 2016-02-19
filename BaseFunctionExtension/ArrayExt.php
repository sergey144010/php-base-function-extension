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
                    if($val === $val2){return true;};
                };
            };

/*
            $array_one = $array;
            $array_two = $array;
            foreach ($array_one as $key_one=>$val_one) {

                foreach ($array_two as $key_two=>$val_two) {
                    if($key_one === $key_two){continue;};
                    if($val_one === $val_two){ return true;};
                }


            }
*/
            return false;
        }else{
            /* На входе не массив */
            /* ENTER NOT ARRAY */
            return false;
        };
    }

    /*
     * Возвращает встречающиеся значения в массиве
     * если такие имеются, иначе false.
     *
     * Принимает массив и возвращает массив повторяющихся значений.
     * Если второй аргумент true, то возвращает массив с исходными ключами.
     * Если второй аргумент false, то возвращает массив не сохраняя исходные ключи.
     *
     * @return array
     * false otherwise.
     */
    public static function array_value_repeat( $array, $key_save=true  )
    {
        if(is_array($array)){

            $array_out = false;

            if($key_save === true){
                foreach($array as $key=>$val){
                    foreach($array as $key2=>$val2){
                        if($key === $key2){continue;};
                        if($val === $val2){
                            if(isset($array_out[$val]) and in_array($key ,$array_out[$val], true)){
                                continue;
                            };
                            $array_out[$val][] = $key;
                        };
                    };
                };
            };

            if($key_save === false){
                $array_preparation = self::array_value_repeat($array, true);
                foreach ($array_preparation as $key3=>$val3) {
                    for ($i=1;$i<=count($val3);$i++){
                        $array_out[] = $key3;
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