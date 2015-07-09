<?php
session_start();
if(!isset($_SESSION['auth'])){
	header("location: index.php");
	exit();
}
?>
<html>
<head><title>Dashboard</title>
<style>
body {
	/*color: #333;*/
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
	margin: 1em auto;
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
#bucket{
	width: 450px;
	margin-left: 30px;
	margin-top: 3%;
	margin-bottom: 20px;
	float:left;
	padding: 4px;

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
	margin-left: 15px;
	margin-bottom: 10px;
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
<div style="padding: 4px;font-size: 24px;margin: 0.5em auto;width: 1000px;"><h2>Dashboard</h2></div>
	
<div id="container">
	
	<div style="clear:both;"></div>
	<div id="bucket">Categories
	<p>
		<a href="category/create/">New Category</a><br/>
		View/Edit Categories<br/></p>
	</div>
	<div id="bucket">Pages
	<p>
		<a href="page/create/">New Page</a><br/>
		<a href="page/manage/">Manage Pages</a><br/></p>
	</div>
	<div style="clear:both;"></div>
	
	<div id="bucket">Images
	<p>
		Upload Images<br/></p>
	</div>
	<div id="bucket">General
	<p>
		Configurations<br/>
		<a href="logout.php">Logout</a><br/></p>
	</div>
	<div style="clear:both;"></div>

</div>
</body>
</html>