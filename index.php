<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2018/5/11
 * Time: 10:47
 */
define('ROOT_PATH',dirname(__FILE__));
require_once(ROOT_PATH.'/controller/'.$_GET['c'].'.php');
require_once  './tools/M.php';
require_once('autoLoad.php');
$handler = new $_GET['c'];
$handler ->$_GET['a']();
