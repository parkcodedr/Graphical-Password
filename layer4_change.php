




<?php
session_start();

$msg = "";


			echo $var=$_GET['var'];
                   
			$_SESSION['a1'][3]=$var;
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Graphical User Authentication | Change Layer 4</title>
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

        <script>
function changeIt(img){
var name = img.src;
window.location.href = "layer5_change.php?var=" + name;
}

</script>

		

	
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
									<span class="pull-left"><span class="text"><span class="line"> <strong>Change Sequence: Layer 4|5</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
                                </h4>
                                <a href="logout.php"><button class="btn btn-danger" type="button">Logout</button></a>
                                <hr>
                                <center><?php echo $msg ?></center>
                                <hr>
                                <div class="row">
                                <?php
                                function get_images(){
                                    include_once('db.php');
                                    $img = array();
                                    $sql="SELECT img_url FROM  pass_images";
                                    $result = $db->query($sql);
                                    while($row =$result->fetch_assoc()) {
                                        $img[]=$row;
                                    }
								return $img;
								
                                }
$image = get_images();
shuffle($image);
foreach($image as $img){
    echo '<img src="images/'.$img['img_url'].'" onclick="changeIt(this)" height="100" width="100" >';
}

?>
	
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


