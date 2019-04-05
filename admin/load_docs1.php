<?php
		
require('config.php');
	$output='';
		$select="SELECT * FROM documents Join classes on documents.class=classes.classid or documents.class=classes.classname order by Sno asc";
		$output.='<table border="1"><th bgcolor="#ff9900">Sno</th><th bgcolor="#ff9900">Description</th><th bgcolor="#ff9900">Title</th><th bgcolor="#ff9900">Type</th><th bgcolor="#ff9900">Class ID</th><th bgcolor="#ff9900">Stream</th><th bgcolor="#ff9900">Form</th><th bgcolor="#ff9900">Delete</th>';
	$result=mysqli_query($conn,$select)or die(mysqli_error($conn));
 	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<tr>
			<td bgcolor="#ffdca8">'.$row["Sno"].'</td>
			<td bgcolor="#ffdca8">'.$row["Description"].'</td>
			<td bgcolor="#ffdca8">'.$row["Title"].'</td>
			<td bgcolor="#ffdca8">'.$row["Type"].'</td>
			<td bgcolor="#ffdca8">'.$row["class"].'</td>
			<td bgcolor="#ffdca8">'.$row["classname"].'</td>
			<td bgcolor="#ffdca8">'.$row["form"].'</td>
			<td class="dltbtn" data-id1="'.$row["Sno"].'" bgcolor="red">X</td>
			</tr>';
		}
	}
	else
	{
		$output.='No File Found';
	}
	$output.='</table>';

echo $output;
?>