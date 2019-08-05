<?php
session_start();
ob_start();


?>
</html>
<?php
$msg = "";
include_once('db.php');		

$var=$_GET['var'];
$_SESSION['a'][10]=$_GET['var'];
$name=$_SESSION['a'][0];
$password=$_SESSION['a'][1];
$realname=$_SESSION['a'][2];
$collname=$_SESSION['a'][3];
$email=$_SESSION['a'][4];
$phone=$_SESSION['a'][5];

$image1=($_SESSION['a'][6]);
$image2=($_SESSION['a'][7]);
$image3=($_SESSION['a'][8]);
$image4=($_SESSION['a'][9]);
$image5=($_SESSION['a'][10]);
$image1 = md5($image1);
$image2 = md5($image2);
$image3 = md5($image3);
$image4 = md5($image4);
$image5 = md5($image5);
/*
$image1lent=strlen($image1);
$image1=".".substr($image1,36,$image1lent);


$image2lent=strlen($image2);
$image2=".".substr($image2,36,$image2lent);

$image3lent=strlen($image3);
$image3=".".substr($image3,36,$image3lent);

$image4lent=strlen($image4);
$image4=".".substr($image4,36,$image4lent);

$image5lent=strlen($image5);
$image5=".".substr($image5,36,$image5lent);

$image1 = base64_encode(file_get_contents($image1, true));
$image2 = base64_encode(file_get_contents($image2, true));
$image3 = base64_encode(file_get_contents($image3, true));
$image4 = base64_encode(file_get_contents($image4, true));
$image5 = base64_encode(file_get_contents($image5, true));

*/
$query="INSERT INTO user(`username`,`name`,clg,email,phone,userimage)
values('$name','$realname','$collname','$email','$phone','images/user.png')";
$q = "INSERT INTO user_password_images (`username`,`image1`,`image2`,`image3`,`image4`,`image5`)
VALUES('$name','$image1','$image2','$image3','$image4','$image5')";
$result=$db->query($query);



if($result){
	$r2 = $db->query($q);
	if($r2){
		$msg.="<font color='green'>You have been registered successfully! Please <a href='login.php'> Login</a></font>";
		
	}else{
		$msg.="<font color='red'> Oopss! Registration Failed Try Again</font>".$db->error;
	}
   
}else{
    $msg.="<font color='red'> Oopss! Registration Failed Try Again</font>".$db->error;
}

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Graphical User Authentication | Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		<link href="sweetalert/cdn/sweetalert.min.css" rel="stylesheet">
        
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
        <link href="themes/css/main.css" rel="stylesheet"/>
       

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="sweetalert/cdn/sweetalert.min.js"></script>
		

		

	
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
									<span class="pull-left"><span class="text"><span class="line"> <strong>FINAL STEP</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
                                </h4>
                                <div class="row">

<center>
<?php echo $msg." ";?></center>
<div class="space" style="margin-bottom:300px;">

</div>


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



