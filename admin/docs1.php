<!DOCTYPE html>
<HTML>
<head>
<title>https://www.statehousegirls.ac.ke/
</title>
<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<style type="text/css">
	#top-menu, #top-menu li ul{
	margin: 0px;
	padding: 0px;
	list-style: none;
    }
    input[type="text"] {
    height: 30px;
  padding: 2px 2px 2px 2px;
}
 td {
    height: 30px;
  padding: 2px 2px 2px 2px;
}
input[type="radio"] {
    height: 30px;
     width: 40px;
  padding: 5px 0px 5px 2px;
}
#top-menu > li{
		float:right;
		position: relative;
	}
	#top-menu li a{
		display: block;
		padding: 10px 8px 8px 3px;
	}
	#top-menu li ul {
		display: none;
		z-index: 100;
		width: 180px;
		position: absolute;
	}
	#top-menu li:hover ul{
		display: block;
	}
	#top-menu > li {
		//background-color:#876534;
		padding: 5px;
	}
	#top-menu li:hover {
		background-color:green;
	}
	#top-menu > li:hover > a {
		//background-color:#876534;
	}
	#top-menu > li > a{
		font-weight: bold;
		line-height: 40px;
		padding: 10px 8px 8px 3px;
		text-decoration: none;
		text-transform: uppercase;
		color :rgb(145,65,255);
		background-color:#aacc90;
	}
	#top-menu li ul {
		background-color:#aacc90;
		border: 1px solid #CCCCCC;
	}
	#top-menu li ul li {
  border: 1px solid #CCCCCC;
}

#top-menu li ul li a {
  color: #000000;
  text-decoration: none;
  line-height: 30px;
  padding: 0 10px;
}

#top-menu li ul li a:hover {
  text-decoration: none;
}
#load_subject label {
		border:2px solid #675;
		display:inline-block;
		background:white;
		width: 10%;
		height: 5%;
      margin: 10px 10px;
      margin-top: 1%;
padding: 2px 2px 6px 5px;
	}
	#load_subject input {
		//border:5px solid #675;
		background:white;
		width: 10%;
		height: 5%;
      margin: 2px 10px;
      margin-top: 1%;
padding: 1px 1px 1px 1px;
	}
	#reg-table label {
		border:2px solid #675;
		color: #675;
		display:inline-block;
	    width: 80px;
		height: 20px;
      margin:10px;
padding: 2px 2px 6px 5px;
	}
	#reg-table select {
		//border:5px solid #675;
		background:white;
		width: 200px;
		height: 30px;
      margin:10px; 
padding: 1px 1px 1px 1px;
	}
		#reg-table input {
		//border:5px solid #675;
		background:white;
		width: 200px;
		height: 30px;
      margin:10px;
padding: 1px 1px 1px 1px;
	}
	#reg-table{
		display:inline-block;

	}
	#load_src{
		display:inline-block;
		margin-left:38%;

	}
	#load_src label{
		display:inline-block;
	    width: 200px;
		height: 30px;

	}
	#srcdiv{
		display:inline-block;
		margin-left:3%;

	}

#srcdiv input {
		//border:5px solid #675;
		background:white;
		width: 200px;
		height: 30px;
      margin:10px;
padding: 1px 1px 1px 1px;
	}
	#navlinks {
		//display: inline-block;
		margin-bottom: 10px;
	}
#top-menu li ul li a:hover {
  text-decoration: none;
}
	table{
		margin-left: 5%;
		margin-right: 5%;
	}
	body{
		background-color:orange;
	}
    a.link
{
	border-style : solid;
	border-width: 1px 1px 1px 1px;
	text-decoration: none;
	padding: 12px;
	border-color: #000000;
	border-radius: 5px;
	background-color: white
}
a.link:hover
{
	background-color: lime;
}
</style>
</head>
	<body  >
	<center><h1><u>Upload Assignments</u></h1></center>
			
			<font size="5px;"><b><p>N/B: <font color="red">Please specify the name of the subject and other information about the assignment e.g the date of submission in the description area.</font></font></p></b>
