<?php
session_start();
include("config.php");
if(isset($_POST['change1']))
{
    $oldusername=$_POST['user1'];
	$id=$_SESSION['userid'];
    $newusername=$_POST['user2'];
	$newusername1=$_POST['user3'];
	if($newusername1==$newusername)
	{
$sql=mysqli_query($conn,"SELECT * FROM  staff where username='$oldusername' && id='$id'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $conn=mysqli_query($conn,"update staff set username='$newusername' where id='$id'");
 ?>
 <script>
	window.alert("Username change successfull");
	window.location="profile1.php";
	</script>
 <?php
}
else
{
	?>
<script>
	window.alert("Old Username do not match");
	window.location="profile1.php";
	</script>
	<?php
}
	}
	else
	{
		?>
<script>
	window.alert("New Username and Confirm Username do not match");
	window.location="profile1.php";
	</script>
	<?php
	}
}
?>