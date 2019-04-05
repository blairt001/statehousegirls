	//get user input data details
	var username=document.forms["regform"]["uname"];
	var phone=document.forms["regform"]["utel"];
	var email=document.forms["regform"]["email"];
	var password=document.forms["regform"]["upsd"];
	var password_confirm=document.forms["regform"]["cpsw"];
	var userid=document.forms["regform"]["uid"];
	
	//get all error display objects
	var username_error=document.getElementById("username_error");
	var phone_error=document.getElementById("phone_error");
	var email_error=document.getElementById("email_error");
	var password_error=document.getElementById("password_error");
	var userid_error=document.getElementById("userid_error");
	
	//setting all event listeners
	username.addEventListener("blur",usernameVerify,true);
	phone.addEventListener("blur",phoneVerify,true);
	email.addEventListener("blur",emailVerify,true);
	password.addEventListener("blur",passwordVerify,true);
	userid.addEventListener("blur",UseridVerify,true)
//validate function
			function validate()
			{
				//username validation
				if(username.value==""){
					username.style.border="1px solid red";
					username_error.style.color="red";
					username_error.textContent="Username is required";
					username.focus();
					return false;
				}
				//userid verification
				if(userid.value==""){
					userid.style.border="1px solid red";
					userid_error.style.color="red";
					userid_error.textContent="Your National ID number Or passport number is requreod";
					userid.focus();
					return false;
				}
				if(userid.value.length!=8){
					userid.style.border="1px solid red";
					userid_error.style.color="red";
					userid_error.textContent="The national id/passport  number should be a minimum of 8 digits";
					userid.focus();
					return false;
				}
				if(isNaN(userid.value)){
					userid.style.border="1px solid red";
					userid_error.style.color="red";
					userid_error.textContent="Enter only numeric  number i.e \"+2547********\"";
					userid.focus();
					return false;
				}
				//phone validation
				if(phone.value==""){
					phone.style.border="1px solid red";
					phone_error.style.color="red";
					phone_error.textContent="Phone is required";
					phone.focus();
					return false;
				}
				if(phone.value.length<13){
					phone.style.border="1px solid red";
					phone_error.style.color="red";
					phone_error.textContent="The Phone number should be a minimum of 13 digits";
					phone.focus();
					return false;
				}
				if(isNaN(phone.value)){
					phone.style.border="1px solid red";
					phone_error.style.color="red";
					phone_error.textContent="Enter valid Phone number i.e \"+2547********\"";
					phone.focus();
					return false;
				}
				
				//email validation
				if(email.value==""){
					email.style.border="1px solid red";
					email_error.style.color="red";
					email_error.textContent="Email is required";
					email.focus();
					return false;
				}
				//password validation
				if(password.value==""){
					password.style.border="1px solid red";
					password_error.style.color="red";
					password_error.textContent="Password is required";
					password.focus();
					return false;
				}
				if(password.value.length<6){
					password.style.border="1px solid red";
					password_error.style.color="red";
					password_error.textContent="Enter Password of minimum of 6 letters";
					password.focus();
					return false;
				}
				if(password_confirm.value==""){
					password_confirm.style.border="1px solid red";
					password_error.style.color="red";
					password_error.textContent="Password confirmation is required";
					password_confirm.focus();
					return false;
				}
				//password comfirmation
				if(password.value!=password_confirm.value){
					password.style.border="1px solid red";
					password_confirm.style.border="1px solid red";
					password_error.style.color="red";
					password_error.textContent="The Two Passwords do not march ";
					password.focus();
					return false;
				}
			}
	//event handle functions
	function usernameVerify()
	{
		if(username.value!=""){
			username.style.border="1px solid white";
			username_error.innerHTML="";
			return true;
		}
	}
	
	function UseridVerify()
	{
		if(userid.value!=""){
			userid.style.border="1px solid white";
			userid_error.innerHTML="";
			return true;
		}
	}
	function phoneVerify()
	{
		if(phone.value!=""){
			phone.style.border="1px solid white";
			phone_error.innerHTML="";
			return true;
		}
	}
	
	function emailVerify()
	{
		if(email.value!=""){
			email.style.border="1px solid white";
			email_error.innerHTML="";
			return true;
		}
	}
	function passwordVerify()
	{
		if(password.value!=""){
			password.style.border="1px solid white";
			password_error.innerHTML="";
			return true;
		}
	}
