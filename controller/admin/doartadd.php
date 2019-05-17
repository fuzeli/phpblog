<?php
// 1、接收表单的数据
// var_dump( $_POST );测试

// 2、生产文件
file_put_contents('./data/arts/'.$_POST['title'],$_POST['content']);

// 3、提示,跳转到列表页
message('添加成功！','artlist');