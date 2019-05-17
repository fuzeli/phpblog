<?php
//  echo '勾选测试';
// 1、接收数据
$title = $_POST['deltitle'];
// var_dump($title);接收标题名称数组循环删除

// 2、循环每个文章删除
foreach($title as $v)
{
    unlink('./data/arts/'.$v);
}
// 3、提示跳转
message('勾选删除成功！','artlist');
// 提示是否删除要用表单提交事件

