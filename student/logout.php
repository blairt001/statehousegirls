<?php
require("config.php") ;
session_start();
session_destroy();

//unset cookie
setcookie("AdmnNo","",time()-300);
setcookie("StudentName","",time()-300);
setcookie("Class","",time()-300);
setcookie("EntryMark","",time()-300);
header ("Location:../index.php");
	exit();
?>