<!DOCTYPE html>
<?php 
	require('config.php');
	$AdmnNo=$_POST['admno'];
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
.blair
{
	float: right;
}
</style>
<center><h1><u><font color="blue">Term 1, 2019 Results</font></u></h1></center>
<div id="wrap">
	<div class="container">
		

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
				$SQLSELECT = "SELECT * FROM term1 where AdmnNo='$AdmnNo'";
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
						 <font color="red"><h1>No term 1 results has been uploaded yet</h1></font>
						 <?php 
					 }
				
			?>
		</table>
	</div>

	</div>



<br />
<br />

	<center><h1><u><font color="blue">Term 2, 2019 Results</font></u></h1></center>
		<div id="wrap">
	<div class="container">
		

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
				$SQLSELECT = "SELECT * FROM term2 where AdmnNo='$AdmnNo'";
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
						 <font color="red"><h1>No term 2 results has been uploaded yet</h1></font>
						 <?php 
					 }
				
			?>
		</table>
	</div>

	</div>

		


<br />
<br />
			
				
		<center><h1><u><font color="blue">Term 3, 2019 Results</font></u></h1></center>	

	<div id="wrap">
	<div class="container">
		

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
				$SQLSELECT = "SELECT * FROM student where AdmnNo='$AdmnNo'";
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
						 <font color="red"><h1>No term 3 results has been uploaded yet</h1></font>
						 <?php 
					 }
				
			?>
		</table>
		<center><h1>Thank You.</h1></center>
	</div>

	</div>
<center><a href="https://www.statehousegirls.com/"><u><b>Strive to Excel.</b></u></a></center>
	</body>
</html>