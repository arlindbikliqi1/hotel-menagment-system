<?php

include_once("config.php");

if(isset($_POST['reservation'])){
    $date=$_POST['date'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $age=$_POST['age'];
    $person=$_POST['person'];
    $room=$_POST['room'];

    $sql="INSERT INTO reservation(date,name,surname,age,person,room)VALUES(:date,:name,:surname,:age,:person,:room)";

    $stmt=$conn->prepare($sql);
    $stmt->bindParam('date',$date);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':surname',$surname);
    $stmt->bindParam(':age',$age);
    $stmt->bindParam(':person',$person);
    $stmt->bindParam('room',$room);

    $stmt->execute();
    echo "added";
    header("location: ../php/index.php");

}




?>


