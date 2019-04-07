<?php
require('config.php');
if (loggedin())
{
	header("Location:student/index3.php");
	exit();
}

//
	if(isset($_POST['login']))
 {
 $AdmnNo=$_POST["username"];
 $Class=$_POST["password"];
// $rememberme=$_POST["rememberme"];
$loginOK=FALSE;
$query="SELECT * From student where AdmnNo='$AdmnNo' AND Class='$Class'";
$query1="SELECT * From term1 where AdmnNo='$AdmnNo' AND Class='$Class'";
$query2="SELECT * From term2 where AdmnNo='$AdmnNo' AND Class='$Class'";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
$result1=mysqli_query($conn,$query1) or die(mysqli_error($conn));
$result2=mysqli_query($conn,$query2) or die(mysqli_error($conn));
if (mysqli_num_rows($result)) {
	while($row=mysqli_fetch_assoc($result))
		{
	
						    $AdmnNo=$row['AdmnNo'];
							$StudentName=$row['StudentName'];
							$Class=$row['Class'];
							$EntryMark=$row['EntryMark'];
							$loginOK=TRUE;
		}
}
if(mysqli_num_rows($result1))
{
	while($row=mysqli_fetch_assoc($result1))
		{
	
						    $AdmnNo=$row['AdmnNo'];
							$StudentName=$row['StudentName'];
							$Class=$row['Class'];
							$EntryMark=$row['EntryMark'];
							$loginOK=TRUE;
		}
}
if(mysqli_num_rows($result2))
{
	while($row=mysqli_fetch_assoc($result2))
		{
	
						    $AdmnNo=$row['AdmnNo'];
							$StudentName=$row['StudentName'];
							$Class=$row['Class'];
							$EntryMark=$row['EntryMark'];
							$loginOK=TRUE;
		}
}
		else
			{
				?>
				<script>
				window.alert("Login Failed.Try Again.\nPlease Enter Correct Username and password !!");
				window.location="index3.php";
				var errormsg=document.getElementById("login-error");
				errormsg .style.display='block';
				errormsg .style.color='red';
				errormsg.style.border="1px solid red";
				errormsg.textContent="Admno or Index Number is Invalid!";
				</script>
				
				<?php
				}	/*$db_password=$row['password'];
				if($password==$db_password)*/
					
				/*else
					$loginOK=FALSE;*/
				
			if($loginOK==TRUE)
			{
					    setcookie("AdmnNo",$AdmnNo);
						setcookie("StudentName",$StudentName);
						setcookie("Class",$Class);
						setcookie("EntryMark",$EntryMark);
						$_SESSION['AdmnNo']=$AdmnNo;
						
					?>
			<script>
				window.alert("Login Succesiful!!");
				</script>
				<?php
				echo " User login is succesively"."<br/>";
				echo " Welcome ".$AdmnNo;
				header("Location:student/index3.php");
			    exit();	
			}
 

else
{
?>
	<script>
	window.alert("Login Failed.Admno not Found.\nPlease Enter Correct Username and password !!");
	window.location="index.php";
	var errormsg=document.getElementById("login-error");
	errormsg .style.display='block';
	errormsg .style.color='red';
	errormsg.style.border="1px solid red";
	errormsg.textContent="Admno or Index Number is not registered!";
	
	</script>
	
	<?php
}
 }

?>