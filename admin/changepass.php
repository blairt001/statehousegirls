<?php
session_start();
include("config.php");
if(isset($_POST['Submit']))
{
    $oldpass=md5($_POST['opwd']);
	$admin_id=$_SESSION['userid'];
    $newpassword=trim(md5($_POST['npwd']));
$sql=mysqli_query($conn,"SELECT * FROM  admin where password='$oldpass' && admin_id='$admin_id'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $conn=mysqli_query($conn,"update admin set password='$newpassword' where admin_id='$admin_id'");
 ?>
 <script>
	window.alert("Password change successfully");
	window.location="profile.php";
	</script>
 <?php
}
else
{
	?>
<script>
	window.alert("Old Passwords do not match");
	window.location="profile.php";
	</script>
	<?php
}
}
?>