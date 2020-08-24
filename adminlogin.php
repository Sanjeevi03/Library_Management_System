<?php
session_start();
include "db.php";
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
		<h3 class="heading">Admin Login</h3>
		<div class="center">
			<?php
				if (isset($_POST["submit"])){
					$sql="SELECT * FROM admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
					$res=$db->query($sql);
					if ($res->num_rows>0){
						$row=$res->fetch_assoc();
						$_SESSION['AID']=$row['AID'];
						$_SESSION['ANAME']=$row['ANAME'];
						header("location:adminhome.php");
					}
					else{
						echo "<p class='err'>Invalid User Credentials</p>";
					}
				}

			?>
			<form action="adminlogin.php" method="POST">
				<label>Name</label>
				<input type="text" name="aname" required="">
				<label>Password</label>
				<input type="Password" name="apass" required="">
				<button type="submit" name="submit"> Login</button>
			</form>
		</div>
	</div>
	<div class="nav">
		<?php
		include "navbar.php";
		?>
	</div>
	<div class="foot">
		<p>Copyright &copy; Library Management System</p>
	</div>
</div>
</body>
</html>