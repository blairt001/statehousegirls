<?php
require('config.php');
if(isset($_POST['submit'])){
$position=$_POST['position'];
switch($position){
case 'Select results to delete':
?>
	<script>
	window.alert("Term not selected. \n Please select a term results to delete.");
	window.location="deleteres.php";
	</script>
	<?php
break;	

case 'Term1':
$query=mysqli_query($conn, "DELETE FROM term1")or die(mysqli_error($conn));
if($query)
{
	?>
	<script>
	window.alert("Term 1 results deleted successfully.");
	window.location="deleteres.php";
	</script>
	<?php
}
else
{
	?>
	<script>
	window.alert("Term 1 results not deleted.Try again later.");
	window.location="deleteres.php";
	</script>
	<?php
}
break;

case 'Term2':
$query=mysqli_query($conn, "DELETE FROM term2")or die(mysqli_error($conn));
if($query)
{
	?>
	<script>
	window.alert("Term 2 results deleted successfully.");
	window.location="deleteres.php";
	</script>
	<?php
}
else
{
	?>
	<script>
	window.alert("Term 2 results not deleted.Try again later.");
	window.location="deleteres.php";
	</script>
	<?php
}

break;

case 'Term3':
$query=mysqli_query($conn, "DELETE FROM student")or die(mysqli_error($conn));
if($query)
{
	?>
	<script>
	window.alert("Term 3 results deleted successfully.");
	window.location="deleteres.php";
	</script>
	<?php
}
else
{
	?>
	<script>
	window.alert("Term 3 results not deleted.Try again later.");
	window.location="deleteres.php";
	</script>
	<?php
}

break;

}}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
		<title>https://www.statehousegirls.ac.ke/</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">
<title>https://www.statehousegirls.ac.ke/</title>
<link rel="stylesheet" type="text/css" href="style/mystyle_login.css">
<style>
body
{
background-color:orange;	
}
#content {
height: auto;
background-color:orange;
}
#main{
height: auto;
background-color:green;}
</style>
</head>
<script>
function confirm_del()
{
	var x=confirm("Are you sure you want to delete?");
	if(x)
		return true;
	else
		return false;
}
</script>
<script>
function blair()
{
	window.alert("Contact me in case of anything wrong. \n Email: blairtony2014@gmail.com. \n Thank You.");
}
</script>
<style>
#blair
{
	float: right;
	font-size: 30px;
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
<body>
<br />
<br />
<div id="blair">
<a href="login.php" class="link"><font color="blue"><b>BACK HOME</b></font></a>
</div>
<center><h1><u>Delete Results Panel</u></h1></center>
<br />
<br />
<center><font color="red"><h2>Please the actions here are irreversible. Only delete what you are sure of.<font color="red"></font></h2></center>
</div>
<br />
<br />
<br />
<center>
      <form method="post" action="deleteres.php" >
		<p><select name="position">
		<option>Select results to delete</option>
			<option>Term1</option>
			<option>Term2</option>
			<option>Term3</option>
			</select></p>
        <p class="submit"><input type="submit" name="submit" value="Delete" onclick="return confirm_del()"></p>
      </form>
    </center>

</body>
<br />
<br />
<br />
<br />
<br />
<marquee><h1><font color="green">Strive To Excel</font></h1></marquee>
</html>
