				<?php
					include('includes/database.class.php');
					$db = new Database;
					echo "<div id=\"mainlinks\">
					<ul id=\"nav\">
						<li><a href='../'>Home</a></li>";
					//load categories
					$categories = $db->query("select * from category");
					while($category = mysql_fetch_array($categories)){
						// only if the category has one or more pages it will be included.
						$pages = $db->query("select * from view where category={$category['id']}");
						if(mysql_num_rows($pages)>0){
							echo "<li><a href='#'>{$category['name']}</a><ul>";
							while($page = mysql_fetch_array($pages)){
								echo "<li><a href='../page/?view={$page['id']}'>{$page['title']}</a></li>";
							}
							echo"</ul></li>";
						}
					}
					// load pages
					$primaryPages = $db->query("select * from view where category=0");
					while($page = mysql_fetch_array($primaryPages)){
						echo "<li><a href='../page/?view={$page['id']}'>{$page['title']}</a></li>";
					}
					echo "<li><a href='../booklet/'>Booklet</a></li>";
					echo "<li class='current'><a href='#'>Contact</a></li>
					</ul></div>";
				?>
