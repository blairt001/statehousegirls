<?php
require('config.php');
	$output='';
	if($_FILES['task_file']){

		$imgFile = $_FILES['task_file']['name'];
		$tmp_dir = $_FILES['task_file']['tmp_name'];
		$imgSize = $_FILES['task_file']['size'];
	$output.='Filename:'.$imgFile.'<br>';
	$output.='Directory:'.$tmp_dir.'<br>';
	$output.='Size:'.$imgSize.'<br>';
	
}
else
{
	$output.='Not file sent';
}
	/*$query="SELECT * FROM form order by sno asc";
	$result=mysqli_query($conn,$query);
	$output.='
	<div class="table-responsible">
	<table class="table table-bordered" border="1">
	<tr>
	<th width="2%">Sno</th>
	<th width="5%">Form ID</th>
	<th width="6%">Name</th>
	<th width="6%">Initials</th>
	</tr>'; 
	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<tr>
			<td>'.$row["Sno"].'</td>
			<td class="Admno" data-id1="'.$row["Sno"].'" contenteditable>'.$row["FormId"].'</td>
			<td class="Name" data-id2="'.$row["Sno"].'" contenteditable>'.$row["Name"].'</td>
			<td class="Initial" data-id3="'.$row["Sno"].'" contenteditable>'.$row["Initial"].'</td>
			</tr>';
		}

	}
	else
	{
		$output.='<tr>
			<td colspan="10">No Form Found </td>
			</tr>
		';
	}
	$output.='</table>
	</div>';*/
echo $output;
?>