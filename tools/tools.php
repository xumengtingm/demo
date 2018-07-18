<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2018/5/25
 * Time: 16:28
 */

class tools {
 public function I($url){
     $data  = explode('.',$url);
     switch($data[0]){
         case 'post':
             return $this->get_post($data[1]);
             break;
         case 'get':
             return $this->get_get($data[1]);
             break;
     }
 }
    public function get_post($data){

        return  $_POST["$data"];
    }
    public function get_get($data){


        return  $_GET["$data"];

    }

}