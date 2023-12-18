<?php
session_start();

if (!isset($_SESSION['login'])) {


?>


<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body style="background-image:url(bg1.jpg); background-repeat:;">

 <form action="vendor/validasi.php" method="post">
 	<!-- <img class="mx-auto" src="kupu_remove.png" width="200px;" height="100px;"> -->
 	<h4 class="text-center">welcome newcomer!!!</h4> 

 	<div class="container justify-content-center rounded-3 bg-light p-4" style="height: 500px; width: 600px;">
 		<h3 class="text-center fst-italic fw-semibold " style="color: #DDA0DD;">Login Your Account</h3>


		<?php

		@session_start();
		if (isset($_SESSION["info"])) { 
		?>

		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<?php 
			echo $_SESSION["info"];

			?> 
		</div> 

		<?php
		unset($_SESSION["info"]);
		}
		?>




	 	<div class="m-3">
			<label for="username" class="form-label font-monospace">Username</label>
			<input type="text" placeholder="isi username" class="form-control" id="username" aria-describedby="username"
			 name="usernamediweb">
			<div id="username" class="form-text font-monospace">Masukkan Username Anda</div>
		</div>

		<div class="m-3">
			<label for="password" class="form-label font-monospace">Password</label>
			<input type="password" placeholder="isi password" class="form-control" id="password" 
			aria-describedby="password" name="passworddiweb">
			<div id="password" class="form-text font-monospace">Masukkan Password Anda</div>
		</div>

		<div class="d-grid gap-2">
		  <button class="btn btn-primary" style="background-color: #EE82EE;" type="submite">Masuk</button>
		</div>

 	</div>


  
 </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

<?php
}else{
	header("location: index.php");
	exit();
}

?>