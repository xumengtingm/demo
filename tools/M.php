<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2018/5/25
 * Time: 16:53
 */
function M($file){
    $model = new $file();
    return $model;

}

