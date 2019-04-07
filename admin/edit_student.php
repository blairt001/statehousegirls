<?php
require('config.php');
$sno=$_POST['sno'];
$text=$_POST['text'];
 $column_name=$_POST['column_name'];
 
 	$output='';
 	$update=('UPDATE student SET '.$column_name.' ="'.$text.'" where SNo='.$sno.'');
 	if(mysqli_query($conn, $update)){

 		$output.=' Student '.$column_name.' Updated';
 	}
 	else
 	{
 		$output.='Student '.$column_name.' not Updated';
 	}
 	echo $output;
?>