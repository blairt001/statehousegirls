<?php
session_start();
include("config.php");
if(isset($_POST['Submit']))
{
    $oldpass=md5($_POST['opwd']);
	$id=$_SESSION['userid'];
    $newpassword=trim(md5($_POST['npwd']));
	$newpassword1=trim(md5($_POST['cpwd']));
$sql=mysqli_query($conn,"SELECT * FROM  staff where password='$oldpass' && id='$id'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $conn=mysqli_query($conn,"update staff set password='$newpassword' where id='$id'");
 ?>
 <script>
	window.alert("Password change successfully");
	window.location="profile1.php";
	</script>
 <?php
}
else
{
	?>
<script>
	window.alert("Old Passwords do not match");
	window.location="profile1.php";
	</script>
	<?php
}
}
?>