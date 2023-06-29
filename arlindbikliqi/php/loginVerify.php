<?php 

include_once("config.php");

if(isset($_POST['login']))
{
  $name = $_POST['name'];
  $password = $_POST['password'];

  if(empty($name) || empty($password))
  {
    echo "Fill all the fields!";
    header( "refresh:2; url=login.php" ); 
  }else{
    $sql = "SELECT * FROM users WHERE name=:name";
    $insertSql = $conn->prepare($sql);
    $insertSql->bindParam(':name', $name);

    $insertSql->execute();
    
    if($insertSql->rowCount() > 0) {
        $data=$insertSql->fetch();
        if(password_verify($password,$data['password'])){
          $_SESSION['name']=$data['name'];
          header("Location: ../php/index.php");
        }else{
          echo "Password incorrect";
          header( "refresh:2; url=login.php" );
        }
    } else {
        echo "User not found!!";
        header("refresh:2; url=login.php");
    }
  }
} 