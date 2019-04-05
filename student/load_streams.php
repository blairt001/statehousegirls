<?php
require('config.php');
$form=$_POST['form'];
	$output='';
	$query="SELECT StreamId,Name FROM stream where FormId like '%".$form."' order by sno asc";
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
	$output.='</table>
	</div>';
echo $output;
?>