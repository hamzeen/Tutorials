<?php
session_start();
$info = "&nbsp;";
if(isset($_SESSION['auth'])) {
	$info="You were logged, now destroyed. {$_SESSION['auth']}";
	session_destroy();
}
?>

<html>
<head><title>Logout</title>
<style>
body {
	color: #599100;
	background: #DED;
}
* {
	margin: 0;
	padding: 0;
}

#container {
	font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
	font-size: 24px;
	margin-top: 2px;
	margin-bottom: 16px;
	margin: 0.5em auto;
	width: 1000px;

	padding: 6px;
	font-weight: normal;

	
	/*background: #FEFEFE;*/
	border: 1px solid #E5E5E5;
	-moz-box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
	-webkit-box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
	-khtml-box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
	box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
}

ul{
list-style:none;
}
p{
	margin-top: 20px;
	font-size: 16px;
}
a:hover {
color: #222;
}
a:hover, a:active {
color: #222;
}
a {
color: #444;
padding: 0px;
text-decoration: none;
font-size: 16px;
}
</style>
</head>

<body>
<div style="padding: 4px;font-size: 24px;margin: 0.5em auto;width: 1000px;"><h2>Logout</h2></div>

<div style="height: 250px" id="container">
	
	<p><?php echo "$info"; ?>
    <p><a href="../">Back to AliinaceTech Home</a> | <a href="index.php">Login again</a></p>
	<div style="clear:both;"></div>

</div>
</body>
</html>
