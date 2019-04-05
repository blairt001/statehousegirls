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
			<a href="docs.php" class="link"><font size="3px;"><font color="blue"><b>UPLOAD ASSIGNMENTS</b></font></font></a>
			  &nbsp;
			<a href="deleteres.php" class="link"><font size="3px;"><font color="black"><b>DELETE RESULTS</b></font></font></a>
			   &nbsp;
			<a href="logout.php"class="link"><font color="red"><font size="3px;"><b>LOGOUT</b></font></font></a>
			</div>
			<h1>Welcome :<font color="blue"> <?php echo $test['username'] ; ?>!</font></h1>
			<br />
			<br />
			<div class="blair1">
			<a href="users.php" class="link"><font size="3px;"><font color="blue"><b>MANAGE USERS</b></font></font></a>			
			</div>

			<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>			
			<div class="span6" id="form-login">
			<center><h1>Scroll down to upload results for term 2 and term 3.</h1></center>
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
			<div class="span3 hidden-phone"></div>
		</div>
		
<center><h1><u>Term 1 Students Results</u></h1></center>
		<table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>Class</th>
				  		<th>AdmnNo</th>
				  		<th>StudentName</th>
				  		<th>EntryMark</th>
				  		<th>MATH</th>
						<th>KISW</th>
				  		<th>ENG</th>
				  		<th>HIST</th>
				  		<th>IRE</th>
				  		<th>CRE</th>
						<th>GEO</th>
				  		<th>AGRIC</th>
				  		<th>ART</th>
				  		<th>COMP</th>
				  		<th>HSE</th>
						<th>GER</th>
				  		<th>FRE</th>
				  		<th>BUS</th>
				  		<th>MUS</th>
				  		<th>PHY</th>
						<th>BIO</th>
				  		<th>CHEM</th>
				  		<th>TOTAL</th>
				  		<th>AverageMark</th>
				  		<th>Grade</th>
						<th>Mscore</th>
				  		<th>StreamPstn</th>
				  		<th>FormPstn</th>
				  		<th>Targeted Grade</th>
				  		<th>Targeted M.Score</th>
				 		
				 
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM term1";
				$result_set =  mysqli_query($conn,$SQLSELECT) or die(mysqli_error($conn));
				
				if(mysqli_num_rows($result_set)>0)
	                 {
		     while ($row=mysqli_fetch_array($result_set)) 
			 {
				
				?>
			
					<tr>
						<td><?php echo $row['Class']; ?></td>
						<td><?php echo $row['AdmnNo']; ?></td>
						<td><?php echo $row['StudentName']; ?></td>
						<td><?php echo $row['EntryMark']; ?></td>
						<td><?php echo $row['MATH']; ?></td>
						<td><?php echo $row['KISW']; ?></td>
						<td><?php echo $row['ENG']; ?></td>
						<td><?php echo $row['HIST']; ?></td>
						<td><?php echo $row['IRE']; ?></td>
						<td><?php echo $row['CRE']; ?></td>
						<td><?php echo $row['GEO']; ?></td>
						<td><?php echo $row['AGRIC']; ?></td>
						<td><?php echo $row['ART']; ?></td>
						<td><?php echo $row['COMP']; ?></td>
						<td><?php echo $row['HSE']; ?></td>
						<td><?php echo $row['GER']; ?></td>
						<td><?php echo $row['FRE']; ?></td>
						<td><?php echo $row['BUS']; ?></td>
						<td><?php echo $row['MUS']; ?></td>
						<td><?php echo $row['PHY']; ?></td>
						<td><?php echo $row['BIO']; ?></td>
						<td><?php echo $row['CHEM']; ?></td>
						<td><?php echo $row['TOTAL']; ?></td>
						<td><?php echo $row['Average']; ?></td>
						<td><?php echo $row['Grade']; ?></td>
						<td><?php echo $row['Mscore']; ?></td>
						<td><?php echo $row['StreamPstn']; ?></td>
						<td><?php echo $row['FormPst']; ?></td>
						<td><?php echo $row['TargetedGrade']; ?></td>
						<td><?php echo $row['TargetedMScore']; ?></td>
					

					</tr>
				<?php
				}
					 }
				
			?>
		</table>
	</div>

	</div>

			
			
			<br />
			<br />
			<br />
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
			<div class="span3 hidden-phone"></div>
		</div>
		
