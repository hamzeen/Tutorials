<?php
session_start();
include ('ViewController.class.php');
$control = new ViewController();

$email="";$password="";
$info = "&nbsp;";

if(isset($_SESSION['auth'])) { // Existing User who is Already SignedIn

	header("location: ../admin/dashboard.php");
	exit();
}

if(isset($_POST['login'])) {

	$email = trim($_POST['email']);
	$password = trim($_POST['password']);

	if($control->register($email, $password)) {
		$info = $info.'Signup Successful. Please proceed to Login <a href="../login/"> here</a>';
		$registered = true;
	} else {
		$info = $info.$control->info;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<title>Singup!</title>
	<link href="style.css" rel="stylesheet"/>
</head>
<body>

	<div style="margin: 7em auto;width: 400px;">
	<p style="margin-left: 0.2em; margin-bottom: 1em; width: 100%">
	<?php echo "$info";?></p>
	<?php if( !isset( $registered ) ) { ?>

	<form method="post">
		<p>Email:<br/>
		<input <?php echo "value='$email'";?> type="email" name="email" id="email" class="input" required>
	
		<p>Password: <br/>
		<input <?php echo "value='$password'";?> type="password" name="password" id="password" class="input" required>
	
		<p>
		<input type="submit" name="login" id="login" value="Sign Up" class="button"></p>
	</form>

		<p style="margin-left: 0.5em; margin-top: 1.4em; width: 100%">Already a member? SignIn Here.</p>
	<?php } ?>
	</div>

</body>
</html>