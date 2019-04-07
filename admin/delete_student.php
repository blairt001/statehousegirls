<?php
require('config.php');
$sno=$_POST['sno'];
 	$output='';
 	$update=('Delete from student where SNo='.$sno.'');
 	if(mysqli_query($conn, $update)){

 		$output.=' Student Deleted';
 	}
 	else
 	{
 		$output.='Student not Deleted';
 	}
 	echo $output;
?>