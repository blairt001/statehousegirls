<?php
require('config.php');
	$output='';
	$query="SELECT MATH,KISW,ENG,HIST,IRE,CRE,GEO,AGRIC,ART,COMP,HSE,GER,FRE,BUS,MUS,PHY,BIO,CHEM FROM student";
	$result=mysqli_query($conn,$query);
	$output.='
	<div class="table-responsible">
	<table class="table table-bordered" border="1">
	<tr>
	
	<th width="5%">MATH</th>
	<th width="6%">KISW</th>
	<th width="6%">ENG</th>
	<th width="6%">HIST</th>
	<th width="6%">IRE</th>
	<th width="5%">CRE</th>
	<th width="6%">GEO</th>
	<th width="6%">AGRIC</th>
	<th width="6%">ART</th>
	<th width="6%">COMP</th>
	<th width="5%">HSE</th>
	<th width="6%">GER</th>
	<th width="6%">FRE</th>
	<th width="6%">BUS</th>
	<th width="6%">MUS</th>
	<th width="5%">PHY</th>
	<th width="6%">BIO</th>
	<th width="6%">CHEM</th>
	
	</tr>'; 
	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<tr>
			<td>'.$row["Sno"].'</td>
			<td class="Admno"   contenteditable>'.$row["MATH"].'</td>
			<td class="Name"    contenteditable>'.$row["KISW"].'</td>
			<td class="Initial"  contenteditable>'.$row["ENG"].'</td>
			<td class="Domain"  contenteditable>'.$row["HIST"].'</td>
			<td class="Code"   contenteditable>'.$row["IRE"].'</td>
			</tr>';
		}

	}
	else
	{
		$output.='<tr>
			<td colspan="10">No Subject Found </td>
			</tr>
		';
	}
	$output.='</table>
	</div>';
echo $output;
?>