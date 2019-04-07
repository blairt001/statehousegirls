<?php
		
require('config.php');
	// $fileUpload;
	$output='';
	$sno=$_GET['sno'];
	//$Class=$_COOKIE['Class'];
	$select="SELECT Description,Title,Type,Data FROM documents where Sno='".$sno."' order by Sno asc";

	$output.='<table border="1"><th bgcolor="#ff9900">Sno</th><th bgcolor="#ff9900">Description</th><th bgcolor="#ff9900">Title</th><th bgcolor="#ff9900">File</th>';

	$result=mysqli_query($conn,$select);
 	if(mysqli_num_rows($result)==1)
	{
		
		while ($row=mysqli_fetch_array($result)) {
			$fileType=$row["Type"];
			$fileContent=$row["Data"];
			$fileName=$row["Title"];
			// header("Content-type: $fileName");
			header('Content-Disposition: attachment; filename="' . $fileName . '"');

			echo $fileContent;
		}	
	}
	else
	{
		$output.='<tr><td bgcolor="#ffdca8" colspan="4">No File Found</td><tr>';
	}
	$output.='</table>';
//echo $output;
?>