<?php
// 在入口文件已经引入了函数

    // 第5步 判断登录的账号和密码
    // 1、接收表单中的数据
    $username = $_POST['username'];
    $password = $_POST['password'];
    // var_dump($password);
    // var_dump($_SESSION['name']);
    //2.判断账号是否正确
    $account = file_get_contents('./data/account');//读取账号
    // 根据行转成数组
    $account = explode("\n",$account);
    // var_dump($account);测试
    // 循环每个账号
    foreach($account as $v){
        $tmp = $username . ' '.md5($password);
        // var_dump($tmp);
        // echo strlen($tmp);测试字符长度是否相同
        // echo strlen($v);测试字符长度是否相同
        // exit;
    //如果账号相同代表登录成功 跳到3步后台
        if($tmp == $v)
        {
            // 3.账号登录，在SESSION中保存 name 做为登录成功的标记
            // 3.1 开启 session
            // 3.2把用户名保存到session中
            $_SESSION['name'] = $username;
            // 4.提示信息
            // exit;
            message('登录成功','');
        }
    }
    // 登录失败跳转到登录页面
    message('账号或密码错误！','login');
