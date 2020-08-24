
if (!isset($_SESSION["AID"]))
{
	header("location:index.php");
}



<ul class="adminhomestyle">
				<li>Total Student	:<?php echo countRecord("select * from user1",$db); ?></li>
				<li>Total Books		:<?php echo countRecord("select * from book",$db); ?></li>
				<li>Total Request	:<?php echo countRecord("select * from request",$db); ?></li>
				<li>Total Comments	:<?php echo countRecord("select * from comment",$db); ?></li>
			</ul>




<ul class="adminhomestyle">
				<li>Total Student	:<?php echo countRecord("select * from user1",$db); ?></li>
				<li>Total Books		:<?php echo countRecord("select * from book",$db); ?></li>
				<li>Total Request	:<?php echo countRecord("select * from request",$db); ?></li>
				<li>Total Comments	:<?php echo countRecord("select * from comment",$db); ?></li>
			</ul>





adminhome.php



<?php 
			$sql="SELECT * FROM user1";
			$res=$db->query($sql);
			if($res->num_rows > 0)
			{
				echo "<table>
						<tr>
							<th>SNO</th>
							<th>NAME</th>
							<th>EMIAL</th>
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
				}
				echo "</table>";
			}
			else
			{
				echo "<p class='error'>No User Records Found</p> ";
			}

			 ?>
		</div>
	</div> 

	<div class="nav">
		<?php
		 	include "adminnavbar.php";
		 ?>
	</div>















select book.BTITLE,user1.NAME,comment.comm,comment.LOGS from comment inner join book on book.BID=comment.BID inner join user1 on comment.SID=user1.ID