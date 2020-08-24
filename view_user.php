<?php
include "db.php";
session_start();

if (!isset($_SESSION["AID"]))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Viewing User Details</title>
<style type="text/css">
	
	h1{
		
		color: #4d4952;
		margin-left:0.5in;

	}
	table{ 
		width: 50%;

	}
	.con{
		padding:0;
		margin: 0;
		text-align: center;
		
	}
</style>
</head>
<body>
<h1>Viewing All User Details</h1>
<div class="con" >
<?php 
	$sql="SELECT * FROM user1";
	$res=$db->query($sql);
	if($res->num_rows > 0)
	{
		echo "<table border='1px'>
			<tr><th>SNO</th><th>NAME</th><th>EMIAL</th>		
			<th>DEPARTMENT</th>
			</tr>";	
		$i=0;
		while ($row=$res->fetch_assoc())
	    {
			$i++;
			echo "<tr>";
			echo "<td>{$i}</td>";
			echo "<td>{$row['NAME']}</td>";
			echo "<td>{$row['MAIL']}</td>";
			echo "<td>{$row['DEP']}</td>";
			echo "</tr";
			echo "</table>";
		}
				
	}
	else
	{
	echo "<p class='error'>No User Records Found</p> ";
	}

			 ?>

</div>

</body>
</html>