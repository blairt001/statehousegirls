<?php
require('config.php');
$form=$_POST['form'];
	$query="SELECT StreamId,Name FROM Stream  where FormId =".$form." order by Sno asc";
	$result=mysqli_query($conn,$query);
		$output='';
$output.='<option value="">Choose Stream</option>';

	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<option value="'.$row["StreamId"].'">'.$row["Name"].'</option>';
		}
	}
	else
	{
		$output.='<option value="">No Stream Found</option>
		';
	}
echo $output;
?>