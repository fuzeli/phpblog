<?php 
    // echo '修改保存提交';
    //1、接收

    $oldtitle = $_POST['oldtitle'];   // 接收原标题
    $title = $_POST['title'];//因为在表单里面提交的所以要用$_POST接收
    $content = $_POST['content'];

    // 2、如何知道原来的文件名是什么 把原文件名也传过来

    // var_dump($_POST);
    // exit;
    // 3、把修改过的内容，写入原来的文件 写文件函数 file_put_contents('原来文件','修改过的文件')
    file_put_contents('./data/arts/'.$oldtitle,$content);

    // 4、修改文件名为新的文件名 用函数 rename('原来文件名','改过的文件名')
    rename('./data/arts/'.$oldtitle,'./data/arts/'.$title);//doartedit.php on line 16

    //5、提示跳转
    message('修改成功！','artlist');