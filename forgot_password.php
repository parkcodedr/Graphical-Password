

<?php

include_once('db.php');
$msg = "";
if(isset($_POST['submit'])){
	@session_start();

            $email=$db->real_escape_string(trim($_POST['email']));
            if(empty($email)){
                $msg.="<font color='red'>Please Enter your Email</font> ";
            }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $msg.="<font color='red'>Invalid Email</font> ";
            }else{

            
			//$password=$db->real_escape_string(trim($_POST['password']));
			$query="select email from user where email='$email'" ;
			$result=$db->query($query);
			if($result->num_rows>0){
                $msg.="<font color='green'>Recovery link sent to:  ".$email."</font> ";
				}else{	
				
				$msg.="<font color='red' size='2px'>Email Address does not exist </font>";

                }
            }

			}

			//else echo '<center>Either you are not registered OR you are not confirmed by admin OR the hunt has not started yet!<br><a href="login.php"><font color="white">Click here to go back</a>';

		

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Graphical User Authentication</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="themes/css/bootstrappage.css" rel="stylesheet"/>
        
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
        <link href="themes/css/main.css" rel="stylesheet"/>
       
		<link href="sweetalert/cdn/sweetalert.min.css" rel="stylesheet">
    <script src="sweetalert/cdn/sweetalert.min.js"></script>
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
        <![endif]-->


		<script>

			
			

			

		</script>

		<noscript>Your Javascript is off !! </noscript>
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
									<li><a href="login.php" style="color: #fff;background-color:#eb4800">Login</a></li>									
									<li><a href="register.php">Register</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Help</a></li>
						</ul>
					</nav>
				</div>
			</section>
			
			
			<section class="main-content">
				<div class="row" style=" margin-left: -20px">
					<div class="span12">													
						<div class="row">
							<div class="" style="width:450px; margin-left:350px; margin-top:70px">
								<h4 class="title ">
									<span class="pull-left"><span class="text"><span class="line"> <strong>Recover Password</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
                                </h4>
                                <div class="col-md-6 offset-4">


		
<form name="login" method="post" onSubmit="return validate();" class="form" >
<p align="">
    <p><center><?php echo $msg ?></center></p>

<span style="font-size:15px; color:#eb4800"><strong>Email :</strong><span> <br>
<input type ="text" name="email" class="form-control " style="width:436px" placeholder="Please Enter your Email Address"><br>
<!-- <strong>Password  :</strong><br>
<input type="password" name="password" class="form-control" style="width:436px"><br> -->
<input type="submit" value="Submit" name="submit" class=" btn-block col-md-8" style="height:36px;background-color:#eb4800;border-color:#eb4800; border-radius:5px;color:white;font-size:18px">
</p>
</form>
			
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