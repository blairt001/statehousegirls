<?php
require('config.php');
?>
<!DOCTYPE html>
<HTML>
<head>
<title>https://www.statehousegirls.ac.ke/
</title>
<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<meta name="viewport" content="width=device-width, initil-scale=1.0">
<style type="text/css">
   body
   {
	   background-color: orange;
   }
 
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
	#srcdiv label {
		border:2px solid #675;
		background-color: #cffdea;
		color: #675;
		display:inline-block;
	    width: 200px;
		height: 20px;
      margin:10px;
padding: 2px 2px 6px 5px;
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
	<center><h1><u>Download Asignments</u></h1></center>
	<h1>N/B: <font color="red">Click the <font color="green">Download Here</font> button to download the assignments:</font></h1>		
<div  class="navlinks" id="navlinks" style="background-color:#876534;margin-bottom: 8%;">
		<ul id="top-menu">
			<li><a href="bresult.php" class="link">GO BACK</a></li>
			</ul>
	</div>		
</body>
</html>
<?php
if(isset($_POST['submit'])){
$Class=$_COOKIE['Class'];
$position=$_POST['position'];
switch($position){
case 'Click here to select your class':
?>
	<script>
	window.alert("Class not selected. \n Please select your class to view the assignments.");
	window.location="bresult.php";
	</script>
	<?php
break;	

case 'Form 1':
   ?>
   <center><h1><u><font color="green">FORM ONE ASSIGNMENTS</font></u></h1></center>
   <br />
   <?php
	// $fileUpload;
	$output='';
	//$select="SELECT documents.Sno,documents.Description,documents.Title,documents.Type,documents.class FROM documents join classes on documents.class=classes.classid where class like '%".$Class."' order by Sno asc";
    $select="SELECT * FROM documents where form=1 order by Sno asc";
	$output.='<table border="1"><th bgcolor="#ff9900">Sno</th><th bgcolor="#ff9900">Description</th><th bgcolor="#ff9900">Title</th><th bgcolor="#ff9900">Form</th><th bgcolor="#ff9900">File</th>';

	$result=mysqli_query($conn,$select);
 	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<tr>
			<td bgcolor="#ffdca8">'.$row["Sno"].'</td>
			<td bgcolor="#ffdca8">'.$row["Description"].'</td>
			<td bgcolor="#ffdca8">'.$row["Title"].'</td>	
       <td bgcolor="#ffdca8">'.$row["form"].'</td>	             		
			<td bgcolor="#ffdca8"><a target="_blank" href="download.php?sno='.$row["Sno"].'">Download Here</a></td>
			</tr>';
		}	
	}
	else
	{
		$output.='<tr><td bgcolor="#ffdca8" colspan="4">No form 1 assignment has been uploaded yet.</td><tr>';
	}
	$output.='</table>';

echo $output;

break;

case 'Form 2':
?>
   <center><h1><u><font color="green">FORM TWO ASSIGNMENTS</font></u></h1></center>
   <br />
   <?php
	// $fileUpload;
	$output='';
	//$select="SELECT documents.Sno,documents.Description,documents.Title,documents.Type,documents.class FROM documents join classes on documents.class=classes.classid where class like '%".$Class."' order by Sno asc";
    $select="SELECT * FROM documents where form=2 order by Sno asc";
	$output.='<table border="1"><th bgcolor="#ff9900">Sno</th><th bgcolor="#ff9900">Description</th><th bgcolor="#ff9900">Title</th><th bgcolor="#ff9900">Form</th><th bgcolor="#ff9900">File</th>';

	$result=mysqli_query($conn,$select);
 	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<tr>
			<td bgcolor="#ffdca8">'.$row["Sno"].'</td>
			<td bgcolor="#ffdca8">'.$row["Description"].'</td>
			<td bgcolor="#ffdca8">'.$row["Title"].'</td>
            <td bgcolor="#ffdca8">'.$row["form"].'</td>			
			<td bgcolor="#ffdca8"><a target="_blank" href="download.php?sno='.$row["Sno"].'">Download Here</a></td>
			</tr>';
		}	
	}
	else
	{
		$output.='<tr><td bgcolor="#ffdca8" colspan="4">No form 2 assignment has been uploaded yet.</td><tr>';
	}
	$output.='</table>';

echo $output;

break;

case 'Form 3':
?>
   <center><h1><u><font color="green">FORM THREE ASSIGNMENTS</font></u></h1></center>
   <br />
   <?php

	// $fileUpload;
	$output='';
	//$select="SELECT documents.Sno,documents.Description,documents.Title,documents.Type,documents.class FROM documents join classes on documents.class=classes.classid where class like '%".$Class."' order by Sno asc";
    $select="SELECT * FROM documents where form=3 order by Sno asc";
	$output.='<table border="1"><th bgcolor="#ff9900">Sno</th><th bgcolor="#ff9900">Description</th><th bgcolor="#ff9900">Title</th><th bgcolor="#ff9900">Form</th><th bgcolor="#ff9900">File</th>';

	$result=mysqli_query($conn,$select);
 	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<tr>
			<td bgcolor="#ffdca8">'.$row["Sno"].'</td>
			<td bgcolor="#ffdca8">'.$row["Description"].'</td>
			<td bgcolor="#ffdca8">'.$row["Title"].'</td>
      <td bgcolor="#ffdca8">'.$row["form"].'</td>			
			<td bgcolor="#ffdca8"><a target="_blank" href="download.php?sno='.$row["Sno"].'">Download Here</a></td>
			</tr>';
		}	
	}
	else
	{
		$output.='<tr><td bgcolor="#ffdca8" colspan="4">No form 3 assignment has been uploaded yet.</td><tr>';
	}
	$output.='</table>';

echo $output;
break;

case 'Form 4':
?>
   <center><h1><u><font color="green">FORM FOUR ASSIGNMENTS</font></u></h1></center>
   <br />
   <?php
	// $fileUpload;
      $output='';
	//$select="SELECT documents.Sno,documents.Description,documents.Title,documents.Type,documents.class FROM documents join classes on documents.class=classes.classid where class like '%".$Class."' order by Sno asc";
    $select="SELECT * FROM documents form=4 order by Sno asc";
	$output.='<table border="1"><th bgcolor="#ff9900">Sno</th><th bgcolor="#ff9900">Description</th><th bgcolor="#ff9900">Title</th><th bgcolor="#ff9900">Form</th><th bgcolor="#ff9900">File</th>';

	$result=mysqli_query($conn,$select);
 	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result)) {
			$output.='<tr>
			<td bgcolor="#ffdca8">'.$row["Sno"].'</td>
			<td bgcolor="#ffdca8">'.$row["Description"].'</td>
			<td bgcolor="#ffdca8">'.$row["Title"].'</td>	
      <td bgcolor="#ffdca8">'.$row["form"].'</td>				
			<td bgcolor="#ffdca8"><a target="_blank" href="download.php?sno='.$row["Sno"].'">Download Here</a></td>
			</tr>';
		}	
	}
	else
	{
		$output.='<tr><td bgcolor="#ffdca8" colspan="4">No form 4 assignment has been uploaded yet.</td><tr>';
	}
	$output.='</table>';

echo $output;
break;


}}
?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<marquee><h1><font color="green">Strive To Excel</font></h1></marquee>


