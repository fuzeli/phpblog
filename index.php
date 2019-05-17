<?php
// 用get 传参 用来区分你要干什么
/*
 入口文件:
1、项目初始化
    SESSION
    加载函数库
2、加载相应的功能模块 

*/

// 在入口文件定义一个常量 在html里调用
define('IN','index.php');

include('functions.php');//引入封装函数/包含函数

// 只记住，入口文件，就是把所有文件放到一个文件里

// 接收请求，默认是 main 页面
// isset : 判断一个变量是否存在,有可能出现值为空的情况，所以这里使用empty更合适
$action = !empty($_GET['a']) ? $_GET['a'] : 'index';

// 加载要请求的文件
include('./controller/index/'.$action.'.php');