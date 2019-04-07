<!DOCTYPE html>
<html>
<head>
<title>https://www.statehousegirls.com/
</title>
<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

<style type="text/css">
body
{
	background-color: black;
}

#top-menu li ul li a:hover {
  text-decoration: none;
}
	
	.navlinks ul li{
		display: inline;
		list-style: none;
	}
	.navlinks ul li a{
		font-weight: bold;
		line-height: 40px;
		padding: 10px 8px 8px 3px;
		text-decoration: none;
		text-transform: uppercase;
		color :rgb(145,65,255);
		background-color:;
	}
	#load_subject label {
		border:2px solid #675;
		display:inline-block;
		background:white;
		width: 10%;
		height: 5%;
      margin: 10px 10px;
      margin-right: 15px;
padding: 2px 2px 6px 5px;
	}
	#load_subject input {
		//border:5px solid #675;
		background:white;
		width: 30px;
		height: 20px;
      margin: 2px;
padding: 1px 1px 1px 1px;
	}
	table{
		float: left;
	}
	body{
		//background-color:#90ccdd;
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

		</head>
		
		
	<body>
	<center><h1><font color="red"><u>Authentication Required</u></font></h1></center>
	<div align="right" class="navlinks">
			<ul>
			<li><a href="index.php" class="link">Back Home</a></li>
			</ul>
		</div>
	<br />
	<br />
	<br />
	<center><h1><font color="orange"><i>Enter the password for accessing the assignments:</i></font></h1></center>
	<br />
	<br />
	<br />
	<br />
	<center><form method="POST" action="bdocs.php">
	          <fieldset>
				<b><font size="5px;"><font color="blue">Assignment Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></font></td><td><input type="password" id="username" name="password" maxlength="200" placeholder="" required="required">
				
					<label name="login-error" id="login-error" hidden="hidden"></label></td>
							
			<br />
			<input type="submit" name="login" id="login" value="PROCEED" >
			</fieldset>
	</form></center>
	
	</body>
	<br />
	<br />
	<br />
	<marquee><h1><font color="green">Strive To Excel</font></h1></marguee>
</HTML>

<?php
require('config.php');
	if(isset($_POST['login']))
	{
	 $password=md5($_POST['password']);
		
	$query="SELECT * FROM assignpass where password='$password'";
	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	$row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)>0)
	{
	          ?>
			<script>
			window.alert("Congratulations! Assignment Password Found. \n Click OK to proceed.");
			window.location="bresult.php";
			</script>
			<?php
	
	}
	else
	{
		?>
			<script>
			window.alert("Failed! The Assignment Password Not Found. \n Try again.");
			window.location="bdocs.php";
			</script>
			<?php
	}
	}
	
?>