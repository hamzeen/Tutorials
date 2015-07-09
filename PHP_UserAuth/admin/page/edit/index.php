<?php
session_start();
if(!isset($_SESSION['auth'])){
	header("location: ../../index.php");
	exit();
}

// include the database class
include ('../../../includes/database.class.php');
$db = new Database;
$title="";$content="";$type=0;$category=0;
$isValidData = 1;$isViewable=0;
$info = "Sorry, it appears that the page which you are trying to edit doesn't prevail.";

if(isset($_GET['view']) && $_GET['view']>0){
	$id = $_GET['view'];
	if(mysql_num_rows($db->query("select id from view where id='$id'"))>0){
		$result = mysql_fetch_array($db->query("select * from view where id='$id'"));
		$title = $result['title'];
		$content = $result['content'];
		$type = ($result['category']>0)?1:0;
		$category = $result['category'];
		
		$isViewable = 1;
		$info = "";
	}
}
if(isset($_POST['Update']) && $isViewable==1){
	//print_r($_POST);//debug
	if($_POST['title']==""){
		$info = $info."Please enter a valid title.<br/>";
		$isValidData = 0;
	}else{
		$title = $_POST['title'];
	}
	
	if($_POST['content']==""){
		$info = $info."Sorry, it appears that you have got rid of the entire content.";
		$isValidData = 0;
	}else{
		$content = $_POST['content'];
	}

	// type and category doesn't need to bre validated.
	$type = $_POST['type'];
	$category = ($type=="0")?0:$_POST['category'];

	if($isValidData==1){
		//$type denotes currently active radio button (i.e. primary page/category).
		
		// to check whether type remains as category and category hasn't changed.
		// (($type=="1" && strval($category)==strval($result['category']))
		
		// to check whether current type is a primary page it was so when it was loaded.
		// (strval($result['category'])=="0" && $type=="0")
		// debug:echo"$category::$type";
		if($title==$result['title'] && $content==$result['content'] && (strval($result['category'])=="0" && $type=="0")){
			
			$info = $info."It appears that you haven't made any changes to the page.";
		}
		else if($title==$result['title'] && $content==$result['content'] && strval($category)==strval($result['category']) && $type=="1"){
			$info = $info."It appears that you haven't made any changes to this category page.";
		}else{
			if($db->query("update view set title='$title', content='$content', category=$category where id=$id") > 0){
				$info = "The page was updated succesfully.";
			}
		}
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<title>Edit Page</title>
	<link rel="stylesheet" type="text/css" href="../../../includes/dashboard.css"/>
</head>

<body>
<div style="padding: 4px;font-size: 24px;margin: 0.5em auto;width: 1000px;"><h2>Edit Page</h2></div>

<div id="container">
	<div id="info_panel"><?php echo "$info"; ?></div>

	<form style="<?php if($isViewable==0){ echo"display:none";} ?>" name="page_create_form" method="post">
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
			if($row['id']==$category){
				echo "<option selected value=\"{$row['id']}\">{$row['name']}</option> ";
			}else{
				echo "<option value=\"{$row['id']}\">{$row['name']}</option> ";
			}
		}
		?>
		</select></div>

		<div style="clear:both"></div>
		<p>Content: <br/>
		<textarea name="content" id="content" cols="100" rows="14" class="input" style="width:97%;"><?php echo "$content";?></textarea>

		<div style="clear:both"></div>
		<input type="submit" name="Update" value="Update" class="button-primary">
	</form>

</div>
</body>
</html>