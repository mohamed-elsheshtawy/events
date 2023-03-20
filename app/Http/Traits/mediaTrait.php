<?php
namespace App\Http\Traits;

trait mediaTrait
{
    function saveImage($media,$folder){
        //save media in folder
        $file_extension = $media -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = $folder;
        $media -> move($path,$file_name);

        return $file_name;
}

}







