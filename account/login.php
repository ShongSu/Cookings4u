<!DOCTYPE HTML>
<html>
<head>
<title>Cookings4u | Login</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
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

<script language=JavaScript>
function InputCheck(LoginForm)
{
  if (LoginForm.email.value == "")
  {
    alert("Please input your Email!");
    LoginForm.email.focus();
    return (false);
  }
  if (LoginForm.password.value == "")
  {
    alert("Please input your password!");
    LoginForm.password.focus();
    return (false);
  }
}
</script>

<?php
	error_reporting(0);
  function LoginDiag()
	{
		echo '
		<div class="contact-main">
			<div class="contact-top">
				<h3>Login</h3>
			</div>
			<div class="contact-bottom">
				<div class="contact-bottom-left">
					<form name="LoginForm" method="post" action=""  onSubmit="return InputCheck(this)">
					<p>Email</p>
					<input type="text" name="email" value=""/>
					<p>Password (<a href="./reset.html">Forgot Your Password?</a>)</p>
					<input type="password" name="password" value=""/>
					<p id="new"><a href="./register.html">New User?</a></p>
					<input type="submit" name="submit" value="Sign In">
					</form>
				</div>
			</div>
		</div>';
	}
?>



</head>



<body>

<?php
	session_start();
	//注销登录
	if(isset($_GET['action']) && $_GET['action'] == "logout"){
		unset($_SESSION['email']);
		unset($_SESSION['username']);
  	//	echo "<script language='javascript'> alert('Log out successfully!') </script> ";
		header("personal.php");
	}

	//登录
	if(isset($_POST['submit'])){

	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	//$password = MD5(htmlspecialchars($_POST['password']));
	//包含数据库连接文件

	include('conn.php');
	//检测用户名及密码是否正确
	$check_query = mysql_query("SELECT * from user WHERE email = '$email' AND pwd = '$password' LIMIT 1");
	if($result = mysql_fetch_array($check_query)){


		echo "<script language='javascript'> alert('登陆成功') </script> ";
		//登录成功
		//$_SESSION['Email'] = $username;
		//$resultname=$result['Name'];
		//$resultemail=$result['Email'];
		//$_SESSION['username'] = $resultname;
		//$_SESSION['useremail'] = $resultemail;
		header('Location: ./option.html');
		//$status=$_GET['status'];
		//$id=$_GET['id'];

		} else {
	  		echo "<script language='javascript'> alert('Your User ID or Password is incorrect, Please try again.') </script> ";
		}
		}

	?>
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
					<li><a class="active" href="login.php">Sign In</a></li>
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
			<?php LoginDiag();?>
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
