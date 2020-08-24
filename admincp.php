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
	.center{width: 60%;}
	</style>
</head>
<body>
<div class="container">
	<div class="header">
		<h1>Library Management System</h1>
	</div>
	<div class="wrapper">
		<h3 class="heading">Change Password</h3>
		<div class="center">
			<?php

			if(isset($_POST["submit"]))
			{
				$sql="select * from admin where apass='{$_POST["opass"]}' and AID='{$_SESSION["AID"]}' ";
				$res=$db->query($sql);
				if($res->num_rows > 0)
				{
					$s="update admin set apass='{$_POST["npass"]}' where AID=".$_SESSION["AID"];
					$db->query($s);
					echo "<p class='suc'>Password Changed</p>";	
				}
			}

			?>
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
				<label>Old Password</label>
				<input type="password" name="opass" required>
				<label>New Password</label>
				<input type="password" name="npass" required>
				<button type="submit" name="submit">Update Password</button>
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