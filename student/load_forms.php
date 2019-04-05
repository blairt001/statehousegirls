<?php
require('config.php');
	$output='';
	$query="SELECT FormId,Name FROM form order by sno asc";
	$result=mysqli_query($conn,$query);
	$output='';
$output.='<option value="">Choose Form</option>';

	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<option value="'.$row["FormId"].'">'.$row["Name"].'</option>';
		}
	}
	else
	{
		$output.='<option value="">No Form Found</option>
		';
	}
	$output.='</table>
	</div>';
echo $output;
?>