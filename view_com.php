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
		<h3 class="heading">Viewing Comments</h3>
		<div class="center">
		
		<?php 
			$sql="select book.BTITLE,user1.NAME,comment.COMM,comment.LOGS from comment inner join book on book.BID=comment.BID inner join user1 on comment.SID=user1.ID";
			$res=$db->query($sql);
			if($res->num_rows > 0)
			{
				echo "<table border='1px'>";
				echo "<tr>";		
				echo "<th>SNO</th>";			
				echo "<th>BOOK </th>";		
				echo "<th>NAME</th>";			
				echo "<th>COMMENT</th>";
				echo "<th>LOGS</th>";
				echo "</tr>";	
				
						
				$i=0;
				while ($row=$res->fetch_assoc())
				 {
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row['BTITLE']}</td>";
					echo "<td>{$row['NAME']}</td>";
					echo "<td>{$row['COMM']}</td>";
					echo "<td>{$row['LOGS']}</td>";
					echo "</tr";
					
				}
				echo "</table>";
			}
			else
			{
				echo "<p class='err'>No comment Found</p> ";
			}

			 ?>

		</div>
		
	</div>
	
	
</div>
	<footer>
	<p>Copyright &copy; Library Management System</p>
</footer>	
</body>
</html>