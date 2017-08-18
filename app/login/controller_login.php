<?php
    echo "登录成功！";
//  传值
    $check_name=$_POST['name'];
    $check_pwd=$_POST['pwd'];//  传值
    require '../../database/databaseOperations.php';

    $sql = new doSql();
    $sql->conDatabase();

    if($sql->sqlLogin($check_name) == $check_pwd){
        setcookie ("user_name",$check_name);
        view('login_success', ['tip' => '登陆成功', 'success' ]);
        echo "登录成功！";
      //  header("comment.php");
        echo "<script language='javascript'>";
        echo " location='../../view/views/comment.php';";
        echo "</script>";
    }else{
        echo "密码错误！";
    }
