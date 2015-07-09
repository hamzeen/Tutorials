<?php
session_start();
if(!isset($_SESSION['auth'])){
	header("location: ../../index.php");
	exit();
}

// include the database class
include ('../../../includes/database.class.php');
$db = new Database;
$title="";$content="";$type=0;
$isValidData = 1;
$info = "";

if(isset($_POST['Create'])){
	//print_r($_POST);
	if($_POST['title']==""){
		$content = $_POST['content'];
		$type= $_POST['type'];
		$isValidData = 0;
		$info = $info."Page Title can't be empty.<br/>";
	}
	if($_POST['content']==""){
		$title = $_POST['title'];
		$type= $_POST['type'];
		$isValidData = 0;
		$info = $info."Page Content can't be empty.<br/>";
	}
	
	if($isValidData){
		$rows = mysql_num_rows($db->query("select id from view where title='{$_POST['title']}'"));
		//for now we save primary pages
		if($_POST['type']=="0"){
			
			//look to see if its a duplicating title.
			if($rows==0){
				// don't need to set category and PK.
				$db->query("insert into view (title, content) values('{$_POST['title']}','{$_POST['content']}')");
				$info = "The Primary page was created sucessfully.<br/>";
			}else{ $info = $info."Sorry, you are not allowed to have a duplicate page title.<br/>";}
			
		}
		else{
			//look to see if it is a duplicate title.
			if($rows==0){
				// don't need to set category and PK.
				$db->query("insert into view (title, content, category) values('{$_POST['title']}','{$_POST['content']}', '{$_POST['category']}')");
				$info = $info."The Category Page was created sucessfully.<br/>";
			}else{ $info = $info."Sorry, you are not allowed to have a duplicate page title.<br/>";}
		}
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<title>New Page</title>
	<link rel="stylesheet" type="text/css" href="../../../includes/dashboard.css"/>
</head>

<body>
<div style="padding: 4px;font-size: 24px;margin: 0.5em auto;width: 1000px;"><h2>New Page</h2></div>

<div id="container">
	<div id="info_panel"><?php echo "$info"; ?></div>

	<form name="page_create_form" method="post">
		<p>Title: <br/>
		<input type="text" name="title" id="title" size="70" maxlength="80" value="<?php echo "$title";?>" class="input" style="padding: 5px;font-size:20px;">

		<div style="clear:both"></div>
		<p>Page Type: <br/>
		<input <?php if($type==0) echo "checked=\"checked\"";?> onclick="javascript:document.getElementById('category').style.display='none'" type="radio" name="type" value="0"> Primary Page
		<input <?php if($type==1) echo "checked=\"checked\"";?> onclick="javascript:document.getElementById('category').style.display='block'" type="radio" name="type" value="1"> Category Page

		<div style="clear:both"></div>
		<div id="category" style="<?php if($type==0){echo "display:none";} else{echo "display:block";}?>">
		<p>Page Category: <!--[Leave as "None" for primary page]//-->
		<select name="category" class="input">
		<?php
		// load the categories from db.
		$categories = $db->query("select * from category");
		while ($row = mysql_fetch_array($categories)) {
			echo "<option value=\"{$row['id']}\">{$row['name']}</option> ";
		}
		?>
		</select></div>

		<div style="clear:both"></div>
		<p>Content: <br/>
		<textarea name="content" id="content" cols="100" rows="14" class="input" style="width:97%;"><?php echo "$content";?></textarea>

		<div style="clear:both"></div>
		<input type="submit" name="Create" value="Create" class="button-primary">
	</form>

</div>
</body>
</html>