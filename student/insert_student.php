<?php
require('config.php');
$fname=$_POST['fname'];
$admno=$_POST['admno'];
 $oname=$_POST['oname'];
 $lname=$_POST['lname'];
 $gender=$_POST['gender'];
 $paddress=$_POST['paddress'];
 $pcode=$_POST['pcode'];
 $town=$_POST['town'];
 $form=$_POST['form'];
 $stream=$_POST['stream'];
 $date=$_POST['date'];
 	$output='';
 	$insert=('INSERT INTO student(Admno,Fname,Oname,Lname,Paddress,Pcode,Town,DOB,Form,Stream,Gender) VALUES("'.$admno.'","'.$fname.'","'.$oname.'","'.$lname.'",'.$paddress.','.$pcode.',"'.$town.'","'.$date.'",'.$form.',"'.$stream.'","'.$gender.'")');
 	if(mysqli_query($conn, $insert)){

 		$output.=' Student Saved';
 	}
 	else
 	{
 		$output.='Student not saved'.mysqli_error($conn);
 	}
 	echo $output;
?>