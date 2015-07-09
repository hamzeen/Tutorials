<?php
// include the database class
include ('../includes/database.class.php');
$db = new Database;

$view = (isset($_GET['view']) && $_GET['view']>0) ? $_GET['view']: 0;
$title="Page Not Found";
$category=0;$categoryName="";$content = "<p>Sorry, It seems like you are trying view a non-existing page.";

if($view>0){
	//lookup db to see whether the page exists.
	$result = mysql_fetch_array($db->query("select * from view where id='$view'"));
	if($result!=null){
		$content = $result['content'];
		$title = $result['title'];
		if($result['category']>0){
			$result = mysql_fetch_array($db->query("select * from category where id='{$result['category']}'"));
			$category = $result['id'];
			$categoryName = $result['name'];
		}
	}
	//get the category name and set view type['categoryPage']
	//else: type['primaryPage']
}
$next=0;$prev=0;
if($category>0 && $view>0){
	$nextViews = mysql_fetch_array($db->query("select id from view where category={$category} and id > {$view}"));
	if($nextViews!=null && count($nextViews)>0){
		$next= min($nextViews);
	}
	$prevView = mysql_fetch_row($db->query("select MAX(id) from view where category={$category} and id < {$view}"));
	if($prevView[0]!=null){
		$prev= $prevView[0];
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<meta name="viewport" content="height=device-height,width=device-width" />
	<title><?php echo"$title";?></title>
	<link rel="stylesheet" type="text/css" href="../js/fancy.css"/>
	<link rel="stylesheet" type="text/css" href="../global.css"/>
	<link rel="stylesheet" type="text/css" href="../stylep.css"/>
	<link rel="stylesheet" type="text/css" href="../navigation.css"/>
	<link href="../css/swirl.css" rel="stylesheet" type="text/css">

    <link href="../images/favicon.png" rel="Shortcut Icon"/>
    <!--JQuery//-->
	<script src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

    <script src="../js/prototype.js"></script>
    <script src="../js/scriptaculous.js"></script>
    <script src="../js/effects.js"></script>
    <script src="../js/portal.js"></script>

	<script src="../js/swirl.js"></script>
	<script type="text/javascript">
					jQuery(document).ready(function() {
						jQuery(".cards img").fadeTo("slow", 1.0); // This sets the opacity of the thumbs to fade down to 60% when the page loads
						jQuery(".cards").hover(function(){
							jQuery(this).fadeTo("slow", 0.60); // This should set the opacity to 100% on hover
						},function(){
							jQuery(this).fadeTo("slow", 1.0); // This should set the opacity back to 60% on mouseout
						});
						
						jQuery("#gallery img").fadeTo("slow", 1.0);
						jQuery("#gallery img").hover(function(){
							jQuery(this).fadeTo("slow", 0.62);
						},function(){
							jQuery(this).fadeTo("slow", 1.0);
						});
					});
					
					jQuery(document).ready(function() {
						jQuery("#logo").fadeTo("slow", 1.0); // This sets the opacity of the thumbs to fade down to 60% when the page loads
						jQuery("#logo").hover(function(){
							jQuery(this).fadeTo("slow", 0.88); // This should set the opacity to 100% on hover
						},function(){
							jQuery(this).fadeTo("slow", 1.0); // This should set the opacity back to 60% on mouseout
						});
					});
					
					jQuery(document).ready(function(){
						jQuery("#items li").click(function(){
							jQuery("#items li").removeClass("selected");
							jQuery(this).addClass("selected");
						});
					});
					jQuery(document).ready(function(){
						jQuery("#farbwahl div").click(function(){
							jQuery("#farbwahl div").removeClass("aktiv");
							jQuery(this).addClass("aktiv");
							var color = jQuery(this).text();
							jQuery("body").css("background",color+" url('../images/bg_texture.png') center top");
						});
					});
					
		jQuery(document).ready(function() {
			jQuery("a[rel=example_group]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
		});

	</script>
    <script type="text/javascript">
                        var settings 	= {'colright' : ['block-2','block-1']};
                        var options 	= { portal 			: 'columns',
                            editorEnabled 	: true};
                        var data 		= {};
                        var portal;
                        Event.observe(window, 'load', function() {
                            portal = new Portal(settings, options, data);
                        });
    </script>

<script type="text/javascript">
jQuery(document).ready(function(){
	// Hiding all the testimonials, except for the first one.
	jQuery('#testimonials li').hide().eq(0).show();
	
	// recursive function to loop through the testimonials
	(function showNextTestimonial(){
		// Wait for 7.5 seconds and hide the currently visible testimonial:
		jQuery('#testimonials li:visible').delay(7500).fadeOut('slow',function(){
			// Move it to the back:
			jQuery(this).appendTo('#testimonials ul');
			// Show the next testimonial:
			jQuery('#testimonials li:first').fadeIn('slow',function(){
				showNextTestimonial();
			});
		});
	})();
});
</script>
</head>

<body>

<div id="wrapper2">
<div id="wrapper"></div>

	
	<div style="height: 150px;" id="header">	
		<div class="wrap">
			<?php
				include('../inner_nav_menu.inc');
				if($category>0){
					getMenu($category,0);
				}else{
					getMenu(0,$view);
				}
			?>
			
			<div id="logo" style="margin-left: 5%;margin-top: 28px; float: left;">
				<!--<div style="position:absolute; width:200px; height: 85px; background:#becedf;opacity:0.80%">
				</div>//-->
				<img style="position:relative; width:190px; padding:5px;" src="../logos/logo_alliance.png"/>
			</div>
			
		
			<div id="farbwahl">
				<div class="element grau" style=" "><a href="#">#4e4e4e</a></div>
				<div class="element gruen" style=" "><a href="#">#56b056</a></div>
				<div class="element tuerkis" style=" "><a href="#">#65aba6</a></div>
				<div class="element blau schatten" style=" "><a href="#">#5294b1</a></div>
				<div class="element violett" style=" "><a href="#">#734567</a></div>
				<div class="element rot" style=" "><a href="#">#c14826</a></div>
				<div class="element braun aktiv" style=" "><a href="#">#7d5b3c</a></div>
			</div>
		</div>
	</div>

<!--slider start//-->
		<div class="clear"></div>
<!--slider end//-->

<!--start of columns//-->
<div id="columns">

<div id="colLeft">

<div class="leftBoxInner">
	<h1 class="title"><?php echo"$title";?></h1>
	<?php echo "$content";?>
	
	<?php
		if($next>0 || $prev>0){
			echo "<div style='clear:both; width:98%; margin-top:90px; margin-right:auto; margin-left:auto;'>";
			if($prev>0 && $next>0){
				echo "<div class='next_page' style='float:left;'><a href='?view=$prev'><img valign='bottom' src='../img/prev.png'>&nbsp; Previous</a></div>";
				echo "<div class='prev_page' style='float:right;'><a href='?view=$next'>Next &nbsp;<img valign='bottom' src='../img/next.png'></a></div>";
			}
			else if($prev>0){
				echo "<div class='next_page' style='float:left;'><a href='?view=$prev'><img valign='bottom' src='../img/prev.png'>&nbsp; Previous</a></div>";
			}else{
				echo "<div class='prev_page' style='float:right;'><a href='?view=$next'>Next &nbsp;<img valign='bottom' src='../img/next.png'></a></div>";
			}
			echo"</div>";
		}
	?>
</div></div>

<!--start of column right//-->
<div id="colright" class="column menu">
<div class="block" id="block-2">
	<div class="rightBoxInner">
		<h2 class="draghandle">Recent Posts</h2>
		<ul>
		<?php
			$recent = "";
			$queryStr = "select * from view where id!=$view order by id desc";
			$count = mysql_num_rows($db->query($queryStr));
			if($count>0){
				$size = ($count >= 5) ? 5: $count;
				$rows = $db->query($queryStr);
				for($i=0;$i<$size;$i++){
					$row = mysql_fetch_array($rows);
					$recent = $recent."<li><a title='{$row['title']}' href='?view={$row['id']}'>{$row['title']}</a></li>";
				}
				echo "$recent";
			}else{
				echo "<p>Sorry, There aren't any posts added yet.</p>";
			}
		?>

		</ul>
</div></div>

<div class="block" id="block-1">
	<div class="rightBoxInner">
		<h2 class="draghandle">Related</h2>
		<ul>
		<?php
			$related = "";
			$queryStr = "select * from view where category=$category and id!=$view";
			$count = mysql_num_rows($db->query($queryStr));
			if($count>0){
				$size = ($count >= 5) ? 5: $count;
				$rows = $db->query($queryStr);
				for($i=0;$i<$size;$i++){
					$row = mysql_fetch_array($rows);
					$related = $related."<li><a title='{$row['title']}' href='?view={$row['id']}'>{$row['title']}</a></li>";
				}
				echo "$related";
			}else{
				echo "<p>Sorry, Related pages aren't available at this moment.</p>";
			}
		?>
		</ul>
</div></div>
</div><!--end of column right//-->

<div class="clear"></div>
</div><!--end of columns//-->
	<div style="clear: both;"></div>
	
	<!-- #footer -->
	<div id="footer">
	<div style='float:left; margin-left:12px;width:340px;' id='featured_work'>
		<p class="footerHeads">RECENT WORK
		<ul id="listticker">
			<li style="display: block; ">
				<img src="http://hamzeen.com/incubation/gallery/001/002_s.jpg">
				<a href="?view=9" class="news-title">Hayleys</a>
				<span class="news-text">A leading consumer electronics vendor in Sri Lanka</span></li>
			<li style="display: block; ">
				<img src="http://hamzeen.com/incubation/gallery/002/002_s.jpg">
				<a href="?view=10" class="news-title">First Guardian Equties</a>
				<span class="news-text">A premier stock brokerage house</span></li>
			<li style="display: block; ">
				<img src="http://hamzeen.com/incubation/gallery/002/005_s.jpg">
				<a href="#" class="news-title">Board of Investment of Sri Lanka</a>
				<span class="news-text">The investment promotion agency of the Government of Sri Lanka</span></li>
		</ul>
	</div>
	<div style='float:left; width:300px;' id='enquiries'>
		<p class="footerHeads">REACH US
		<p style="margin:5px; margin-top: 20px;text-align:left;font: 1.3em 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
		color: #C0D0D0;text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 2px 6px rgba(0, 0, 0, 0.2);">
		"Alliance House", No 84, Ward Place,<br/>
		Colombo 07, Sri Lanka.<br/><br/>
		Phone: (+94) 112 67 3673<br/>
		Fax: (+94) 112 50 6069<br/><br/>
		<a target='_blank' href='../contact/'>Click here for enquiries & directions</a><br></p>
	</div>
	<div style='float:left; width:312px; margin-bottom:10px;' id='client'>
		<p class="footerHeads">CLIENTS 
		<ul id="logos" class="menu" style="overflow-x: hidden; overflow-y: hidden;">
			<li id="menu-item">
				<a href="#" style="top: 0px;"><img height='30px' src='../logos/unilever_gray.png'></a>
				<a title='Unilever' href="#" style="top: 0px;"><img height='30px' src='../logos/unilever_gray.png'></a></li>
			<li id="menu-item">
				<a href="#" style="top: 0px;"><img height='30px' src='../logos/ntb_gray.png'></a>
				<a title='Nations Trust Bank' href="#" style="top: 0px;"><img height='30px' src='../logos/ntb_gray.png'></a></li>
			<li id="menu-item">
				<a href="#" style="top: 0px;"><img height='30px' src='../logos/ifrc_gray.png'></a>
				<a title='Red Cross' href="#" style="top: 0px;"><img height='30px' src='../logos/ifrc_gray.png'></a></li>
			<li id="menu-item">
				<a href="#" style="top: 0px;"><img height='30px' src='../logos/virtusa_gray.png'></a>
				<a title='Virtusa' href="#" style="top: 0px;"><img height='30px' src='../logos/virtusa_gray.png'></a></li>
		</ul>
		
	</div>

	<div id='credits'>
		<div id='social' style='float:left; width:432px;margin-top:10px;margin-left:12px'>
			FOLLOW US: 
			<ul id='social_icons'>
				<li><a href='#'><img height='24px' src='../img/facebook.png'/></a></li>
				<li><a href='#'><img height='24px' src='../img/twitter.png'/></a></li>
				<li><a href='#'><img height='24px' src='../img/mail.png'/></a></li>
			</ul>
		</div>
		<div  id='copyright'>
			©2012 Alliance Tech Trading (pvt) Ltd. | Designed by Hemsidar Solutions
		</div>
	</div>
	</div><!-- #footer -->
	
</div>
</body></html>
