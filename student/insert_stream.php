<?php
require('config.php');
	$form=$_POST['form'];
 	$name=$_POST['name'];
 	$initial=$_POST['initial'];
 	$stream=$_POST['stream'];
 	$output='';
	$insert=('INSERT INTO stream(StreamId,Name,Initial,FormId) VALUES("'.$stream.'","'.$name.'","'.$initial.'","'.$form.'")');
 	if(mysqli_query($conn, $insert)){

 		$output.=' Stream Saved';
 	}
 	else
 	{
 		$output.='Stream not saved'.mysqli_error($conn);
 	}
 	echo $output;
?>