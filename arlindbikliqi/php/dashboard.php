<?php include('header.php')?>


	<?php 
		include_once('config.php');

		$getUsers = $conn->prepare("SELECT * FROM users");

		$getUsers->execute();

		$users = $getUsers->fetchAll();

	 ?>

<head>
	 	<style> 

body{
        background-image: url('../img/background.jpg');
      }

	 		a{
	 			font-size:20px; 
	 		}
	 		a:hover{
	 			color:red;
	 				 
	 		}

	 	</style>
		<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		</head>



		<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand mt-2 mt-lg-0">
          <img src="../img/logo.png"
            height="55px"
            width="80px"/>Hotel Plaza</a>
      </div>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand mt-2 mt-lg-0">
          <img src="../img/admin.png"
            height="55px"
            width="80px"/>Welcome Admin</a>
      </div>
      <div class="d-flex align-items-center">
        <a class="text-reset me-3" href="#">
        </a>
		<div class="dropdown">
          <a id="main" href="../php/index.php">Go to main Page</a>
        </div>
        <div class="dropdown">
          <a id="signout" href="../php/signout.php">
            <img src="../img/out.png"
              class="rounded-circle"
              height="30px"
              width="40px"
              alt="Sign Up"
              loading="lazy"/>Sign Out</a>
        </div>
      </div>
    </div>
  </nav>

  <br>
	 <br>
	 <h1 id="h1">Users Dashboard</h1>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Email</th>
	  <th scope="col">Password</th>
    </tr>
  </thead>




  <tbody>




	 	<?php 

	 		foreach ($users as $user ) {
			
		?>
			<tr> 
				<td> <?= $user['id'] ?> </td>
				<td> <?= $user['name'] ?> </td>
				<td> <?= $user['surname']  ?> </td> 
				<td> <?= $user['email']  ?> </td> 
				<td> <?= $user['password']  ?> </td>
				<td><?= "<a href='delete.php?id=$user[id]'> Delete</a>"?><td>
				<td><?=" <a  href='edit.php?id=$user[id]'> Update </a>"?></td>

			</tr>
		
		<?php 

			}

	 	 ?>


	 </table>
<?php include('header.php')?>


	<?php 

		include_once('config.php');

		$getreservation = $conn->prepare("SELECT * FROM reservation");

		$getreservation->execute();

		$reservation = $getreservation->fetchAll();

	 ?>

	 <br>
	 <br>
	 <h1 id="h1">Reservation Dashboard</h1>
	 <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
	  <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Age</th>
	  <th scope="col">Person</th>
	  <th scope="col">Room</th>
    </tr>
  </thead>


	</thead>


	 	<?php 

	 		foreach ($reservation as $reservation ) {
			
		?>
			<tr> 
				<td> <?= $reservation['id'] ?> </td>
				<td> <?= $reservation['date'] ?> </td>
				<td> <?= $reservation['name']  ?> </td> 
				<td> <?= $reservation['surname']  ?> </td> 
				<td> <?= $reservation['age']  ?> </td>
				<td> <?= $reservation['person']  ?> </td>
				<td> <?= $reservation['room']  ?> </td>
				<td> <?= "<a href='delete1.php?id=$reservation[id]'> Delete</a>"?><td>
				<td><?=" <a href='edit1.php?id=$reservation[id]'> Update </a>"?></td>

			</tr>
		
		<?php 

			}

	 	 ?>
	
</body>
</html>