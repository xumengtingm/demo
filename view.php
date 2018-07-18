<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2018/5/21
 * Time: 9:03
 */

class view {
  public function featch($dir,$data){
      extract($data);
      $res = new Parser();
      $file = $res ->parVar($dir,$data);
      include $file;
  }
}