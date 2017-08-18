<?php
//  传值
    $check_content=$_POST['content'];
    require '../../database/databaseOperations.php';
    $sql = new doSql();
    $sql->sqlComment($check_content);
    echo "评论提交成功";
