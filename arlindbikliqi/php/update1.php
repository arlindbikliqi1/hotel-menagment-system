<?php
include_once('config.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$date = $_POST['date'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$age = $_POST['age'];
	$person = $_POST['person'];


	$sql = "UPDATE reservation SET date=:date, name=:name, surname=:surname, age=:age, person=:person WHERE id=:id";
	$prep = $conn->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->bindParam(':date', $date);
	$prep->bindParam(':name', $name);
	$prep->bindParam(':surname', $surname);
	$prep->bindParam(':age', $age);
	$prep->bindParam(':person', $person);

	$prep->execute();

	header("Location:dashboard.php");
}


?>
