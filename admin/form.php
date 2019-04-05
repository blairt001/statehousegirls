<!DOCTYPE html>
<HTML>
<head>
<title>https://www.statehousegirls.ac.ke/
</title>
<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<style type="text/css">
	#top-menu, #top-menu li ul{
	margin: 0px;
	padding: 0px;
	list-style: none;
    }
    input[type="text"] {
    height: 30px;
  padding: 2px 2px 2px 2px;
}
 td {
    height: 30px;
  padding: 2px 2px 2px 2px;
}
input[type="radio"] {
    height: 30px;
     width: 40px;
  padding: 5px 0px 5px 2px;
}
	#top-menu > li{
		float:left;
		position: relative;
	}
	#top-menu li a{
		display: block;
		padding: 10px 8px 8px 3px;
	}
	#top-menu li ul {
		display: none;
		z-index: 100;
		width: 180px;
		position: absolute;
	}
	#top-menu li:hover ul{
		display: block;
	}
	#top-menu > li {
		//background-color:#876534;
		padding: 5px;
	}
	#top-menu li:hover {
		background-color:green;
	}
	#top-menu > li:hover > a {
		//background-color:#876534;
	}
	#top-menu > li > a{
		font-weight: bold;
		line-height: 40px;
		padding: 10px 8px 8px 3px;
		text-decoration: none;
		text-transform: uppercase;
		color :rgb(145,65,255);
		background-color:#aacc90;
	}
	#top-menu li ul {
		background-color:#aacc90;
		border: 1px solid #CCCCCC;
	}
	#top-menu li ul li {
  border: 1px solid #CCCCCC;
}

#top-menu li ul li a {
  color: #000000;
  text-decoration: none;
  line-height: 30px;
  padding: 0 10px;
}

#top-menu li ul li a:hover {
  text-decoration: none;
}
	table{
		margin-left: 5%;
		margin-right: 5%;
	}
	body{
		//background-color:#90ccdd;
	}

</style>
</head>
	<body  >
	<h1>Student Registration - Personal Details</h1>
<div  class="navlinks" id="navlinks" style="background-color:#876534;margin-left: 2%;">
		<ul id="top-menu">
			<li><a href="login.php"><img src="images/home-icon.jpg">Home</a></li>
				<li><a href="#"><img src="images/student-icon.jpg">Student</a>
				<ul>
					<li><a href="student.php"><img src="images/new-icon.jpg">New Student</a></li>
					<li><a href="student-subject.php"><img src="images/register-icon.jpeg">Register Student</a></li>
					<li><a href="form.php">Form</a></li>
					<li><a href="stream.php">Stream</a></li>
					<li><a href="docs.php">Documents</a>	</li>
				</ul>
				</li>
			<li><a href="#">Subject</a>
				<ul>
					<li><a href="subject.php"><img src="images/new-icon.jpg">New Subject</a></li>
					</ul>
			</li>
			<li><a href="#">Exams</a>
				<ul>
					<li><a href="exam.php"><img src="images/new-icon.jpg">Exam Records</a></li>
					</ul>
			</li>
			</ul>
	</div>
		
<div  style="margin-top:8%; ">
	  <table  id="reg-table">
		
				<tr>
				<td>Form ID:</td><td><input type="text" name="form" id="form" maxlength="10" placeholder="Enter Form ID" required="required"></td>
				</tr>
				<tr>
					<td>Name:</td><td><input type="text" name="name" id="name" maxlength="6" placeholder="Enter Form Name"></td>
				
					<td>Initial:</td><td><input type="text" name="initial" id="initial"  maxlength="1" placeholder="Enter Form Initials"></td>
					</tr>
				
					<td colspan="4" align="right"><button  name="saveform" class="saveform" >Save</button></td>
				</tr>
			</table>
</div>
<div id="msg">
			

		</div>
		<div id="load_form">
			

		</div>

<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){
			$('#load_form').load('load_form.php')
		},2000);
			
	});

 $(document).on('click','.saveform', function(){ 
 	var name=$('#name').val();
 	var initial=$('#initial').val();
 	var form=$('#form').val();
 	$.ajax({
 		url:"insert_form.php",
 		type:"POST",
 		data:{form:form,initial:initial,name:name},
 		dataType:"text",
 		success:function(data)
 		{  
 		     $('#msg').html(data);
 		}
 	});
 });
	 
</script>
		<script type="text/javascript">
			$("document").ready(function(){
				//$("#reg-table").css("background-color","#567342");
				//$("#reg-table td").css("color","#458745");
				$("#dob").datepicker({
					dateFormat:'yy:mm:dd',	
					changeMonth:true,
					changeYear:true,
					numberOfMonths:1,
				});
			});<!-- End of jquery code -->

				
		</script>
			
	</body>

</html>