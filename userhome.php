<?php
include "db.php";
if(!isset($_SEESION["ID"]))
{
	header("index.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>LIB</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</style>
</head>
<body>
<div class="container">
	<div class="header">
		<h1>Library Management System</h1>
	</div>
	<div class="wrapper">
		<h3 class="heading">Welcome </h3>
		
	</div>
	<div class="nav">
		<?php
		include "usernavbar.php";
		?>
	</div>
	<div class="foot">
		<p>Copyright &copy; Library Management System</p>
	</div>
</div>
</body>
</html>