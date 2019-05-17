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
define('IN','admin.php');

session_start();// 开启session
include('functions.php');//引入封装函数/包含函数

// 只记住，入口文件，就是把所有文件放到一个文件里

// 接收请求，默认是 main 页面
// isset : 判断一个变量是否存在,有可能出现值为空的情况，所以这里使用empty更合适
$action = !empty($_GET['a']) ? $_GET['a'] : 'main';

// 因为要login和dologin到登录文件所以要判断，不人都要提示登录
// 3、登录权限验证
$noNeedLogin = ['login','dologin'];//不需要登录的地址
if(!in_array($action,$noNeedLogin))
{
    // 验证登录
    check_login();
}

// 加载要请求的文件
include('./controller/admin/'.$action.'.php');