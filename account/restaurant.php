<!DOCTYPE HTML>
<html>
<head>
<title>Cookings4u | My Restaurant</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Coffee-House Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.useso.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->

<!-- do login here-->
<?php
include('../lib/session.php');
?>
<!-- do login ende here -->
</head>

<body>
<!--banner start here-->
<div class="banner-bg">
	<div class="container">
		<div class="header-main">
			<div class="logo">
				<a href="../index.php"><img src="../images/logo.png" alt=""/></a>
			</div>
			<span class="menu"> <img src="../images/icon.png" alt=""/></span>
				<div class="clear"> </div>
			<div class="navg">
				<ul class="res">
					<?php
							echo "<li>Welcome <a href='option.php' title='Go to my Account'>$userName</a></li>";
					?>
					<li><a href="account.php" title="Go to my Account">My Account</a></li>
					<li><a href="login.php?action=logout" title="Log out">Log out</a></li>
				</ul>
				<script>
                                  $( "span.menu").click(function() {
                                                                    $(  "ul.res" ).slideToggle("slow", function() {
                                                                     // Animation complete.
                                                                     });
                                                                     });
		       </script>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
	</div>
<!--banner end here-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">

			</div>
			<div class="contact-bottom">



			</div>
		</div>
	</div>
</div>
<!--contact end here-->

<!--footer start here-->
<div class="footer">
	<div class="footer-main">

		</div>
		<div class="footer-bottom">
			<div class="container">
			<div class="col-md-4 ftr-bottom bgimg-top">
				<h3>Follow Us Here</h3>
				<ul class="imagesprite">
					<li><a class="g" href="#"> </a></li>
					<li><a class="fa" href="#"> </a></li>
					<li><a class="tw" href="#"> </a></li>
					<li><a class="p" href="#"> </a></li>
					<li><a class="y" href="#"> </a></li>
				</ul>
				<h4>Mail us On : <a href="mailto:example@email.com">123example@email.com</a> </h4>
			</div>
			<div class="col-md-4 ftr-bottom">
				<p>Lipsum Street, Cape town, New york.</p>
				<ul class="ftr-navg">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="service.php">Services</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-4 ftr-bottom">
				<p>Call Us:-  10 000 00 0000</p>
				<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>
			<div class="clearfix"> </div>
			<script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear'
									 		};
											*/

											$().UItoTop({ easingType: 'easeOutQuart' });

										});
									</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!--footer end  here-->

</body>
</html>
