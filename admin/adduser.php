<?php
session_start();
include 'config.php';

if(isset($_POST['add']))
{
$name=trim($_POST['name']);
$designation=trim($_POST['des']);
$tscno=trim($_POST['tsc']);	
$mobileno=trim($_POST['mobile']);
$username=trim($_POST['user']);	
$password=trim(md5($_POST['pass']));
$cpassword=trim(md5($_POST['pass1']));

if($cpassword==$password)
{
$query=mysqli_query($conn,"INSERT INTO staff( name, designation, tscno, mobileno, username, password) VALUES ('$name','$designation','$tscno','$mobileno','$username','$password')") or die(mysqli_error($conn));;
if($query>0)
{
	?>
	<script>
	window.alert("User successfully added to the database");
	window.location="add.php";
	</script>
	<?php
}
else
{
	?>
	<script>
	window.alert("Failed. Try again!!");
	window.location="add.php";
	</script>
	<?php
}

}
else
{
?>
	<script>
	window.alert("Passwords do not match!!");
	window.location="add.php";
	</script>
	<?php	
}	
	
	
}
else
{
	echo "There is an error. Try again later";
}







?>