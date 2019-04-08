<?php 
    session_start();
	require('config.php');
?>	
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>https://www.statehousegirls.ac.ke/</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">


	</head>
	<body>  
	<!-- Navbar
    ================================================== -->
<style>
body{
		background-color:orange;
	}
.blair
{
	float: right;
	
}
.blair1
{

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
<?php
			$admin_id=$_SESSION['userid'];
	        $result = mysqli_query($conn,"SELECT * FROM admin WHERE admin_id='$admin_id'") or die(mysqli_error($conn));
	        $test = mysqli_fetch_array($result);
			?>
			
				
			<center><a  href="#"><font size="5px;"><u><font color="red"><b>ADMINISTRATOR PANEL</b></font></u></font></a></center>
			<br />
			<br />
			<div class="blair">
			<a href="logout.php"class="link"><font color="red"><font size="3px;"><b>LOGOUT</b></font></font></a>
			</div>
			<h1>Welcome :<font color="blue"> <?php echo $test['username'] ; ?>!</font></h1>
			<br />
			<br />
			<br />
			<br />
			<div class="blair1">
			<a href="users.php" class="link"><font size="5px;"><font color="blue"><b>MANAGE USERS</b></font></font></a>	
			&nbsp;
			<a href="uploadres.php" class="link"><font size="3px;"><font color="blue"><b>UPLOAD RESULTS</b></font></font></a>
			&nbsp;
			<a href="rterm1.php" class="link"><font size="3px;"><font color="blue"><b>ACCESS TERM 1 2019 RESULTS</b></font></font></a>
            &nbsp;
			<a href="rterm2.php" class="link"><font size="3px;"><font color="blue"><b>ACCESS TERM 2 2019 RESULTS</b></font></font></a>		
			&nbsp;
			<a href="rterm3.php" class="link"><font size="3px;"><font color="blue"><b>ACCESS TERM 3 2019 RESULTS</b></font></font></a>	
			 &nbsp;
			 <br />
             <br />
             <br />
             <br />
             <br />
			<a href="docs.php" class="link"><font size="3px;"><font color="blue"><b>UPLOAD ASSIGNMENTS</b></font></font></a>
			  &nbsp;
			<a href="deleteres.php" class="link"><font size="3px;"><font color="red"><b>DELETE RESULTS</b></font></font></a>

		</div>
	</body>
</html>