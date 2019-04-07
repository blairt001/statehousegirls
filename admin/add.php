<!DOCTYPE html>
<?php 
	require('config.php');
?>	
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
			<center><a  href="#"><font size="5px;"><u><font color="red"><b>ADD NEW USER</b></font></u></font></a></center>
			<br />
			<br />
			<div class="blair">
			<a href="users.php"class="link"><font color="red"><font size="3px;"><b>BACK</b></font></font></a>
			</div>
<center><h1><font color="red"><u>Add New User(Staff Member)</u></font></h1></center>
<br />
<div class="">
  <center><form action="adduser.php" method="POST">            
  <table class="">
    
      <tr> 
          <th>Name:</th>
          <td><input type="text" name="name" required="required"></td>              
    </tr>
	<tr> 
          <th>Designation:</th>
          <td><input type="text" name="des" required="required"></td>              
    </tr>
	<tr> 
          <th>TSC Number:</th>
          <td><input type="number" name="tsc" required="required"></td>              
    </tr>
	<tr> 
          <th>Mobile Number:</th>
          <td><input type="number" name="mobile" required="required"></td>              
    </tr>
      <tr>
          <th>Username:</th>
      <td><input type="text" name="user" required="required"></td>
      </tr>
	  <tr>
          <th>Password</th>
      <td><input type="password" name="pass" required="required"></td>
      </tr>
	  <th>Confirm Password</th>
      <td><input type="password" name="pass1" required="required"></td>
      </tr>
  </table>
   <center> <input type="submit" name="add" value="SUBMIT"/></center>
   </form></center>
</div>
<


	</body>
</html>
       
        
        