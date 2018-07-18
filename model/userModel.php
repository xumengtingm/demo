<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2018/5/25
 * Time: 17:11
 */
error_reporting(E_ALL ^ E_DEPRECATED);
class userModel {

   public	function __construct(){
        mysql_connect("127.0.0.1","root","");
        mysql_select_db("demo");
        mysql_query("set names utf8");
    }

    public function find(){
        $sql = 'select * from goods';

        $ret = mysql_query($sql);

        $data =array();
        while ($arr = mysql_fetch_assoc($ret)) {
            $data[] = $arr;
        }

        return $data;
    }
}