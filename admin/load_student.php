<?php
require('config.php');
	$output='';
	$query="SELECT * FROM student WHERE AdmnNo= "$AdmnNo"";
	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	$output.='
	<div class="table-responsible">
	<table class="table table-bordered" id="table1" border="1">
	<tr>
	<th width="2%">Sno</th>
	<th width="5%">Admno</th>
	<th width="6%">First Name</th>
	<th width="6%">Other Name</th>
	<th width="6%">Last Name</th>
	<th width="6%">Gender</th>
	<th width="6%">Address</th>
	<th width="6%">Code</th>
	<th width="6%">Town</th>
	<th width="6%">Class</th>
	<th width="6%">Date of Birth</th>
	<th width="3%">Delete</th>
	</tr>'; 
	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<tr>
			<td>'.$row["SNo"].'</td>
			<td class="Admno" data-id1="'.$row["SNo"].'" contenteditable>'.$row["Admno"].'</td>
			<td class="Fname" data-id2="'.$row["SNo"].'" contenteditable>'.$row["Fname"].'</td>
			<td class="Oname" data-id3="'.$row["SNo"].'" contenteditable>'.$row["Oname"].'</td>
			<td class="Lname" data-id4="'.$row["SNo"].'" contenteditable>'.$row["Lname"].'</td>
			<td class="Gender" data-id5="'.$row["SNo"].'" contenteditable>'.$row["Gender"].'</td>
			<td class="Paddress" data-id6="'.$row["SNo"].'" contenteditable>'.$row["Paddress"].'</td>
			<td class="Pcode" data-id7="'.$row["SNo"].'" contenteditable>'.$row["Pcode"].'</td>
			<td class="Town" data-id8="'.$row["SNo"].'" contenteditable>'.$row["Town"].'</td>
			<td class="Form" data-id9="'.$row["SNo"].'" contenteditable>'.$row["Form"].' '.$row["Stream"].'</td>
			<td class="DOB" data-id10="'.$row["SNo"].'" contenteditable>'.$row["DOB"].'</td>
			<td  class="dltbtn" data-id11="'.$row["SNo"].'" ><button  style="background-color:red;">X</button></td>
			</tr>';
		}

	}
	else
	{
		$output.='<tr>
			<td colspan="10">No Student Found </td>
			</tr>
		';
	}
	$output.='</table>
	</div>';
echo $output;
?>