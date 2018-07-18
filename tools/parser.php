<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2018/5/25
 * Time: 17:25
 */

class parser {
 public function parVar($dir,$data){
     $filePath =  './view/'.$dir;
     $patten = '/\{\$([\w]+)\}/';
     if(preg_match($patten,file_get_contents($filePath))){
        $files = preg_replace($patten,"<?php print_r(\$data); ?>",file_get_contents($filePath));
         file_put_contents('./runtime/'.$dir,$files);
         return ROOT_PATH.'/runtime/'.$dir;


     }
 }
}