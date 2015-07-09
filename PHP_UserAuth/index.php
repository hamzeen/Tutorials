<!DOCTYPE html>
<html lang="en">
<html><head>
	<title>Alliance Tech Trading</title>
	<meta http-equiv="Cache-Control" content="no-store">
	<meta http-equiv="keywords" content="making offices more fun to work, Office Interiors, Interior Designer, interior designing in Sri Lanka, Alliance Finanace Subsidiary, Furniture, Furniture in Sri Lanka, Alliance Tech Trading" lang="en">
	<meta http-equiv="desription" content="AllianceTech.lk the official corporate portal of Alliance Tech Trading (pvt) ltd. making offices more fun to work" lang="en">
	<meta name="description" content="AllianceTech.lk the official corporate portal of Alliance Tech Trading (pvt) ltd. making offices more fun to work">
	<meta name="keywords" content="Office Interiors, Interior Designer, interior designing in Sri Lanka, Alliance Finanace Subsidiary, Furniture, Furniture in Sri Lanka, Alliance Tech Trading">
	<meta name="Revisit-after" content="2 Days">
	<link rel="stylesheet" type="text/css" href="js/fancy.css"/>
	<link rel="stylesheet" type="text/css" href="css/global.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="navigation.css"/>
	<link rel="stylesheet" type="text/css" href="portals.css"/>
	<link href="css/swirl.css" rel="stylesheet" type="text/css">

    <link href="images/favicon.png" rel="Shortcut Icon"/>
    <!--JQuery//-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery_fancybox.js"></script>

    <script src="js/prototype.js"></script>
    <script src="js/scriptaculous.js"></script>
    <script src="js/effects.js"></script>
    <script src="js/portal.js"></script>

	<!--[if lt IE 7]><script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"></script><![endif]-->		
	<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
	<script src="js/swirl.js"></script>
	<script type="text/javascript">
		jQuery('#promos').cycle({ 
			fx:     'fade', 
			speed:  1000, 
			timeout: 3000,
			pager: '#promo-nav',
			pause: 1,
			height: 300,
			pauseOnPagerHover: 1,
			fastOnEvent: 350,
			next:   '#nxt', 
			prev:   '#prv', 
			pagerAnchorBuilder: function(idx, slide) { 
				return "#promo-nav li:eq("+ idx +") a"; 
			}
		});
	</script>
	<script type="text/javascript">
					
		jQuery(document).ready(function() {
			jQuery(".cards img").fadeTo("slow", 1.0); // This sets the opacity of the thumbs to fade down to 60% when the page loads
			jQuery(".cards").hover(function(){
				jQuery(this).fadeTo("slow", 0.60); // This should set the opacity to 100% on hover
			},function(){
				jQuery(this).fadeTo("slow", 1.0); // This should set the opacity back to 60% on mouseout
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
							jQuery("body").css("background",color+" url('images/bg_texture.png') center top");
						});
					});
	</script>
    <script type="text/javascript">
        var settings 	= {'column-1' : ['block-1'],
							   'column-2' : ['block-2'],
							   'column-3' : ['block-3']};
        var options 	= { portal: 'columns', editorEnabled: true};
        var data 		= {};
        var portal;
        Event.observe(window, 'load', function() {
            portal = new Portal(settings, options, data);
        });
    </script>
	<!-- Analytics //-->
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-30904680-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
</head>

<body>

