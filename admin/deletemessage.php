<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../store/connect.php');
if($_GET['AdmnNo'])
{
$id=$_GET['AdmnNo'];
 $sql = "delete from student where AdmnNo='$AdmnNo'";
 mysqli_query($con, $sql);
}

?>