<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<meta name="viewport" content="height=device-height,width=device-width" />
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="../js/fancy.css"/>
	<!--<link rel="stylesheet" type="text/css" href="../global.css"/>//-->
	<link rel="stylesheet" type="text/css" href="../stylep.css"/>
	<link rel="stylesheet" type="text/css" href="../navigation.css"/>
	<link rel="stylesheet" type="text/css" href="contact.css"/>

    <link href="../images/favicon.png" rel="Shortcut Icon"/>
    <!--JQuery//-->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/slides.min.jquery.js"></script>
	<script src="../js/jquery_fancybox.js"></script>

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
      (function() {
        window.onload = function(){
			// Creating a LatLng object containing the coordinate for the center of the map
          var latlng = new google.maps.LatLng(6.912100,79.864499);  

          // Creating an object literal containing the properties we want to pass to the map
          var options = {  
          	zoom: 17,
          	center: latlng,
          	mapTypeId: google.maps.MapTypeId.ROADMAP
          };  

          // Calling the constructor, thereby initializing the map  
          var map = new google.maps.Map(document.getElementById('map'), options);

          var marker = new google.maps.Marker({
            position: new google.maps.LatLng(6.912134,79.865126), 
            map: map,
            title: 'Alliance Tech Trading Labs',
            clickable: false,
			icon: '../images/marker.png'
          });
      	}

      })();
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
							jQuery("body").css("background",color+" url('../images/bg_texture.png') center top");
						});
					});
	</script>

</head>

<body>

<div id="wrapper2">
<div id="wrapper"></div>
	
	<div style="height: 150px;" id="header">	
		<div class="wrap">
			<?php
				include('../contact_nav_menu.inc');
			?>
			
			<div id="logo" style="margin-left: 5%;margin-top: 28px; float: left;">
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

		<div class="clear"></div>

	<div id="location_wrapper">
		<h2 style="font-size:22px;color:#7dc453">Our Location</h2>
		<div style="margin-top:20px;margin-bottom:10px">
		
		<!-- the map //-->
		<div id="map"></div>
		<div style="margin-top: 20px; float:left; width: 240px">
		<p style="text-align:right;font: 1.3em 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
		color: #C0D0D0;text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 2px 6px rgba(0, 0, 0, 0.2);">"Alliance House"<br/>
		No 84, Ward Place,<br/>
		Colombo 07, Sri Lanka.<br/><br/>
		<!--Email: info [at] alliancetech [dot] lk<br/>//-->
		Phone: (+94) 112 67 3673<br/>
		Fax: (+94) 112 50 6069<br/></p>
		</div>
		<div style="clear:both"></div>
		</div>
		
	</div>
	<hr/>

	<!--0px 1px 10px rgba(0, 0, 0, 0.5)//-->
	<div id="contactme">
			<form method="POST">
				<p class="message">&nbsp;<br/></p>
				<p>
					<label for="name">Name:</label>
					<input type="text" id="name" class="field" />
				</p>
				<p>
					<label for="email">Email Address:</label>
					<input type="text" id="email" class="field" />
				</p>
				<p>

					<label for="subject">What can I help you with?:</label>
					<input type="text" id="subject" class="field" />
				</p>
				<p>
					<label for="budget">Project Budget:</label>
					<select id="budget" class="field">
						<option value="none">None</option>
						<option value="underone">Less than $1,000</option>
						<option value="onetotwo">$1,000 to $2,000</option>
						<option value="twotothree">$2,000 to $3,000</option>
					</select>

				</p>
				<p>
					<label for="message">The Details:</label>
					<textarea id="message" rows="5" cols="100" class="field"></textarea>
				</p>
				<div id="status">
					<div class="button">
						<button id="submit">Submit</button>
					</div>
				</div>

			</form>
	</div>

	<div style="clear: both;">&nbsp;</div>
	
	<!-- #copyright -->
	<div style="background:url(bgFooterWood.jpg)bottom left;" id="footer">

	<div style="clear:both"></div>
        <p style="padding-top: 2px;">&copy;2012 Alliance Tech Trading (pvt) Ltd. | Design by <a href="#">Hemsidar Solutions</a>. valid css3</p>
    </div><!-- #copyright -->
	
</div>
</body></html>
