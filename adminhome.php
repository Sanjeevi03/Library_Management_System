<?php
include "db.php";
session_start();
function countRecord($sql,$db)
{
	$res=$db->query($sql);
	return $res->num_rows;	
}
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
	.re ul{
	color: red;
	list-style-type:square;
}

.re li{
	margin-top: 10px;
}
</style>
</head>
<body>
<div class="container">
	<div class="header">
		<h1>Library Management System</h1>
	</div>
	<div class="wrapper">
		<h3 class="heading">Welcome Admin</h3>
		<div class="center">
			<ul class="re">
				<li>Total Student	:<?php echo countRecord("select * from user1",$db); ?></li>
				<li>Total Books		:<?php echo countRecord("select * from book",$db); ?></li>
				<li>Total Request	:<?php echo countRecord("select * from request",$db); ?></li>
				<li>Total Comments	:<?php echo countRecord("select * from comment",$db); ?></li>
			</ul>


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