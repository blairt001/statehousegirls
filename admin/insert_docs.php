<?php		
require('config.php');
		global $fileUpload;
			global $fileUplaod_name;
			global $fileUpload_type;
			global $form;
			global $stream;
			global $fileUpload_size;

	// $fileUpload;
	$output='';
	if(isset($_POST['form']) && isset($_POST['desc']) && isset($_POST['stream'])){
		$desc=$_POST['desc'];
		$form=$_POST['form'];
		$stream=$_POST['stream'];
		$fileUplaod_name = $_FILES['fileUpload']['name'];
		$fileUpload = $_FILES['fileUpload']['tmp_name'];
		$fileUpload_size = $_FILES['fileUpload']['size'];
		$fileUpload_type = $_FILES['fileUpload']['type'];
		//move_uploaded_file($tmp_dir,'../Documents/'.$form.'/'.$stream.'/'.$imgFile);
	$output.='Form:'.$form.'<br>';
	$output.='Stream:'.$stream.'<br>';
	$output.='Filename:'.$fileUplaod_name.'<br>';
	$output.='Directory:'.$fileUpload.'<br>';
	$output.='Size:'.$fileUpload_size.'<br>';
	$output.='Type:'.$fileUpload_type.'<br>';
	$fileHandle=fopen($fileUpload, 'r');
	$fileContent=fread($fileHandle, $fileUpload_size);
	$fileContent=addslashes($fileContent);
	$query='INSERT INTO documents(Description,Data,Title,Type,form,stream)  VALUES("'.$desc.'","'.$fileContent.'","'.$fileUplaod_name.'","'.$fileUpload_type.'","'.$form.'","'.$stream.'")';

if(mysqli_query($conn, $query)){
 		
 		$output.=' File Saved';
 	}
 	else
 	{
 		$output.='File not saved'.mysqli_error($conn);
 	}

		
}
else
{
	$output.='No file sent';
}
/*if(isset($_POST['form']) && isset($_POST['form']))
{
	echo 'Form '.$form.' '.$stream.''.$fileUpload;
	$path='../Documents/'.$form.'/'.$stream.'';
	$dir_handle=@opendir($path) or die("Unable to open folder");
	while (false !==($file=readdir($dir_handle))) {
		if ($file !='.' && $file !='Thumbs.db') {
			echo '<a href="../Documents/'.$form.'/'.$stream.'/'.$file.'">'.$file.'</a><br>';
			# code...
		}
	}
//	closedir($dir_handle);
	//
	}
	else
	{
		echo 'Choose form and stream';
	}*/
	
echo $output;
?>