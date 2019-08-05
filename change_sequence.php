		
<?php

@session_start();
if($_SESSION['uname']==""){
	header('location:login.php');
}
include_once('db.php');
$msg = "";
$username=$_SESSION['uname'];
echo $image1=md5($_SESSION['a1'][1]);
echo $image2=md5($_SESSION['a1'][2]);
echo $image3=md5($_SESSION['a1'][3]);
echo $image4=md5($_SESSION['a1'][4]);
echo $image5=md5($_SESSION['a1'][5]);



$query1="UPDATE user_password_images set image1='$image1',image2='$image2',image3='$image3',image4='$image4',image5='$image5' where username='$username'";

$result=$db->query($query1);

$msg = "<font color='green'size='3px'>Sequence Changed Successfully</font>";

$_SESSION['a'][1]=$image1;
$_SESSION['a'][2]=$image2;
$_SESSION['a'][3]=$image3;
$_SESSION['a'][4]=$image4;
$_SESSION['a'][5]=$image5;

?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Graphical User Authentication | Change Layer 5</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="themes/css/bootstrappage.css" rel="stylesheet"/>
        
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
        <link href="themes/css/main.css" rel="stylesheet"/>
       

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
        <![endif]-->

        
	</head>
    <body>		
		<div id="top-bar" class="container">
			<p ><img src="themes/images/carousel/b2.jpg" alt="" height="50px" width="50px"><h3 style="color:#eb4800; margin-top: -41px; margin-left:49px;">GRAPHICAL USER AUTHENTICATION SYSTEM</h3></p>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					
					<nav id="menu" class="pull-right">
						<ul>			
									
									<li><a href="index.php">Home</a></li>				
									<li><a href="login.php">Login</a></li>									
									<li><a href="register.php">Register</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Help</a></li>
						</ul>
					</nav>
				</div>
			</section>
			
			
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="" style=" margin-left:50px; margin-top:20px">
								<h4 class="title ">
									<span class="pull-left"><span class="text"><span class="line"> <strong>Change Sequence:</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
                                </h4>
								<center><?php echo $msg ?></center>
                                
                                <a href="student/index.php"><button class="btn btn-danger" type="button">Dashboard</button></a>
                                <hr>
                                
                                <div class="row">
                                
	
</div>
			
							</div>						
						</div>
						<br/>
										
				</div>
			</section>
			
			<section id="footer-bar">
				<div class="row">
					
					
					<div class="span5">
						
						<p> Great User Experience.</p>
						<br/>
						
					</div>					
				</div>	
			</section>
			
			<section id="copyright">
				<span>Copyright Okwori Oche Sunday  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>