<div  class="navlinks" id="navlinks" style="background-color:#876534;margin-bottom: 8%;">
		<ul id="top-menu">
			<li><a href="teachers.php"class="link">Back To Home Page</a></li>			
	</div>
	<form action="docs1.php" method="POST" enctype="multipart/form-data">

<div  id="reg-table">
           <label title="class">Form:</label><select name="form" id="form"></select>
		    <label title="Description">Description: </label><input type="text" name="desc" id="desc" placeholder="Describe the file" /><br>
			<input type="file" name="fileUpload" id="fileUpload" />
			<input type="submit" name="savefile" value="submit File"/>
		
		</div>
			
			
	
<hr>
	<?php
		
require('config.php');
		    global $fileUpload;
			global $fileUplaod_name;
			global $fileUpload_type;
			global $class;
			global $fileUpload_size;

	// $fileUpload;
	$output='';
	if(isset($_POST['class']) && isset($_POST['desc'])){	
	    $form=$_POST['form'];
		$desc=$_POST['desc'];
		$fileUplaod_name = $_FILES['fileUpload']['name'];
		$fileUpload = $_FILES['fileUpload']['tmp_name'];
		$fileUpload_size = $_FILES['fileUpload']['size'];
		$fileUpload_type = $_FILES['fileUpload']['type'];
		$fileHandle=fopen($fileUpload, 'r');
	    $fileContent=fread($fileHandle, $fileUpload_size);
	    $fileContent=addslashes($fileContent);
		
		$query='INSERT INTO documents(Description,Data,Title,Type,form)  VALUES("'.$desc.'","'.$fileContent.'","'.$fileUplaod_name.'","'.$fileUpload_type.'","'.$form.'")';

         if(mysqli_query($conn, $query)){
 		//move_uploaded_file($tmp_dir,'../Documents/'.$form.'/'.$stream.'/'.$imgFile);
	    $output.='form:'.$form.'<br>';
	    $output.='File Description:'.$desc.'<br>';
	    $output.='Filename:'.$fileUplaod_name.'<br>';
	    $output.='Directory:'.$fileUpload.'<br>';
	    $output.='Size:'.$fileUpload_size.'<br>';
	    $output.='Type:'.$fileUpload_type.'<br>';
	
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

echo $output;
?>
<hr>
	
				</form></div>
<div id="msg">
			
			
		</div>


<script type="text/javascript">
var classid="";
var termid="";
 function fetch_docs(){
		 	$.ajax({
			url:"load_docs1.php",
			method:"POST",
			success:function(data){
				$('#msg').html(data);
			}
		});
		 }
		 function delete_document(sno){
			$.ajax({
			url:"delete_docs1.php",
			type:"POST",
 		data:{sno:sno},
 		dataType:"text",
			success:function(data){
				alert(data);
				$('#msg').html(data);
				fetch_docs();
			}
		});

}
   	$(document).ready(function(){
		fetch_docs();
			$.ajax({
			url:"load_forms1.php",
			method:"POST",
			success:function(data){
				$('#form').html(data);
			}
		});
			$(document).on('click','.dltbtn',function(){
				var x = confirm("Do you really want to delete the document?");
				if(x)
				{
		       // var sno=$(this).data("id1");
		        //delete_document(sno);
				window.alert("You are not permitted to delete any document.\n Contact the administrator for help. \n Thank you.");
				return false;
				}
				else
				{
					return false;
				}
	});	
});
$(document).on('change','#form', function(){ 
 	var form=$('#form').val();
    
 	$.ajax({
			url:"load_class1.php",
			method:"POST",
			data:{form},
			dataType:"text",
			success:function(data){
				$('#class').html(data);
				
			}
		});
 });
	
	
</script>
			
	</body>

</html>