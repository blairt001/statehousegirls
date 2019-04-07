<?php
$conn=mysqli_connect("localhost","root","1234") or die("Could not connect");
mysqli_select_db($conn,"statehouse") or die("could not connect database");
?>