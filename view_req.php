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
	
</head>
<body>
<div class="container">
	<div class="header">
		<h1>Library Management System</h1>
	</div>
	<div class="nav">
		<?php
			include "adminnavbar.php";
		?>
	</div>
	<div class="wrapper">
		<h3 class="heading">Viewing Request</h3>
		<div class="center">
		<?php 
			$sql="select user1.NAME ,request.MES,request.LOGS from user1 inner join request on user1.ID=request.ID";
			$res=$db->query($sql);
			if($res->num_rows > 0)
			{
				echo "<table border='1px'>";
				echo "<tr>";		
				echo "<th>SNO</th>";			
				echo "<th>NAME</th>";		
				echo "<th>MESSAGE</th>";			
				echo "<th>LOGS</th>";
				echo "</tr>";	
				
						
				$i=0;
				while ($row=$res->fetch_assoc())
				 {
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row['NAME']}</td>";
					echo "<td>{$row['MES']}</td>";
					echo "<td>{$row['LOGS']}</td>";
					echo "</tr";
					
				}
				echo "</table>";
			}
			else
			{
				echo "<p class='error'>No Request Records Found</p> ";
			}

			 ?>

		</div>
		
	</div>
	
	
</div>
	
</body>
</html>