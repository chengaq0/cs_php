<?php

//$dsn = 'uri:file://rm-uf6z67iug40197303.mysql.rds.aliyuncs.com';
//$dsn = 'uri:file:///106.15.30.165';

$dsn = "mysql:dbname=cs;host=106.15.30.165";
$user = 'root';
$pwd = 'LiFeiAq0';

try{
    $conn = new PDO($dsn, $user, $pwd);
    echo '连接成功1';
}catch (PDOException $e){
    echo "1111".$e->getMessage();
}
?>