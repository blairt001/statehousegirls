<?php
$server="localhost";
$user="root";
$pass="1234";
$dbname="statehouse";
$conn=mysqli_connect($server,$user,$pass);
	if(!$conn)
		{
			echo "server conn failed";
		}
	else
	{
		$database="CREATE DATABASE IF NOT EXISTS ".$dbname;
		mysqli_query($conn,$database) or die("creation failed".mysqli_error($conn));
		 mysqli_select_db($conn,$dbname) or die("Database conn failed".mysqli_error($conn));
	}
function loggedin()
  {
	 if(isset($_SESSION['username']) || isset($_COOKIE['username']))
	 {
		 $logdin=TRUE;
		 return $logdin;
	 }		 
	  
  }
  function loggedinuser()
  {
	 if(isset($_SESSION['customer']) || isset($_COOKIE['customer']))
	 {
		 $logdins=TRUE;
		 return $logdins;
	 }		 
	  
  }
?>