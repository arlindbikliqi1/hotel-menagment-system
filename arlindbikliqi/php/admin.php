<?php
include_once('config.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $password = test_input($_POST["password"]);
    
    $stmt = $conn->prepare("SELECT * FROM admin WHERE name = :name AND password = :password");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch();
    
    if ($user) {
        header("location: ../php/dashboard.php");
        exit;
    } else {
        header("location: ../php/staff.php");
        die();
    }
}
?>

