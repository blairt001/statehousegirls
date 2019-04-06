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
				<?php
			session_start();
			$admin_id=$_SESSION['userid'];
	        $result = mysqli_query($conn,"SELECT * FROM admin WHERE admin_id='$admin_id'") or die(mysqli_error($conn));
	        $test = mysqli_fetch_array($result);
			?>
			
				
			<center><a  href="#"><font size="5px;"><u><font color="red"><b>ADMINISTRATOR PANEL</b></font></u></font></a></center>
			<br />
			<br />
			<div class="blair">
			
			  
			<a href="login.php"class="link"><font color="red"><font size="3px;"><b>BACK</b></font></font></a>
			</div>
			<h1>Logged in as :<font color="blue"> <?php echo $test['username'] ; ?>!</font></h1>
			<br />
			<br />
			
			<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>			
			<div class="span6" id="form-login">
			<center><h1>Students Results for 2019</h1></center>
			<br />
			<br />
			<br />
			<br />
				<form class="form-horizontal well" action="import1.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>					
						<legend><b><u>UPLOAD TERM 1 STUDENT RESULTS</u></b></legend>
						<div class="control-group">
							<div class="control-label">
								<label><font color="blue">Upload Term 1 Students Results:</font></label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
					
		</div>
		

	</div>

	</div>

			<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>			
			<div class="span6" id="form-login">
			
				<form class="form-horizontal well" action="import2.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>					
						<legend><b><u>UPLOAD TERM 2 STUDENT RESULTS</u></b></legend>
						<div class="control-group">
							<div class="control-label">
								<label><font color="blue">Upload Term 2 Students Results:</font></label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
						
		</div>
		

	</div>

	</div>
	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>			
			<div class="span6" id="form-login">
			
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>					
						<legend><b><u>UPLOAD TERM 3 STUDENT RESULTS</u></b></legend>
						<div class="control-group">
							<div class="control-label">
								<label><font color="blue">Upload Term 3 Students Results:</font></label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>			
			<div class="span3 hidden-phone"></div>
		</div>
		
             
	</div>

	</div>

	</body>
</html>