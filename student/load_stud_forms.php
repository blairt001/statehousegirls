<?php
require('config.php');
$admno=$_POST['admno'];
	$query="SELECT Form FROM student  where Admno =".$admno." order by SNo asc";
	$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			echo $row["Form"];
		}
	}
	else
	{
		echo "No form Found";
	}
	
?>