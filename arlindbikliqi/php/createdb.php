<?php


$host="localhost";
$user="root";
$pass="";

try{
    $conn=new PDO("mysql:host=$host",$user,$pass);
    $sql="CREATE database hotel";
    $conn->exec($sql);
    echo "database is created";
}catch(Expection $e){
    echo $e;
}


?>