<!DOCTYPE html>
<html>
<head>
<title>https://www.statehousegirls.com/
</title>
<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

<style type="text/css">
body
{
	background-color: orange;
}

#top-menu li ul li a:hover {
  text-decoration: none;
}
	
	.navlinks ul li{
		display: inline;
		list-style: none;
	}
	.navlinks ul li a{
		font-weight: bold;
		line-height: 40px;
		padding: 10px 8px 8px 3px;
		text-decoration: none;
		text-transform: uppercase;
		color :rgb(145,65,255);
		background-color:;
	}
	#load_subject label {
		border:2px solid #675;
		display:inline-block;
		background:white;
		width: 10%;
		height: 5%;
      margin: 10px 10px;
      margin-right: 15px;
padding: 2px 2px 6px 5px;
	}
	#load_subject input {
		//border:5px solid #675;
		background:white;
		width: 30px;
		height: 20px;
      margin: 2px;
padding: 1px 1px 1px 1px;
	}
	table{
		float: left;
	}
	body{
		//background-color:#90ccdd;
	}
	#tony
	{
		float: right;
		background-color:orange;
		
	}
a.link
{
	border-style : solid;
	border-width: 1px 1px 1px 1px;
	text-decoration: none;
	padding: 12px;
	border-color: #000000;
	border-radius: 5px;
	background-color: white
}
a.link:hover
{
	background-color: lime;
}
	
</style>
</head>
<br />
<section>
<div id="tony">
<div align="center" class="navlinks">
			<ul>
			<li><a href="index3.php" class="link"><font size="3px;"><font color="black"><b>Home</b></font></font></a></li>
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			<li><a href="bdocs3.php" class="link"><font size="3px;"><font color="blue"><b>Assignments</b></font></font></a></li>
			&nbsp;
			&nbsp;		
            &nbsp;
			&nbsp;				
			<li><a href="logout.php" class="link"><font size="3px;"><font color="red"><b>Logout</b></font></font></a></li>
			</ul>
		</div>
     </div>
	 </section>

<?php echo '<marquee><h3><font color="white"><font size="10px;">Welcome parent / guardian to  <font color="green">'. $_COOKIE['StudentName']."</font></font></font></h3></marquee>";?> 
<center><h1><font color="green"><u>Your Child Details are:</u></font></h1><?php
echo '<h3><font color="blue">Name:</font>'. $_COOKIE['StudentName']."</h3>"; 
echo  '<h3><font color="blue">Admno / Index No:</font>'.$_COOKIE['AdmnNo'].'</h3>';
echo '<h3><font color="blue">Class:</font>Form'. $_COOKIE['Class']."</h3>"; 
echo  '<h3><font color="blue">Entry Marks:</font>'.$_COOKIE['EntryMark'].'</h3>';
echo  '<h3><font color="blue">Current Year: <font color="black">2019</font></font></h3>';

	?></center>
	
	
		</head>
		<h1><font color="green"><i>N/B: Scroll towards the right direction >>> to view the complete results.</i></font></h1>
		
	<body>
	
<font size="4px;">
<b>
	<div  id="load_subject"  style="margin-left:10%">
					
				</div>
<input type="hidden" name="admno" id="admno" value="<?php
echo $AdmnNo=$_COOKIE['AdmnNo'];
	?>">
	</body>
		<script type="text/javascript">
		$(document).ready(function(){
	var admno=$('#admno').val();
 	$.ajax({
			url:"load_marks.php",
			type:"POST",
			data:{admno},
			dataType:"text",
			success:function(data){
				$('#load_subject').html(data);
			}
		});
			
});

	</script>
	</b>
	</font>
</HTML>