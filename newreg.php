<?php
include "db.php";
session_start();

if (!isset($_SESSION["AID"]))
{
	header("location:index.php");
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>LIB</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		

.center{
	width: 60%;
}

	</style>
</head>
<body>
<div class="container">
	<div class="header">
		<h1>Library Management System</h1>
	</div>
	<div class="wrapper">
		<h3 class="heading">Add New Student Here...!</h3>
		<div class="center">
			<?php

			if(isset($_POST["submit"]))
			{
				$sql="insert into user1 (NAME,PASS,MAIL,DEP) 
				values(
				'{$_POST["name"]}',
				'{$_POST["pass"]}',
				'{$_POST["mail"]}',
				'{$_POST["dep"]}'
				)";
				$db->query($sql);
				echo "<p>Success</p>";
			}

			?>
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" >
				<label>Name</label>
				<input type="text" name="name" required>
				<label>Password</label>
				<input type="password" name="pass" required>
				<label>Email ID</label>
				<input type="email" name="mail" required>
				<label>Department</label>
				<input type="text" name="dep">
				<button type="submit" name="submit">Add user</button>
			</form>
		</div>
	</div>
	<div class="nav">
		<?php
		include "adminnavbar.php";
		?>
	</div>

	<div class="foot">
		<p>Copyright &copy; Library Management System</p>
	</div>
</div>

</body>
</html>