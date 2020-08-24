<?php
session_start();
include "db.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>LIB</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<div class="header">
		<h1>Library Management System</h1>
	</div>
	<div class="wrapper">
		<h3 class="heading">User Login</h3>
		<div class="center">
			<?php
				if (isset($_POST["submit"])){
					$sql="SELECT * FROM user1 where NAME='{$_POST["name"]}' and PASS='{$_POST["pass"]}'";
					$res=$db->query($sql);
					if ($res->num_rows>0){
						$row=$res->fetch_assoc();
						$_SESSION['ID']=$row['ID'];
						$_SESSION['NAME']=$row['NAME'];
						header("location:index.php");
					}
					else{
						echo "<p class='err'>Invalid User Credentials</p>";
					}
				}

			?>
			<form action="userhome.php" method="POST">
				<label>Name</label>
				<input type="text" name="name" required="">
				<label>Password</label>
				<input type="Password" name="pass" required="">
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