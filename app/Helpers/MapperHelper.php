<?php
namespace App\Helpers;



class MapperHelper {


    /**
     * @param array $data
     * @param object $class
     * 
     * @return object
     */
    public static function dataToObject($data, $class){
        $object = new $class();
        foreach ($data as $key => $value){
            $setMethod = 'set' . \Str::studly($key);
            if(method_exists($class ,$setMethod)) $object->{$setMethod}($value);
        }
        return $object;
    }


}