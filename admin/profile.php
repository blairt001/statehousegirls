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
			<center><a  href="#"><font size="5px;"><u><font color="red"><b>ADMIN PROFILE</b></font></u></font></a></center>
			<br />
			<br />
			<div class="blair">
			<a href="users.php"class="link"><font color="red"><font size="3px;"><b>BACK</b></font></font></a>
			</div>
<?php 
     $query = "SELECT*FROM admin";
      $result = mysqli_query($conn,$query);
        $row_pro = mysqli_fetch_array($result);
    	$admin_id = $row_pro['admin_id'];
	    $username = $row_pro['username'];
		
?>			
			<div class="">
  <center><form action="#" method="POST">            
  <table class="">
    
      <tr> 
          <th>Admin Id</th>
          <td><input type="text" name="id" readonly="readonly" value="<?php echo $admin_id ?>"></td>              
    </tr>
      <tr>
          <th>Username</th>
      <td><input type="text" name="name" readonly="readonly" value="<?php echo $username ?>" ></td>
      </tr>
  </table>
 </form></center>
</div>
<br />
<br />
<center><h1><font color="red"><u>Change Admin Username</u></font></h1></center>
<div class="">
  <center><form action="changeuser.php" method="POST">            
  <table class="">
    
      <tr>
          <th>Old Username</th>
      <td><input type="text" name="user1" required="required"></td>
      </tr>
      <tr>
          <th>New Username</th>
      <td><input type="text" name="user2" required="required"></td>
      </tr>
	  <tr>
          <th>Confirm New Username</th>
      <td><input type="text" name="user3" required="required"></td>
      </tr>
  </table>
   <center> <input type="submit" name="change1" value="SUBMIT"/></center>
   </form></center>
</div>
<br />
<br />
<center><h1><font color="red"><u>Change Admin Password</u></font></h1></center>
<div class="">
  <center><form name="chngpwd" action="changepass.php" method="POST" onSubmit="return valid()";>            
  <table class="">
    
      <tr> 
          <th>Old Password</th>
          <td><input type="password" name="opwd" id="opwd" required="required"></td>              
    </tr>
      <tr>
          <th>New Password</th>
      <td><input type="password" name="npwd" id="npwd"required="required"></td>
      </tr>
	  <tr>
          <th>Confirm New Password</th>
      <td><input type="password" name="cpwd" id="cpwd" required="required"></td>
      </tr>
  </table>
   <center> <input type="submit" name="Submit" value="SUBMIT"/></center>
   </form></center>
</div>

<script type="text/javascript">
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>

	</body>
</html>
       
        
        