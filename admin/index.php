<?php 
		require ("config.php");
		$error = "";

		if (isset($_POST['login'])) 
		{ 			
			$username = trim($_POST['username']);			
			$password = trim(md5($_POST['password']));	
				
			// sending query		
			$result = mysqli_query($conn,"SELECT * FROM admin WHERE username = '$username' AND password = 
						   '$password'");
						   
			if (!$result) 
			{
				die("Query to show fields from table failed. Try again!!!");
			}
									
			$numberOfRows = mysqli_num_rows($result);				
			$row = mysqli_fetch_array($result);					
				
				if ($numberOfRows == 0) 
				{
					?>
					<script>
					window.alert("Username or Password is Invalid. Please Try Again!");				
					</script>
					<?php
				} 
				else if ($numberOfRows > 0) 
				{
					?>
					<script>
					window.alert("Username and Password Accepted. Click OK to proceed!");
					<?php			
		            session_start();					
					$_SESSION['is']['login']    = TRUE;
					$_SESSION['is']['username'] = $_POST['username'];
					$_SESSION['userid']=$row['admin_id'];
					$_SESSION['logged']="true";
					$session = "1";	
					header("location:login.php?user=$username");
			?>
			</script>
					<?php
							
							 	
				}
		}
		?>
<!DOCTYPE html>
<html>
<head>
	<title>https://www.statehousegirls.ac.ke/ </title>
	<h3 align="Center"><u><font size="10px;">Students Results</font></u></h3>
	<br />
	<h3 align="Center"><font color="blue"><font size="7px;">Administrator Login Panel</font></font></h3>
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

	<style type="text/css">
		
		body{
			height: 90%;
			background-color: red;
		}
	</style>
</head>
<body>
<br />
<br />
<br />
<div>
<center><form method="POST" action="index.php">
	<table>

				<tr>
				<td><b><font size="5px;">Admin Username:</b></font></td><td><input type="text" id="username" name="username" maxlength="20" placeholder="Enter Admin Username" required="required"></td>
				</tr>
				<br />
				<tr>
					<td><font size="5px;"><b>Admin Password:</b></font></td><td><input type="password" id="password" name="password" placeholder="Enter Admin Password " required="required"></td>
				</tr>
				<tr>
					<td colspan="2"><label name="login-error" id="login-error" hidden="hidden"></label></td>
				</tr>
				<br />
			</table>
			<br />
			<center><input type="submit" name="login" id="login" value="LOGIN" ></center>
			</form></center>
</div>

<script type="text/javascript">
	
/*$(document).on('submit','.login-form', function(){ 
 	var username=$('#username').val();
 	var password=$('#password').val();
 	$.ajax({
 		url:"login.php",
 		type:"POST",
 		data:{username:username,password:password},
 		dataType:"text",
 		success:function(data)
 		{  
 			alert(data);
 		   //$('#msg').html(data);
 		}
 	});
 });*/
</script>

</body>
<center><h4><a href="http://www.facebook.com/blairt94/"><font color="green"><u>Strive to Excel</u></font></a></h4></center>
</html>