<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $tempPass=$_POST['password'];
    $password=password_hash($tempPass, PASSWORD_DEFAULT);

    $sql="INSERT INTO users(name,surname,email,password)VALUES(:name,:surname,:email,:password)";

    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':surname',$surname);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':password',$password);

    $stmt->execute();
    echo "added";
    header("Location:../php/login.php?name=$name&password=$password");
}




?>