<?php
session_start();
$info = "&nbsp;";
if(!isset($_SESSION['auth'])){
	if(isset($_POST['login'])){
		if($_POST['username']=="alltech" && $_POST['password']=="admin"){
			$_SESSION['auth'] = "1";
			header("location: dashboard.php");
			//$info = $info."You have logged-in successfully.";
		}else{ $info = $info."Please enter correct  username & password.";}
	}
}else{
	// go to dashboard.
	$info = $info."You are already logged-in.";
}


/*if(isset($_SESSION['auth'])){
	$message="authenticated";
}else{$message="not authenticated";}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<title>Alliance Tech > Login</title>
<style>
p {
	color: #777;
}
body {
	color: #333;
}
* {
	margin: 0;
	padding: 0;
}
form .submit {
	float: right;
}
form p {
margin-bottom: 5px;
}

form {
	margin-left: 8px;
	padding: 26px 24px 18px;
	font-weight: normal;
	-moz-border-radius: 3px;
	-khtml-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	background: white;
	border: 1px solid #E5E5E5;
	-moz-box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
	-webkit-box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
	-khtml-box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
	box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
}

/*import for form inputs fields*/
body form .input {
font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
font-weight: 200;
font-size: 24px;
width: 97%;
padding: 3px;
margin-top: 2px;
margin-right: 6px;
margin-bottom: 16px;
border: 1px solid #E5E5E5;
background: #FBFBFB;
outline: none;
-moz-box-shadow: inset 0px 0px 2px rgba(200,200,200,0.2);
-webkit-box-shadow: inset 0px 0px 2px rgba(200,200,200,0.2);
box-shadow: inset 0px 0px 2px rgba(200,200,200,0.2);

-webkit-transition: -webkit-box-shadow 0.2s ease-out;
-moz-transition: -moz-box-shadow 0.2s ease-out;
-o-transition: box-shadow 0.2s ease-out;
}

body form .input:hover, body form .input:focus{
-moz-box-shadow: inset 0px 0px 6px rgba(200,200,200,0.4);
-webkit-box-shadow: inset 0px 0px 6px rgba(200,200,200,0.4);
box-shadow: inset 0px 0px 6px rgba(200,200,200,0.4);

-webkit-transition: -webkit-box-shadow 0.3s ease-in;
-moz-transition: -moz-box-shadow 0.3s ease-in;
-o-transition: box-shadow 0.3s ease-in;
}

input.button-primary, button.button-primary, a.button-primary {
border-color: #298CBA;
font-weight: bold;
color: white;
background: #21759B repeat-x scroll left top;
text-shadow: rgba(0, 0, 0, 0.3) 0 -1px 0;
}

.button-primary {
font-family: sans-serif;
padding: 5px 20px;
border: none;
font-size: 16px;
border-style: solid;
-moz-border-radius: 11px;
-khtml-border-radius: 11px;
-webkit-border-radius: 11px;
border-radius: 11px;
cursor: pointer;
text-decoration: none;
margin-top: -3px;
border-width: 1px;
}
</style>
</head>

<body>

<div style="margin: 7em auto;width: 400px;">
<p style="margin-left: 0.2em; margin-bottom: 2em; width: 100%"><?php echo "$info";?></p>

<form method="post">
	<p>Username:<br/>
	<input type="text" name="username" id="username" class="input">
	
	<p>Password: <br/>
	<input type="password" name="password" id="password" class="input">
	
	<p>
	<input type="submit" name="login" id="login" value="Log In" class="button-primary"></p>
</form>
</div>
</body>
</html>