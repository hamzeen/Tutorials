<?php
session_start();
if(!isset($_SESSION['auth'])){
	header("location: ../../index.php");
	exit();
}

// include the database class
include ('../../../includes/database.class.php');
$db = new Database;
$results = mysql_num_rows($db->query("select * from view"));
$info = "";

	if(isset($_GET['rm']) && $_GET['rm']>0){
		if($db->query("delete from view where id={$_GET['rm']}")>0){
			$info = $info."The page was deleted successfully.<br/>";
		}
	}
	
if($results>0){

	$node_per_page = 5;
	$pages = ($results%$node_per_page == 0) ? $results/$node_per_page: floor($results/$node_per_page)+1;
	$curPage = (isset($_GET['page']) && $_GET['page']>0 && $_GET['page']<=$pages) ? ($_GET['page']-1):0;
	$start = $curPage*$node_per_page;
	//$end = ($start + $node_per_page)>$results? $results:($start + $node_per_page);
	
	$hasNext = (($curPage+1)<$pages) ? 1:0;
    $hasPrev = (($curPage && (($curPage+1)<=$pages))>0) ? 1:0;
	$info = $info."Currently showing Page ".($curPage+1)." of ".$pages.". &nbsp; Total Results: ".$results."";


}else{$info="Sorry, there aren't any page to display at this moment. Please try again after creating a page.";}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<title>Manage Pages</title>
	<link rel="stylesheet" type="text/css" href="../../../includes/dashboard.css"/>
	<style>
	a {
		text-decoration: none;
		color: #A99;
		font-size: 14px;
	}
	a:hover {
		color: #DA9868;
	}
	</style>
</head>

<body>
	<div style="padding: 4px;font-size: 24px;margin: 0.5em auto;width: 1000px;">
		<h2>Manage Pages</h2></div>

	<div id="container">
	<div id="info_panel"><?php echo "$info"; ?></div>
	<div style="color: #CFCFCF">
	<?php
	if($results>0) {
		$rows = $db->query("select * from view limit $start, $node_per_page");
		$i=0;
		while ($row = mysql_fetch_array($rows)) {
		//444 fcc ccc #299098 #098C89 @least#989261 @least2#199258 #79787A
			$bgColor = ($i%2==0)?"#325B6D":"#79787A";
			echo "<div style=\"clear:both; background:$bgColor; text-align:center; padding: 5px; margin-top: 6px;\">
				Title: {$row['title']} Category: {$row['category']} 
				<a href=\"../../../page/?view={$row['id']}\">Preview</a> 
				<a href=\"../edit/?view={$row['id']}\">Edit</a> 
				<a href=\"?page=".($curPage+1)."&rm={$row['id']}\" onclick=\"return confirm('Are you sure, you want to delete?');\">Delete</a> </div>";
			$i++;
		}
		
		echo "<div style=\"clear:both;margin-top: 9px;margin-bottom: 3px;\">";
		if($hasPrev==1 && $hasNext==1){
			echo "<a href='?page=".($curPage)."'>Prev</a> | ";
		}else if($hasPrev==1){
			echo "<a href='?page=".($curPage)."'>Prev</a>";
		}
		if($hasNext==1)
			echo "<a href='?page=".($curPage+2)."'>Next</a><br/>";
		echo "</div>";
	}
	?>
	</div>
</div>
</body></html>