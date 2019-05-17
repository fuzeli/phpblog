<?php
    // echo '测试编辑';
    // 1、接收标题
    $title = $_GET['title'];

    // 3、先读取出这篇文章的内容
    $content = file_get_contents('./data/arts/'.$title);
    //2、显示修改的表单
    view('post-edit');
    // 最后要做的就是把标题和内容放到表单里就行了 post-edit.html 显示