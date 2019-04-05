<?php
require('config.php');
	$output='';
	$form=$_POST['form'];
	$stream=$_POST['stream'];
	$query="SELECT SNo,Admno FROM student  where Form ='".$form."' && Stream ='".$stream."' order by SNo asc";
	
	//$query="SELECT Admno FROM student  order by SNo asc";
	$result=mysqli_query($conn,$query);
	$output='';
$output.='<option value="">Choose Admno</option>';

	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<option value="'.$row["Admno"].'">'.$row["Admno"].'</option>';
		}
	}
	else
	{
		$output.='<option value="">No Admno Found</option>
		';
	}
echo $output;
?>