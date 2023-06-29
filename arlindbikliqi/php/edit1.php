<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getreservation = $conn->prepare("SELECT * FROM reservation WHERE id = :id");
    $getreservation->bindParam(':id', $id);
    $getreservation->execute();
    $reservation = $getreservation->fetchAll();
} else {
    $reservation = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>

    <style>
        form>input {
            margin-bottom: 10px;
            font-size: 20px;
            padding: 5px;

        }

        button {
            background: none;
            border: none;
            border: 1px solid black;
            padding: 10px 40px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php foreach ($reservation as $reservation): ?>
    <form action="update1.php" method="POST">
        <input type="number" name="id" value="<?php echo $reservation['id']; ?>" readonly><br>
        <input type="date" name="date" value="<?php echo $reservation['date']; ?>"><br>
        <input type="text" name="name" value="<?php echo $reservation['name']; ?>"><br>
        <input type="text" name="surname" value="<?php echo $reservation['surname']; ?>"><br><br>
        <input type="number" name="age" value="<?php echo $reservation['age']; ?>"><br><br>
        <input type="number" name="person" value="<?php echo $reservation['person']; ?>"><br><br>
        <button type="submit" name="update">UPDATE</button>
    </form>
<?php endforeach; ?>

<a href="dashboard.php">Dashboard</a>
</body>
</html>