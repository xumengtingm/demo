<?php
header("content-type:text/html;charset=utf8");
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2018/5/21
 * Time: 9:03
 */
class index {
    public function action(){
//        I 接值
//        $model = new tools();
//        echo $model->I('get.a');

  //      封装M
        $data =  M('userModel')->find() ;


        $obj = new view(ROOT_PATH) ;
        $obj->featch('index.php',array('send'=>$data));
    }

}