<?php
    // 入口文件已经加载了 '退出';  // 引入封装函数
  
    //清空 SESSION
    $_SESSION = [];

    // 跳转到登录页面login.php再跳login.html
    message('退出成功！','login');
