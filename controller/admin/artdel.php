<?php
    // echo '测试';
 // 接收要删除的标题
$title = $_GET['title']; //第一个文章
//删除文件
unlink('./data/arts/'.$title);
//提示 ，跳回
message('删除成功！','artlist');