<center><h1><u>Term 2 Students Results</u></h1></center>
		<table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>Class</th>
				  		<th>AdmnNo</th>
				  		<th>StudentName</th>
				  		<th>EntryMark</th>
				  		<th>MATH</th>
						<th>KISW</th>
				  		<th>ENG</th>
				  		<th>HIST</th>
				  		<th>IRE</th>
				  		<th>CRE</th>
						<th>GEO</th>
				  		<th>AGRIC</th>
				  		<th>ART</th>
				  		<th>COMP</th>
				  		<th>HSE</th>
						<th>GER</th>
				  		<th>FRE</th>
				  		<th>BUS</th>
				  		<th>MUS</th>
				  		<th>PHY</th>
						<th>BIO</th>
				  		<th>CHEM</th>
				  		<th>TOTAL</th>
				  		<th>AverageMark</th>
				  		<th>Grade</th>
						<th>Mscore</th>
				  		<th>StreamPstn</th>
				  		<th>FormPstn</th>
				  		<th>Targeted Grade</th>
				  		<th>Targeted M.Score</th>
				 		
				 
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM term2";
				$result_set =  mysqli_query($conn,$SQLSELECT) or die(mysqli_error($conn));
				
				if(mysqli_num_rows($result_set)>0)
	                 {
		     while ($row=mysqli_fetch_array($result_set)) 
			 {
				
				?>
			
					<tr>
						<td><?php echo $row['Class']; ?></td>
						<td><?php echo $row['AdmnNo']; ?></td>
						<td><?php echo $row['StudentName']; ?></td>
						<td><?php echo $row['EntryMark']; ?></td>
						<td><?php echo $row['MATH']; ?></td>
						<td><?php echo $row['KISW']; ?></td>
						<td><?php echo $row['ENG']; ?></td>
						<td><?php echo $row['HIST']; ?></td>
						<td><?php echo $row['IRE']; ?></td>
						<td><?php echo $row['CRE']; ?></td>
						<td><?php echo $row['GEO']; ?></td>
						<td><?php echo $row['AGRIC']; ?></td>
						<td><?php echo $row['ART']; ?></td>
						<td><?php echo $row['COMP']; ?></td>
						<td><?php echo $row['HSE']; ?></td>
						<td><?php echo $row['GER']; ?></td>
						<td><?php echo $row['FRE']; ?></td>
						<td><?php echo $row['BUS']; ?></td>
						<td><?php echo $row['MUS']; ?></td>
						<td><?php echo $row['PHY']; ?></td>
						<td><?php echo $row['BIO']; ?></td>
						<td><?php echo $row['CHEM']; ?></td>
						<td><?php echo $row['TOTAL']; ?></td>
						<td><?php echo $row['Average']; ?></td>
						<td><?php echo $row['Grade']; ?></td>
						<td><?php echo $row['Mscore']; ?></td>
						<td><?php echo $row['StreamPstn']; ?></td>
						<td><?php echo $row['FormPst']; ?></td>
						<td><?php echo $row['TargetedGrade']; ?></td>
						<td><?php echo $row['TargetedMScore']; ?></td>
					

					</tr>
				<?php
				}
					 }
				
			?>
		</table>
	</div>

	</div>

				
		    <br />
			<br />
			<br />	

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
		
              <center><h1><u>Term 3 Students Results</u></h1></center>
		<table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>Class</th>
				  		<th>AdmnNo</th>
				  		<th>StudentName</th>
				  		<th>EntryMark</th>
				  		<th>MATH</th>
						<th>KISW</th>
				  		<th>ENG</th>
				  		<th>HIST</th>
				  		<th>IRE</th>
				  		<th>CRE</th>
						<th>GEO</th>
				  		<th>AGRIC</th>
				  		<th>ART</th>
				  		<th>COMP</th>
				  		<th>HSE</th>
						<th>GER</th>
				  		<th>FRE</th>
				  		<th>BUS</th>
				  		<th>MUS</th>
				  		<th>PHY</th>
						<th>BIO</th>
				  		<th>CHEM</th>
				  		<th>TOTAL</th>
				  		<th>AverageMark</th>
				  		<th>Grade</th>
						<th>Mscore</th>
				  		<th>StreamPstn</th>
				  		<th>FormPstn</th>
				  		<th>Targeted Grade</th>
				  		<th>Targeted M.Score</th>
				 		
				 
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM student";
				$result_set =  mysqli_query($conn,$SQLSELECT) or die(mysqli_error($conn));
				
				if(mysqli_num_rows($result_set)>0)
	                 {
		     while ($row=mysqli_fetch_array($result_set)) 
			 {
				
				?>
			
					<tr>
						<td><?php echo $row['Class']; ?></td>
						<td><?php echo $row['AdmnNo']; ?></td>
						<td><?php echo $row['StudentName']; ?></td>
						<td><?php echo $row['EntryMark']; ?></td>
						<td><?php echo $row['MATH']; ?></td>
						<td><?php echo $row['KISW']; ?></td>
						<td><?php echo $row['ENG']; ?></td>
						<td><?php echo $row['HIST']; ?></td>
						<td><?php echo $row['IRE']; ?></td>
						<td><?php echo $row['CRE']; ?></td>
						<td><?php echo $row['GEO']; ?></td>
						<td><?php echo $row['AGRIC']; ?></td>
						<td><?php echo $row['ART']; ?></td>
						<td><?php echo $row['COMP']; ?></td>
						<td><?php echo $row['HSE']; ?></td>
						<td><?php echo $row['GER']; ?></td>
						<td><?php echo $row['FRE']; ?></td>
						<td><?php echo $row['BUS']; ?></td>
						<td><?php echo $row['MUS']; ?></td>
						<td><?php echo $row['PHY']; ?></td>
						<td><?php echo $row['BIO']; ?></td>
						<td><?php echo $row['CHEM']; ?></td>
						<td><?php echo $row['TOTAL']; ?></td>
						<td><?php echo $row['Average']; ?></td>
						<td><?php echo $row['Grade']; ?></td>
						<td><?php echo $row['Mscore']; ?></td>
						<td><?php echo $row['StreamPstn']; ?></td>
						<td><?php echo $row['FormPst']; ?></td>
						<td><?php echo $row['TargetedGrade']; ?></td>
						<td><?php echo $row['TargetedMScore']; ?></td>
					

					</tr>
				<?php
				}
					 }
				
			?>
		</table>
	</div>

	</div>

	</body>
</html>