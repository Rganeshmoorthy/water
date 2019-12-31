<?php include('server1.php') ?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>registration form</title>
<meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />
<meta name="description" content="This document is an example of JavaScript Form Validation using a sample registration form. " />
<link rel='stylesheet' href='reg.css' type='text/css'/>
<style>
btn {
	top: 40%;
	left: 40%;
	position: absolute;
    padding: 15px 45px;
    color: #fff;
	border: none;
    font-size: 25px;
    font-family: Arial;
	font-weight: bold;
	border-radius:10px;
	text-transform: uppercase;
    background:linear-gradient(45deg,#800080,#8093f1);
	cursor:pointer;
}
btn:hover{
	box-shadow:#000 -1px 1px,  #000 -2px 2px, #000 -3px 3px, #000 -4px 4px, #000 -5px 5px, #000 -6px 6px, #000 -7px 7px, #000 -8px 8px;
	transform:translate3d(8px,-8px,0);
	transition-delay:0s;
	transition-duration:0.4s;
	transition-property:all;
	transition-timing-function:line;
}
</style>
</head>
<script>
function formValidation()
{
	
  
   var gender = document.getElementsByName('gender');
    var genValue = false;
    for(var i=0; i<gender.length;i++)
	{
        if(gender[i].checked == true)
		{
            genValue = true;    
        }
    }
    if(!genValue)
	{
		alert("Please Choose the gender");
		return false;
	}
	var e = document.getElementById('choice');
    var strUser = e.options[e.selectedIndex].value;
	var strUser1 = e.options[e.selectedIndex].text;
	if(strUser==0)
	{
		alert("Please select your country name");
		return false;
	}
	var x = document.forms["registration"]["username"].value;
  if (x == "")
  {
    alert("Username should not be left empty..Please fill out..");
    return false;
  }
  else{
  alert("\n you have registered successfully");
 return true;
 }
}
		function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address.. Provide valid one ');
            return false;
        }
		

}/*
function validatePassword(pass)
{
	
    if (pass.value.length<8){
        alert("The password should be 8 characters in length! Provide valid password")
        return false
    }else {
        return true
    }
}
function validatepass()
{
	var x=regForm.paswd.value;
	var y=regForm.rpaswd.value;
	if(x==y)
		return true
	else
	{
		alert("\n Passwords mismatched..Please enter correctly");
		return false;
	}
}*/
function alertmsg()
{
   alert("\n you have registered successfully");
}
</script>
<body onload="document.registration.userid.focus()">
<h1 style=" color:#fff;">Complaints Registration Form</h1>

<form name='registration' action="server1.php" method="post">
<ul>

<li><label for="username"><b>Name:</b></label></li>
<li><input type="text" name="username" size="50" /></li>
<li><label for="email"><b>Email:</b></label></li>
<li><input id="pass" type="text" name="email" class="input" onblur="validateEmail(this);"></li>
<li><label for="phno"><b>Ph_number:</b></label></li>
<li><input type="text" name="ph_num" size="10" minlength="10" maxlength="10"/></li>
<li><label for="address"><b>Address:</b></label></li>
<li><input type="text" name="address" size="50" /></li>
<li><label for="country"><b>Region:</b></label></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><select id="choice" name="region">
<option value="0">--Select--</option>
<option value="North madurai">North madurai</option>
<option value="South madurai">South madurai</option>
</select></li>


<li><label id="gender" name="gender"><b>Gender:</b></label></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><input type="radio" name="gender" value="Male" /><span>Male</span></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><input type="radio" name="gender" value="Female" /><span>Female</span></li>

<li><label for="desc"><b>Type your complaint here:</b></label></li>
<li><textarea name="complaints" id="desc"></textarea></li>
<li><input type="submit" name="submit1" id="btn" value="Submit" /></li>
</ul>
</form>
</body>
</html>