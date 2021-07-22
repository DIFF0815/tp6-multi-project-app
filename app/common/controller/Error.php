<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2021/7/20
 * Time: 10:21
 */

namespace app\common\controller;

//公共空控制器 每个应用下空控制器可以继承改类,还可以重写该类的方法
class Error {

    /**
     * @param $method
     * @param $args
     * @return string
     */
    public function __call($method, $args){
        return 'error request!';
    }

}
