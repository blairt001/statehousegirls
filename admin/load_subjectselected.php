<?php
require('config.php');
//print_r($_POST);
$output='';
if(isset($_POST['subjects']) && ($_POST['subjects']!=""))
{
	$count=$_POST['subjects'];
	$admno=$_POST['admno'];
	$type=$_POST['type'];
	$term=$_POST['term'];
	$year=$_POST['year'];
	$exam=$_POST['exam'];
	$insert=('INSERT INTO exam(Admno,ExamId,Year,Term,ExamType) VALUES('.$admno.',"'.$exam.'",'.$year.','.$term.',"'.$type.'")');
	if(mysqli_query($conn, $insert)){
 		 $output.=' Student Admno Saved</br>';
 		if($count)
{
 foreach ($count as $subject ) {
		$selectcolumns="Show columns from exam like '$subject'";
		$update="UPDATE EXAM SET $subject=0 where Admno=".$admno."";
$columns=mysqli_query($conn,$selectcolumns);
if(mysqli_query($conn, $update)){
 		 $output.=' Subject registerd</br>';

 		}
 		else
 		{
 			 $output.=' Subject not registerd</br>'.mysqli_error($conn);
 		}
	
	}
}
 	}
 	else
 	{
 		$output.='Student Admno Not Saved'.mysqli_error($conn);
 	}
	// $output.='You have Selected the following subjects:';

}
else
{
$output.='<h4>No Subject Selected!!.<br></h4>';
}

echo $output;

?>