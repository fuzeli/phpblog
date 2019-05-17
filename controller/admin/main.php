<?php
// 第1步
// 判断   SESSION 中有没有登录的标记
// session_start();//开启 入口文件已经开启
// 包含提示函数
// include('./functions.php'); 入口文件已经 引入函数

// 验证登录
// check_login(); 因为每个文件都咬验证 所以把它放到入口文件里

// 加载后台的页面调用函数 index.html
view('index');