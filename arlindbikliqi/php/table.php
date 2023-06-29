<?php

$host="localhost";
$user="root";
$pass="";
$db="hotel";

try{
    $conn=new PDO("mysql:host=$host;dbname=$db",$user,$pass);

    $sql="CREATE TABLE users (id INT(255)NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)NOT NULL,
    surname VARCHAR(255)NOT NULL,
    email VARCHAR(255)NOT NULL,
    password VARCHAR(255)NOT NULL);";

    $conn->exec($sql);
    echo "done";
}catch(Expection $e){
    echo $e;
}


?>