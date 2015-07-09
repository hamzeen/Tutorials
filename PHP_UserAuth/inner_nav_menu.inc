<?php
function getMenu($categoryId,$pageId){
$dbNav = new Database;
	echo "<div id=\"mainlinks\">
			<ul id=\"nav\">
				<li><a href='../'>Home</a></li>";
				
				//load categories
				$categories = $dbNav->query("select * from category");
				while($category = mysql_fetch_array($categories)){
					// only if the category has one or more pages it will be included.
					$pages = $dbNav->query("select * from view where category={$category['id']}");
					if(mysql_num_rows($pages)>0){
						if($categoryId>0 && $categoryId==$category['id']){
							echo "<li class='current'><a href='#'>{$category['name']}</a><ul>";
						}else{
							echo "<li><a href='#'>{$category['name']}</a><ul>";
						}
						while($page = mysql_fetch_array($pages)){
							echo "<li><a href='?view={$page['id']}'>{$page['title']}</a></li>";
						}
						echo"</ul></li>";
					}
				}
			// load pages
			$primaryPages = $dbNav->query("select * from view where category=0");
			while($page = mysql_fetch_array($primaryPages)){
				if($pageId>0 && $pageId==$page['id']){
					echo "<li class='current'><a href='?view={$page['id']}'>{$page['title']}</a></li>";
				}else{
					echo "<li><a href='?view={$page['id']}'>{$page['title']}</a></li>";
				}
			}
			echo "<li><a href='../booklet/'>Booklet</a></li>";
			echo "<li><a href='../contact/'>Contact</a></li>
					</ul></div>";
}
?>
