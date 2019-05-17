<?php
   // 4.提示信息 第一个参数是提示信息 第二个参数是跳转的页面
   function message($mess,$url)
   {
    //    在地址文件上加上入口文件
    $url = IN.'?a='.$url;
       echo <<<JS
       <script>
            alert('{$mess}');
            location.href = '{$url}';
       </script>
JS;
    exit;

   }

//    判断是否登录
function check_login()
{
    // isset：判断一个变量是否存在
// 判断 $_SESSION 中有没有一个叫做 name 的键
if(!isset($_SESSION['name']))
{
    //提示信息
    message('必须先登录','login');
    }
}


// 后台加载一个表态页
function view($name)
{
    include('view/admin/'.$name.'.html');
}

// 前台加载一个表态页
function template($name)
{
    include('view/index/'.$name.'.html');
}