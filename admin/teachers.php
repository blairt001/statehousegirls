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
	<?php
			$id=$_SESSION['userid'];
	        $result = mysqli_query($conn,"SELECT * FROM staff WHERE id='$id'") or die(mysqli_error($conn));
	        $test = mysqli_fetch_array($result);
			?>		
			<center><a  href="#"><font size="5px;"><u><font color="red"><b>STAFF PANEL</b></font></u></font></a></center>
			<div class="blair">
			<a href="docs1.php" class="link"><font size="3px;"><font color="blue"><b>UPLOAD ASSIGNMENTS</b></font></font></a>
			  &nbsp;
			<a href="staffdel.php" class="link"><font size="3px;"><font color="black"><b>DELETE RESULTS</b></font></font></a>
			   &nbsp;
			<a href="logout1.php" class="link"><font color="red"><font size="3px;"><b>LOGOUT</b></font></font></a>
			</div>
			<h1>Welcome User:<font color="blue"> <?php echo $test['name'] ; ?></font></h1>
			<h1>Your Username is :<font color="blue"> <?php echo $test['username'] ; ?></font></h1>
			<br />
			<br />
			<div class="blair1">
			<a href="profile1.php" class="link"><font size="3px;"><font color="blue"><b>MANAGE YOUR PROFILE</b></font></font></a>			
			</div>
			<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>			
			<div class="span6" id="form-login">
			</div>			
			<div class="span3 hidden-phone"></div>
		</div>
		
<center><h1><u>Term 1 2019 Students Results</u></h1></center>
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
					 else
					 {
						 ?>
						 <font color="red"><font size="10px;"><h1>No term 1 results has been uploaded yet.</h1></font></font>
						 <?php
					 }
				
			?>
		</table>
	</div>

	</div>	
			<br />
			<br />
			<div id="wrap">
	<div class="container">
		
<center><h1><u>Term 2 2019 Students Results</u></h1></center>
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
					 else
					 {
						 ?>
						 <font color="red"><font size="10px;"><h1>No term 2 results has been uploaded yet.</h1></font></font>
						 <?php
					 }
				
			?>
		</table>
	</div>

	</div>
			<br />
			<br />	

	<div id="wrap">
	<div class="container">	
              <center><h1><u>Term 3 2019 Students Results</u></h1></center>
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
					 else
					 {
						 ?>
						 <font color="red"><font size="10px;"><h1>No term 3 results has been uploaded yet.</h1></font></font>
						 <?php
					 }
				
			?>
		</table>
	</div>

	</div>

	</body>
</html>