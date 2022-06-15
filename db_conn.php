<?php

$sname = "database-2.cbhxovzl1tbc.ap-northeast-2.rds.amazonaws.com";
$uname = "GLEE";
$password = "DNFJR1111";
$db_name = "codna";

$conn = mysqli_connect("$sname, $uname, $password, $db_name");

if(!$conn){
    echo "connection failed!";
    exit();
}