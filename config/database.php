<?php
    namespace jingxuan\config;
    //  数据库连接配置信息
    class dataBase{
        function configDatabase(){
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "jingxuan";
            return array($servername,$username,$password,$dbname);
        }

    }