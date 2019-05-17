<?php
//1、 函数在入口文件已经引入 可直接调用
// 2、artlist.php文件直接被引入入口文件
//3、 函数文件直接引入artlist.php

// 读取 arts 目录中所有的文件名
$data = scandir('./data/arts');

// 从数组中删除前两个文件名
unset($data[0]);
unset($data[1]);
// var_dump($data);//测试

// 加载页面
view('posts');//调用
