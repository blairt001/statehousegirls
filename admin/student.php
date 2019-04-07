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
button{
	background-color: #ddae32;
	width: 80px;
	height: 30px;
}
	table{
		margin-left: 5px;
		margin-right: 10px;
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
					<li><a href="docs.php">Documents</a></li>
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
	  <table  id="reg-table table">
		
				<tr>
				<td>AdmNo/IndexNo:</td><td><input type="text" name="admno" id="admno" placeholder="Enter Admin NO/ Index No" required="required"></td>
					<td>First Name:</td><td><input type="text" name="fname" id="fname" placeholder="Enter Firstname" required="required"></td>
						<td>Other Name:</td><td><input type="text" name="oname" id="oname" placeholder="Enter Othername"></td>
					<td>Last Name:</td><td><input type="text" name="lname" id="lname" placeholder="Enter Lastname" required="required"></td>
				</tr>
				<tr>
					<td>Postal Address:</td><td><input type="text" name="paddress" id="paddress" maxlength="6" placeholder="Enter Postal Address"></td>
					<td>Postal Code:</td><td><input type="text" name="pcode" id="pcode"  placeholder="Enter Postal Code"></td>
				<td>Town:</td><td><input type="text" name="town" id="town"  placeholder="Enter Town"></td>
				</tr>
				<tr>
					<td>Date of Birth:</td><td><input type="text" id="dob" name="dob" id="dob" placeholder="Choose Date" ></td>
						<td>Form:</td><td><select name="form" id="form" required="required" >
					</select></td>
						<td>Stream:</td><td><select name="stream" id="stream" required="required" >
						<option value="" >Choose Form First</option>
					</select></td>
				<td>Gender:</td><td><input type="radio" name="gender" id="gender" value="Female" required="required">Female</td>
					<td>Password:</td><td><input type="password" name="password" id="password" placeholder="Enter student password" required="required">
				<tr >
				<td colspan="6" align="center"><button  name="savestudent" class="savestudent" >Save</button></td>
				</tr>
			</table>
</div>
<div id="msg">
			

		</div>
		<div id="load_student">
			

		</div>

<script type="text/javascript">
function fetch_student(){
			$.ajax({
			url:"load_student.php",
			method:"POST",
			success:function(data){
				$('#load_student').html(data);
			}
		});

}
function edit_student(sno,text,column_name){
			$.ajax({
			url:"edit_student.php",
			type:"POST",
 		data:{sno:sno,text:text,column_name:column_name},
 		dataType:"text",
			success:function(data){
				alert(data);
				$('#msg').html(data);
				fetch_student();
			}
		});

}
function delete_student(sno){
			$.ajax({
			url:"delete_student.php",
			type:"POST",
 		data:{sno:sno},
 		dataType:"text",
			success:function(data){
				alert(data);
				$('#msg').html(data);
				fetch_student();
			}
		});

}
	$(document).ready(function(){
fetch_student();
		$.ajax({
			url:"load_forms.php",
			method:"POST",
			success:function(data){
				$('#form').html(data);
			}
		});

	});
	$(document).on('change','#form',function(){
		var form=$('#form').val();
		$.ajax({
			url:"load_streams.php",
			method:"POST",
			data:{form:form},
			dataType:'text',
			success:function(data){
				$('#stream').html(data);
			}
		});
	});
	$(document).on('blur','.Fname',function(){
		var sno=$(this).data("id2");
		var Fname=$(this).text();
		edit_student(sno,Fname,"Fname")
	});
	$(document).on('blur','.Oname',function(){
		var sno=$(this).data("id3");
		var Oname=$(this).text();
		edit_student(sno,Oname,"Oname")
	});
	$(document).on('blur','.Lname',function(){
		var sno=$(this).data("id4");
		var Lname=$(this).text();
		edit_student(sno,Lname,"Lname")
	});
	$(document).on('blur','.Gender',function(){
		var sno=$(this).data("id5");
		var Gender=$(this).text();
		edit_student(sno,Gender,"Gender")
	});
	
	$(document).on('blur','.paddress',function(){
		var sno=$(this).data("id6");
		var paddress=$(this).text();
		edit_student(sno,paddress,"paddress")
	});
	$(document).on('blur','.Pcode',function(){
		var sno=$(this).data("id7");
		var Pcode=$(this).text();
		edit_student(sno,Pcode,"Pcode")
	});
	$(document).on('blur','.Town',function(){
		var sno=$(this).data("id8");
		var Town=$(this).text();
		edit_student(sno,Town,"Town")
	});
		$(document).on('blur','.DOB',function(){
		var sno=$(this).data("id10");
		var DOB=$(this).text();
		edit_student(sno,DOB,"DOB")
	});
			$(document).on('click','.dltbtn',function(){
		var sno=$(this).data("id11");
		delete_student(sno);
	});
	$(document).on('blur','.password',function(){
		var sno=$(this).data("id12");
		var password=$(this).text();
		edit_student(sno,Gender,"password")
	});

 $(document).on('click','.savestudent', function(){ 
 	var fname=$('#fname').val();
 	var oname=$('#oname').val();
 	var lname=$('#lname').val();
 	var gender=$('#gender').val();
 	var paddress=$('#paddress').val();
 	var pcode=$('#pcode').val();
 	var form=$('#form').val();
 	var stream=$('#stream').val();
 	var town=$('#town').val();
 	var date=$('#dob').val();
	
 	var clocation=$('#clocation').val();
 	var town=$('#town').val();
 	var admno=$('#admno').val();
	var password=$('#password').val();
 	$.ajax({
 		url:"insert_student.php",
 		type:"POST",
 		data:{admno:admno,fname:fname,paddress:paddress,lname:lname,gender:gender,oname:oname,pcode:pcode,stream:stream,form:form,date:date,town:town,password:password},
 		dataType:"text",
 		success:function(data)
 		{  
 		     $('#msg').html(data);
 		     fetch_student();
 		}
 	});
 });
	
</script>
		<script type="text/javascript">
			$("document").ready(function(){
				//$("#reg-table").css("background-color","#567342");
				//$("#reg-table td").css("color","#458745");
				/*var dateToday = new Date();
				var yrRange = dateToday.getFullYear()-18;*/
				var dateToday = new Date();
				var yrRange = dateToday.getFullYear()-11;
				$("#dob").datepicker({
					dateFormat:'yy:mm:dd',	
					changeMonth:true,
					changeYear:true,
					numberOfMonths:1,
					yearRange: "1980:"+yrRange
				});
		
			});<!-- End of jquery code -->

				
		</script>
			
	</body>

</html>