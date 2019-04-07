<?php
require('config.php');
	$name=$_POST['name'];
 	$initial=$_POST['initial'];
 	$subject=$_POST['subject'];
 	$domain=$_POST['domain'];
 	$code=$_POST['code'];
 	$output='';
	$insert=('INSERT INTO subject(SubjectId,Name,Initial,Domain,Code) VALUES("'.$subject.'","'.$name.'","'.$initial.'","'.$domain.'",'.$code.')');
	$insertcolumnexam=('Alter table Exam add '.$name.' INT(3) Not null DEFAULT -1');
 	if(mysqli_query($conn, $insert)){
       $output.=' Subject Saved</br>';
 		/*if(mysqli_query($conn,$insertcolumnexam)){
 			$output.='Subject Registered Succesful';
 		} 
 		else
 		{
 			$output.='Subject Registration Failed'.mysqli_error($conn);
 		}*/

 	}
 	else
 	{
 		$output.='Subject not saved'.mysqli_error($conn);
 	}
 	echo $output;
?>