<?php
require('config.php');
$sno=$_POST['sno'];
 	$output='';
 	$update=('Delete from documents where Sno='.$sno.'');
 	if(mysqli_query($conn, $update)){

 		$output.=' Document Deleted';
 	}
 	else
 	{
 		$output.='Document not Deleted';
 	}
 	echo $output;
?>