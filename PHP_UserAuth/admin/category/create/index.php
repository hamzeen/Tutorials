<?php
session_start();
if(!isset($_SESSION['auth'])){
	header("location: ../../index.php");
	exit();
}

// include the database class
include ('../../../includes/database.class.php');
$db = new Database;
$info = "&nbsp;";

if(isset($_POST['create'])){

	if($_POST['category']!=""){
		$category = $_POST['category'];
		$result = mysql_num_rows($db->query("select id from category where name='$category'"));
		if($result == 0){
			$db->query("insert into category (name) values('$category')");
			$info ="The Category \"$category\" was created sucessfully.";
			//header("location: index.php/?commit=true");
		}else{$info = "Sorry, you are not allowed to create a duplicate category.";}
		
	}else{$info = "Category name can not be empty.";}
}
?>
<html>
<head>
	<title>New Category</title>
	<link rel="stylesheet" type="text/css" href="../../../includes/dashboard.css"/>
	<style>
	<style>
body {
	color: #599100;
	background: #DED;
}
* {
	margin: 0;
	padding: 0;
}

ul{
list-style:none;
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

<div style="padding: 4px;font-size: 24px;margin: 0.5em auto;width: 1000px;"><h2>New Category</h2></div>

<div id="container">
	<div id="info_panel"><?php echo $info;?></div>

	<form method="post">
	<p>Category Name:<br/>
		<input type="text" name="category" maxlength="125" class="input">
	<p>
		<input type="submit" name="create" value="Create" class="button-primary">
	</form>
</div>
</body>
</html>