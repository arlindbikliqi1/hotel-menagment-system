<?php
include_once("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getUsers = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $getUsers->bindParam(':id', $id);
    $getUsers->execute();
    $users = $getUsers->fetchAll();
} else {
    // Handle the case when 'id' is not provided in the URL
    $users = [];
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
<?php foreach ($users as $user): ?>
    <form action="update.php" method="POST">
        <input type="number" name="id" value="<?php echo $user['id']; ?>" readonly><br>
        <input type="text" name="name" value="<?php echo $user['name']; ?>"><br>
        <input type="text" name="surname" value="<?php echo $user['surname']; ?>"><br>
        <input type="email" name="email" value="<?php echo $user['email']; ?>"><br><br>
        <button type="submit" name="update">UPDATE</button>
    </form>
<?php endforeach; ?>

<a href="dashboard.php">Dashboard</a>
</body>
</html>