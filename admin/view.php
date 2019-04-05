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
				
				
			<center><a  href="#"><font size="5px;"><u><font color="blue"><b>USERS</b></font></u></font></a></center>
			<br />
			<br />
			<div class="blair">
			<a href="users.php"class="link"><font color="red"><font size="3px;"><b>BACK</b></font></font></a>
			</div>
<br />
<br />
			<div id="wrap">
	<div class="container">
		<div class="row">
		<table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>User id</th>
						<th>Name</th>
						<th>Designation</th>
						<th>TSC Number</th>
				  		<th>Mobile Number</th>
				  		<th>Username</th>
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM staff order by id asc";
				$result_set =  mysqli_query($conn,$SQLSELECT);
				
				if(mysqli_num_rows($result_set)>0)
	                 {
		     while ($row=mysqli_fetch_array($result_set)) 
			 {
				
				?>
			
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['designation']; ?></td>
						<td><?php echo $row['tscno']; ?></td>
						<td><?php echo $row['mobileno']; ?></td>
						<td><?php echo $row['username']; ?></td>
					</tr>
				<?php
				}
					 }
				
			?>
		</table>
	</div>

	</div>

			
			
			
	</div>

	</body>
</html>