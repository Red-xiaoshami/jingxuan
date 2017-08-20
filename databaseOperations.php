<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2017/7/31
 * Time: 下午12:23
 */


    require dirname(__FILE__) . '/../config/database.php';

    class doSql{
        private $conn;

        function conDat(){
            $dataBase = new jingxuan\config\dataBaseInfo();
            //  数据库操作
            $this->conn = mysqli_connect($dataBase->configDatabase()[0], $dataBase->configDatabase()[1], $dataBase->configDatabase()[2], $dataBase->configDatabase()[3]);
            if (!$this->conn) {
                die("连接失败le: " . mysqli_connect_error());
            }
            echo "数据库连接成功</br>";
        }

//      密码登陆
        function sqlLogin($data){
            self::conDatabase();
            $sql_pwd = "SELECT password FROM user_info where name = '".$data."'";
            $result = mysqli_query($this->conn, $sql_pwd);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    return $row['password'];
                }
            } else {
                echo "账号不存在！";
            }
            mysqli_close($this->conn);
        }
# 注释  添加
//      提交评论xin
        function sqlComment($data){
  

            self::conDatabase();
            $sql = "update user_info set content='".$data."' where name='".$_COOKIE['user_name']."'";
            $result = mysqli_query($this->conn, $sql);
            mysqli_close($this->conn);
            return $result;
        }



    }
