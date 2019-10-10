<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function getName(){
	if(isset($_POST['name'])){
		echo "<p>Hello, " . $_POST['name'] . "</p>";
	}
}
function checkPasswords(){
        
	if(isset($_POST['password']) && isset($_POST['confirm'])){
		if($_POST['password'] == $_POST['confirm']){
			echo "<br>Passwords Matched!<br>";
		}
		else{
			echo "<br>Passwords didn't match!<br>";
              
		}
        }
}

?>
<html>
<head>
<script>
function validate(){
	var form = document.forms[0];
	var password = form.password.value;
	var conf = form.confirm.value;
	console.log(password);
	console.log(conf);
	let pv = document.getElementById("validation.password");
	let succeeded = true;
	if(password == conf){
		
		pv.style.display = "none";
                form.confirm.className= "noerror";
                
	
	}
	else{
		pv.style.display = "block";
		pv.innerText = "Passwords don't match";
		
	        form.confirm.className = "error";
         	succeeded = false;
                
        }
        var email = form.email.value;
	var ev = document.getElementById("validation.email");
	//this won't show if type="email" since browser handles
	//better validation. Change to type="text" to test
	if(email.indexOf('@') > -1){
		ev.style.display = "none";
	}
	else{
		ev.style.display = "block";
		ev.innerText = "Please enter a valid email address";
		succeeded = false;
	}
        var dv = form.dropdown;
        if(dv.selectedIndex == 0){
		alert("Please pick a value");
		succeeded = false;
	}
	console.log(dv.options[dv.selectedIndex].value);
                
        

        
        
        return succeeded;


}
</script>
<style>
input { border: 1px solid black; }
.error {border: 1px solid red;}
.noerror {border: 1px solid black;}
</style>
</head>
<body><?php getName();?>
<div style="margin-left: 50%; margin-right:50%;">
<form method="POST" action="#" onsubmit="return validate();">
<input name="name" type="text" placeholder="Enter your name"/>
<input name="password" type="password" placeholder="Enter a password"/>
<input name="confirm" type="password" placeholder="Please confirm your password"/>
<span style="display:none;" id="validation.password"></span>
<input name="email" type="email" placeholder="name@example.com"/>
<span id="validation.email" style="display:none;"></span>
<span style="display:none;" id="validation.password"></span>
<select name="dropdown" id="mySelectId">
	<option value="0">Select One</option>
	<option value="1">Men's Clothing</option>
	<option value="2">Women's clothing</option>
        <option value="3">Kid's clothing</option>
        <option value="4">Sport's clothing</option>
</select>


<input type="submit"onclick="ddlValidate();" value="Try it"/>

</form>
</body>
</html>
<?php checkPasswords();?>
<?php
if(isset($_POST)){
	echo "<br><pre>" . var_export($_POST, true) . "</pre><br>";
}
?>
