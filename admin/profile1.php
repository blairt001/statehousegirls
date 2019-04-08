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
			<center><a  href="#"><font size="5px;"><u><font color="red"><b>YOUR PROFILE</b></font></u></font></a></center>
			<br />
			<br />
			<div class="blair">
			<a href="teachers.php"class="link"><font color="red"><font size="3px;"><b>BACK</b></font></font></a>
			</div>
<?php 
	 $id=$_SESSION['userid'];
     $query = "SELECT*FROM staff where id='$id'";
      $result = mysqli_query($conn,$query);
        $row_pro = mysqli_fetch_array($result);
    	$id = $row_pro['id'];
	    $name = $row_pro['name'];
		$designation = $row_pro['designation'];
		$tscno = $row_pro['tscno'];
		$mobileno = $row_pro['mobileno'];
		$username = $row_pro['username'];
		
		
?>			
			<div class="">
  <center><form action="#" method="POST">            
  <table class="">
    
      <tr> 
          <th>Your Id:</th>
          <td><input type="text" name="id" readonly="readonly" value="<?php echo $id ?>"></td>              
    </tr>
      <tr>
          <th>Your Name:</th>
      <td><input type="text" name="name" readonly="readonly" value="<?php echo $name ?>" ></td>
      </tr>
	  <tr>
          <th>Your Designation:</th>
      <td><input type="text" name="des" readonly="readonly" value="<?php echo $designation ?>" ></td>
      </tr>
	  <tr>
          <th>Your TSC Number:</th>
      <td><input type="text" name="tsc" readonly="readonly" value="<?php echo $tscno ?>" ></td>
      </tr>
	  <tr>
          <th>Your Mobile Number:</th>
      <td><input type="text" name="mobile" readonly="readonly" value="<?php echo $mobileno ?>" ></td>
      </tr>
	  <tr>
          <th>Your Username:</th>
      <td><input type="text" name="name" readonly="readonly" value="<?php echo $username ?>" ></td>
      </tr>
  </table>
 </form></center>
</div>
<br />
<br />
<center><h1><font color="red"><u>Change Your Username</u></font></h1></center>
<div class="">
  <center><form action="changeuser1.php" method="POST">            
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
<center><h1><font color="red"><u>Change Your Password</u></font></h1></center>
<div class="">
  <center><form name="chngpwd" action="changepass1.php" method="POST" onSubmit="return valid()";>            
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
       
        
        