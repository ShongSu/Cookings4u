<!DOCTYPE HTML>
<html>
<head>
<title>Cookings4u | Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Coffee-House Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.useso.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->

<?php
error_reporting(0);
session_start();


  include('conn.php');
  //$userid = $_SESSION['Id_User'];
  //$name = $_SESSION['username'];

//echo $name;

?>

</head>
<body>
<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });

			    });
			  </script>
<!--banner start here-->
<div class="banner">
  <div class="banner-bg">
	<div class="container">
		<div class="header-main">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			</div>
			<span class="menu"> <img src="images/icon.png" alt=""/></span>
				<div class="clear"> </div>
			<div class="navg">
				<ul class="res">
					<li><a href="./account/login.php">Sign In</a></li>
					<!-- <li><a href="service.html">Services</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li> -->
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
	<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <div class="banner-main">
			          	<div class="banner-contant" >
						  	<h3>Coffee Makes Good Day</h3>
						  	<P>Aliquam erat volutpat. Suspendisse congue massa quisenim lectus tempor.<br> Duis sit amet efficitur and web page editors now use Lorem </P>
					    </div>
					  </div>
			        </li>
			        <li>
			          <div class="banner-main-two">
					  	<div class="banner-contant" >
						  	<h3>Day With Start Good Coffee</h3>
						  	<P>as opposed to using 'Content here, content here', making it look like readable English.<br> Many desktop publishing packages and web page editors now use Lorem </P>
					    </div>
					  </div>
			        </li>
			        <li>
			          <div class="banner-main-three">
					  	<div class="banner-contant" >
						  	<h3>Coffee House</h3>
						  	<P>as opposed to using 'Content here, content here', making it look like readable English.<br> Many desktop publishing packages and web page editors now use Lorem </P>
					    </div>
					  </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
	  			<!--banner Slider Ends Here -->
</div>
<!--banner end here-->
<!--cafe start here-->
<div class="coff">
	<div class="container">
		<div class="coff-main">
				<div class="col-md-4 coff-top-grid1">
				 <div class="coff-top-gridmater">
					<p>01</p>
					<h3>Cream Coffee</h3>
				  </div>
				</div>
				<div class="col-md-4 coff-top-grid2">
				   <div class="coff-top-gridmater">
					<p>02</p>
					<h3>Cappuccino</h3>
				  </div>
				</div>
				<div class="col-md-4 coff-top-grid3 black">
			       <div class="coff-top-gridmater">
					<p>03</p>
					<h3>Black Coffee</h3>
				  </div>
				</div>
			   <div class="clearfix"> </div>
	   </div>
   </div>
</div>
<!--cafe end here-->
<!--cafe info start here-->
<div class="cafe-info">
	<div class="container">
		<div class="cafeinfo-main">
				 <div class="col-md-4 coff-middle-left">
				 	<img src="images/lv-cup.jpg" alt=""/>
				 	<div class="coff-mdleft-matter">
				 		<h3>randomised words<br> which don't look<br>even slightly</h3>
				 	  <div class="coff-bwn">
				 		<a href="#"> GO-ON</a>
				 	  </div>
				 	</div>
				 	<div class="clearfix"> </div>
				 </div>
				 <div class="col-md-8 coff-middle-right">
				    <div class="coff-middle-top">
				    	 <h3>Our Specials</h3>
				    </div>
				  <div class="coff-middle-grids-main">
				    <div class="coff-middle-grid">
				        <div  class="coff-icons"> <img src="images/cafe-machion.png" alt=""/> </div>
				        <div class="middle-right-text">
					    	<h4>Many desktop publishing packages</h4>
					    	<p>Aliquam erat volutpat. Suspendisse congue massa quisenim sollicitudin, in pharetra lectus tempor. Duis sit amet efficitur mi. </p>
				        </div>
				       <div class="clearfix"> </div>
				    </div>
				    <div class="coff-middle-grid">
				    	<div  class="coff-icons"> <img src="images/dram.png" alt=""/> </div>
				    	 <div class="middle-right-text">
					    	<h4>Paper desktop publishing packages</h4>
					    	<p>Aliquam erat volutpat. Suspendisse congue massa quisenim sollicitudin, in pharetra lectus tempor.</p>
				         </div>
				       <div class="clearfix"> </div>
				    </div>
				    <div class="coff-middle-grid">
				    	<div  class="coff-icons"> <img src="images/coff-key.png" alt=""/> </div>
				    	<div class="middle-right-text">
					    	<h4>Nthing desktop publishing packages</h4>
					    	<p>Aliquam erat volutpat. Suspendisse congue massa quis</p>
				    	</div>
				      <div class="clearfix"> </div>
				    </div>
				 </div>
			  <div class="clearfix"> </div>
			  </div>
			  <div class="clearfix"> </div>
			</div>
	  </div>
</div>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
<!--cafe info end here-->
<!--grines start here-->
<div class="grines">
	<div class="container">
		<div class="grines-main">
			<div class="grines-grid1 bg-one">
			  <div class="grines-text">
				<div class="coffee"> <img src="images/food.png" alt=""/> </div>
				<h3>Tasty Food</h3>
			  </div>
			</div>
			<div class="grines-grid1 bg-two">
			  <div class="grines-text">
				<div class="coffee cof-smal"> <img src="images/gd2.png" alt=""/> </div>
				<h3>Coffee</h3>
			  </div>
			</div>
			<div class="grines-grid1 bg-three">
				<div class="grines-tetx">
				 	<div class="coffee"><img src="images/gam.png" alt=""/> </div>
					<h3>Games</h3>
			    </div>
			</div>
			<div class="grines-grid1 bg-four">
				<div class="grines-text">
				  <div class="coffee"> <img src="images/mus.png" alt=""/> </div>
				  <h3>Music</h3>
				</div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--grines end here-->
<!--chief grid start here-->
<div class="chief-banner">
	<div class="container">
		<div class="chief-banner-main">
			<h3>Our Team</h3>
			<div class="chief-grid">
				<div class="col-md-4 chies">
					 <img src="images/cf1.png" alt=""/>
					 <h4>John Spall</h4>
				</div>
				<div class="col-md-4 chies">
					 <img src="images/cf2.png" alt=""/>
					 <h4>Olievia smi</h4>
				</div>
				<div class="col-md-4 chies">
					 <img src="images/cf3.png" alt=""/>
					 <h4>Emma laha</h4>
				</div>
			   <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--chief grid end here-->
<!--map start here-->
<div class="map">

</div>
<!--map end here-->
<!--footer start here-->
<div class="footer">
	<div class="footer-main">
		<div class="container">
		   <div class="footer-top">
			   <div class="ftr-img"> <img src="images/ftr-contact.png" alt=""/> </div>
				<div class="sub">
					<input type="text" value="Enter email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter email';}"/>
					<input type="submit" value="Submit">
				</div>
				<div class="clearfix"> </div>
				<div class="para">
					<p>Subscribe for New Letter</p>
				</div>
				<div class="clearfix"> </div>
					</div>
				</div>
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
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="service.html">Services</a></li>
					<li><a href="contact.html">Contact</a></li>
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
