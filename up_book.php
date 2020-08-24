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
		<h3 class="heading">Upload Book</h3>
		<div class="center">
			<?php

			if(isset($_POST["submit"]))
			{
				$tar_dir="book/";
				$tar_file=$tar_dir.basename($_FILES["efile"]["name"]);
				if(move_uploaded_file($_FILES["efile"]["tmp_name"],$tar_file))
				{
					$sql="insert into book(BTITLE,KEYWORDS,FILE) VALUES('{$_POST["bname"]}','{$_POST["keys"]}','{$tar_file}')";
					$db->query($sql);
					echo "<p>SUCCESS</p>";
				}
				else
				{
					echo "Error";
				}
			}

			?>
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
				<label>Book Title</label>
				<input type="text" name="bname" required>
				<label>Keyword</label>
				<textarea name="keys" required></textarea>
				<label>Upload File</label>
				<input type="file" name="efile" required>
				<button type="submit" name="submit">Upload new book</button>
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