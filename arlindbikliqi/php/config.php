<?php

session_start();

$host="localhost";
$user="root";
$pass="";
$db="hotel";


try{
    $conn=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}catch(Expection $e){
    echo $e;
}





?>