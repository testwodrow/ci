<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/7 0007
 * Time: 14:02
 */

spl_autoload_register(function($classname){
    $_file = CI_PATH. '/classes/' . str_replace('\\','/',$classname) . '.php';
    if(file_exists($_file)){
        require_once $_file;
    }
});