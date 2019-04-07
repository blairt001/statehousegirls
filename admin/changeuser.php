<?php
session_start();
include("config.php");
if(isset($_POST['change1']))
{
    $oldusername=$_POST['user1'];
	$admin_id=$_SESSION['userid'];
    $newusername=$_POST['user2'];
	 $newusername1=$_POST['user3'];
	 
	 if($newusername1==$newusername)
	 {
$sql=mysqli_query($conn,"SELECT * FROM  admin where username='$oldusername' && admin_id='$admin_id'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $conn=mysqli_query($conn,"update admin set username='$newusername' where admin_id='$admin_id'");
 ?>
 <script>
	window.alert("Username change successfull");
	window.location="profile.php";
	</script>
 <?php
}
else
{
	?>
<script>
	window.alert("Old Username do not match");
	window.location="profile.php";
	</script>
	<?php
}
	 }
	 else
	 {
		?>
<script>
	window.alert("New Username and Confirm Username do not match");
	window.location="profile.php";
	</script>
	<?php 
	 }
}
?>