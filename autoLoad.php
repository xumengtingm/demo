<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2018/5/12
 * Time: 11:50
 */

    function __autoload($className){

        if($className=='tools'){
            require_once  './tools/'.$className.'.php';
        }elseif($className=='userModel'){
            require_once  './model/'.$className.'.php';

        }elseif($className=='Parser'){
            require_once  './tools/'.$className.'.php';
        }
        else{
            require_once  './'.$className.'.php';
        }

}

