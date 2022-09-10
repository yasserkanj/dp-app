<?php
namespace App\PaymentGateways\Mapper;


class DTO implements \JsonSerializable{


    public function jsonSerialize(){
        $vars = get_object_vars($this);
        $jsonArray = array();
        if (is_array($vars)){
            foreach($vars as $key => $var){
                $getMethod = 'get' . \Str::studly($key);
                if(method_exists($this, $getMethod)){
                    $jsonArray[$key] = $this->{$getMethod}();
                }
            }
        }
        return $jsonArray;
    }

}