<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Storage;



class FileHelper {

    /**
     * @param string $name
     * @param string $content
     * 
     * @return void
     */
    public static function append($name, $content){
        Storage::append($name, $content);
    }
    
}