<div id="wrapper2">
<div id="wrapper"></div>

	
	<div style="height: 150px;" id="header">	
		<div class="wrap">
			<?php
				include('nav_menu.inc');
			?>
			
			<div id="logo" style="margin-left: 5%;margin-top: 28px; float: left;">
				<!--<div style="position:absolute; width:200px; height: 85px; /*background: transparent #748284;*/background:#becedf;opacity:0.80%">
				</div>//-->
				<img style="position:relative; width:190px; padding:5px;" src="logos/logo_alliance.png"/>
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
		<div style="clear: both; margin-right: auto; margin-left: auto; height: 340px; width:938px;">
			<div id="promos" style="position: relative; height: 300px; ">
				<div class="promo" style="position: absolute; top: 0px; left: 0px; width: 938px; height: 300px; z-index: 7; opacity: 0; display: none; ">
					<a href="#">
					<img src="slides/promo01.jpg" alt="1"></a>
				</div>
				<div class="promo hidden" style="position: absolute; top: 0px; left: 0px; width: 938px; height: 300px; z-index: 7; opacity: 0; display: none; ">
					<a href="#">
					<img src="slides/promo02.jpg" alt="2"></a></div>
				<div class="promo hidden" style="position: absolute; top: 0px; left: 0px; width: 938px; height: 300px; z-index: 7; opacity: 0; display: none; ">
					<a href="#">
					<img src="slides/promo03.jpg" alt="3"></a></div>
				<div class="promo hidden" style="position: absolute; top: 0px; left: 0px; width: 938px; height: 300px; z-index: 7; opacity: 0; display: none; ">
					<a href="#">
					<img src="slides/promo04.jpg" alt="4"></a></div>
				<div class="promo hidden" style="position: absolute; z-index: 8; top: 0px; left: 0px; display: block; width: 938px; height: 300px; opacity: 1; ">
					<a href="#">
					<img src="slides/promo05.jpg" alt="5"></a></div>
				<div class="promo hidden" style="position: absolute; top: 0px; left: 0px; width: 938px; height: 300px; z-index: 7; opacity: 0; display: none; ">
					<a href="#">
					<img src="slides/promo06.jpg" alt="6"></a></div>
			</div>

			<div id="promo-nav">
				<ul>
					<li><a href="#" class="">1</a></li>
					<li><a href="#" class="">2</a></li>
					<li><a href="#" class="">3</a></li>
					<li><a href="#" class="">4</a></li>
					<li><a href="#" class="activeSlide">5</a></li>
					<li><a href="#" class="">6</a></li>
					<li id="prv"><a href="#" class="">Previous</a></li>
					<li id="nxt"><a href="#" class="">Next</a></li>
				</ul>
			</div>
		</div>
		<div style="clear:both"></div>
	<!--slider end//-->
	<hr/>
	<div id="columns" style="clear: both; margin-right: auto; margin-left: auto; width:1000px">
		<div id="column-1" class="column menu" style="position: relative; ">
			<div class="block" id="block-1" style="position: relative; ">
				<h1 class="draghandle">What we do ?</h1>
				<p>Alliance Tech Trading was incorporated to create a new vision in interior designing
				by offering professionalism and providing ultimate customer satisfaction. This company,
				makes offices more fun to work in and makes any office atmosphere modern, unique and
				innovative.
				<span style="clear:both;float:right" class="blue">Read More</span></p>
			</div>
		</div>

		<div id="column-2" class="column blocks" style="position: relative; ">
			<div class="block" id="block-2" style="position: relative; ">
				<h1 class="draghandle">Why Alliance tech ?</h1>
				<p>In keeping with our impeccable legacy and bold new vision for furniture in Sri Lanka.
				ALTECH brings you many internationally recognized brands such as "Artak Design",
				"Blue Power" and "Index" from South East Asia which have an inherent reputation in
				design & quality.
				<span style="float:right" class="blue">Read More</span></p>
			</div>
		</div>

		<div id="column-3" class="column sidebar" style="position: relative; ">
			<div class="block" id="block-3" style="position: relative; ">
				<h1 class="draghandle">History</h1>
				<p>a division of Alliance Finance Co PLC, was incorporated in
				1999 on 02nd of August as a Private Limited Liability Company. Alliance Finance Co PLC
				has a history of over five decades. The Alliance Tech Trading office & showroom is at,
				199/ 11, Obeysekara Crescent, Rajagiriya Road, Rajagiriya
				<span style="float:right" class="blue">Read More</span></p>
			</div>
		</div>
	</div>
	
	<div style="clear: both;"></div>
	<div id="footer">
	<div style='float:left; margin-left:12px;width:340px;' id='featured_work'>
		<p class="footerHeads">RECENT WORK
		<ul id="listticker">
			<li style="display: block; ">
				<img src="http://hamzeen.com/incubation/gallery/001/002_s.jpg">
				<a href="page/?view=9" class="news-title">Hayleys</a>
				<span class="news-text">A leading consumer electronics vendor in Sri Lanka</span></li>
			<li style="display: block; ">
				<img src="http://hamzeen.com/incubation/gallery/002/002_s.jpg">
				<a href="page/?view=10" class="news-title">First Guardian Equties</a>
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
		<a target='_blank' href='contact/'>Click here for enquiries & directions</a><br></p>
	</div>
	<div style='float:left; width:312px; margin-bottom:10px;' id='client'>
		<p class="footerHeads">CLIENTS 
		<ul id="logos" class="menu" style="overflow-x: hidden; overflow-y: hidden;">
			<li id="menu-item">
				<a href="#" style="top: 0px;"><img height='30px' src='logos/unilever_gray.png'></a>
				<a title='Unilever' href="#" style="top: 0px;"><img height='30px' src='logos/unilever_gray.png'></a></li>
			<li id="menu-item">
				<a href="#" style="top: 0px;"><img height='30px' src='logos/ntb_gray.png'></a>
				<a title='Nations Trust Bank' href="#" style="top: 0px;"><img height='30px' src='logos/ntb_gray.png'></a></li>
			<li id="menu-item">
				<a href="#" style="top: 0px;"><img height='30px' src='logos/ifrc_gray.png'></a>
				<a title='Red Cross' href="#" style="top: 0px;"><img height='30px' src='logos/ifrc_gray.png'></a></li>
			<li id="menu-item">
				<a href="#" style="top: 0px;"><img height='30px' src='logos/virtusa_gray.png'></a>
				<a title='Virtusa' href="#" style="top: 0px;"><img height='30px' src='logos/virtusa_gray.png'></a></li>
		</ul>
		<p style='text-align:right'>Visits: <?php include("counter.php"); echo "$visits";?>
	</div>

	<div id='credits'>
		<div id='social' style='float:left; width:432px;margin-top:10px;margin-left:12px'>
			FOLLOW US: 
			<ul id='social_icons'>
				<li><a href='#'><img height='24px' src='img/facebook.png'/></a></li>
				<li><a href='#'><img height='24px' src='img/twitter.png'/></a></li>
				<li><a href='#'><img height='24px' src='img/mail.png'/></a></li>
			</ul>
		</div>
		<div  id='copyright'>
			©2012 Alliance Tech Trading (pvt) Ltd. | Designed by Hemsidar Solutions
		</div>
	</div>
	</div>
	
</div></body></html>
