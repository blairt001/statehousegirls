<?php 
		require ("config.php");
		$error = "";

		if (isset($_POST['login'])) 
		{ 			
			$username = trim($_POST['username']);			
			$password = trim(md5($_POST['password']));	
				
			// sending query		
			$result = mysqli_query($conn,"SELECT * FROM staff WHERE username = '$username' AND password = '$password'");
						   
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
					$_SESSION['is']['name'] = $_POST['name'];
					$_SESSION['is']['username'] = $_POST['username'];
					$_SESSION['userid']=$row['id'];
					$_SESSION['logged']="true";
					$session = "1";	
					header("location:teachers.php?user=$username && $name");
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
	<h3 align="Center"><font color="blue"><font size="7px;"><u>Staff Panel</u></font></font></h3>
	<div id="back">
	<a href="../index.php" class="link"><font color="black"><font size="3px;"><b>BACK</b></font></font></a>			
	</div>
	<br />
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

	<style type="text/css">
		
		body{
			height: 90%;
			background-color: orange;
		}
		#back
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
</head>
<body>
<br />
<br />
<br />
<center><font color="red"><h1>Only Statehouse Girls staff are allowed to login here</h1></font></center>

<div>
<center><form method="POST" action="index1.php">
	<table>

				<tr>
				<td><b><font size="5px;">Staff Username:</b></font></td><td><input type="text" id="username" name="username" maxlength="20" placeholder="Enter Staff Username" required="required"></td>
				</tr>
				<br />
				<br />
				<tr>
					<td><font size="5px;"><b>Staff Password:</b></font></td><td><input type="password" id="password" name="password" placeholder="Enter Staff Password " required="required"></td>
				</tr>
				<tr>
					<td colspan="2"><label name="login-error" id="login-error" hidden="hidden"></label></td>
				</tr>
				
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
<center><h4><a href="http://www.facebook.com/blairt94/"><font color="green"><u>Strive to Excel</u></font></a></h4></center>
</body>
</html>