<?php
require('config.php');
	$output='';
	$query="SELECT * FROM classes order by classid asc";
	$result=mysqli_query($conn,$query);
	$output='';
$output.='<option value="">Choose Stream</option>';
	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<option value="'.$row["classid"].'">'.$row["classname"].'</option>';
		}
	}
	else
	{
		$output.='<option value="">No Class Found</option>
		';
	}
	$output.='</table>
	</div>';
echo $output;
?>
