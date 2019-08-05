



<?php
@session_destroy();
session_start();
ob_start();

$msg = "";

include_once('db.php');
	if(isset($_POST['submit'])){
			$username=$db->real_escape_string(trim($_POST['name']));
			//$password=$db->real_escape_string(trim($_POST['password']));
			$collname=$db->real_escape_string(trim($_POST['collname']));
			$email=$db->real_escape_string(trim($_POST['email']));
			$phone=$db->real_escape_string(trim($_POST['phone']));
			$realname=$db->real_escape_string(trim($_POST['realname']));

			$result=$db->query("select * from user where username='$username'");

			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$msg.="<font color='red'size='3px'>Invalid Email Address</font>";
			}else if (mysqli_num_rows($result)>0){

					$msg.="<font color='red'size='2px'>The username is already registered ! Please use a different username !</font>";
					}else{

					$result=mysqli_query($con,"select * from user where email='$email'");

					if (mysqli_num_rows($result)>0){

                        $msg.="<font color='red'size='2px'>The Email is already registered ! Please use a different Email !</font>";

                    }else{
                

					

					$_SESSION['a'][0]=$username;

					$_SESSION['a'][1]=$password;

					$_SESSION['a'][2]=$realname;

					$_SESSION['a'][3]=$collname;

					$_SESSION['a'][4]=$email;

					$_SESSION['a'][5]=$phone;

					header('Location:layer1_regi.php');


            }
        }
    }

						
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
		
		<script src="sweetalert/cdn/sweetalert.min.js"></script>
		<link href="sweetalert/cdn/sweetalert.min.css" rel="stylesheet">
       

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

			function validate(){
			var name=document.forms["signup"]["name"].value;
			var password=document.forms["signup"]["password"].value;
			var collname=document.forms["signup"]["collname"].value;
			var email=document.forms["signup"]["email"].value;
			var phone=document.forms["signup"]["phone"].value;
			var realname=document.forms["signup"]["realname"].value;

			if ((realname==null || realname=="")|| (name==null || name=="") || (collname==null || collname=="") || (email==null || email=="") 
			|| (phone==null || phone=="")){
				swal("Filds are empty", "Please fill in the empty fields", "warning");
				return false exit;
			}
			if(name.length<4){
				swal("Name must not be less than 4 characters", "Please fill again", "danger");return false;
				}
			if(phone.length!=11){
				alert("Phone number must be exactly of 11 digits !\nPlease enter again !");return false;

				}
			else

			return true;

			}
			function test(){
				var name=document.forms["signup"]["name"].value;
				if(name.length<4)
				{
				alert('Please enter name not less than 4 characters  !');
				}
				}

				function test2(){
				var password=document.forms["signup"]["password"].value;
				var repassword=document.forms["signup"]["repassword"].value;
				if(password!=repassword){
				alert("Passwords do not match !\nPlease provide the same password !");return false;
				}
				}

				function test3(){
				var phone=document.forms["signup"]["phone"].value;
				if(phone.length!=11){
				alert("Phone number must be exactly of 11 digits !\nPlease enter again !");return false;
				}

				}

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
									<li><a href="login.php">Login</a></li>									
									<li><a href="register.php" style="color: #fff;background-color:#eb4800">Register</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Help</a></li>
						</ul>
					</nav>
				</div>
			</section>
			
			
			<section class="main-content">
				<div class="row" style="margin-left:-9; color:#eb4800">
					<div class="span12">													
						<div class="row">
							<div class="" style="width:450px; margin-left:350px; margin-top:70px">
								<h4 class="title ">
									<span class="pull-left"><span class="text"><span class="line"> <strong>Registration</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
                                </h4>
                                <div class="col-md-6 offset-4">


                                <center><?php echo $msg  ?></center>
                                <form name="signup" action="" method="post" onSubmit="return validate();">

<p align="right">

<strong><span style="font-size:15px">Username:</span> </strong>
<input type ="text" name="name" onBlur="test();" class="form-control" style="width:336px" value="<?php if(isset($username)){echo $username;} ?>"><br>
<!--
<strong><span style="font-size:15px">Password:</span> </strong>
 <input type="password" name="password" style="width:336px"><br> -->

 <strong><span style="font-size:15px">FullName:</span> </strong>
 <input type ="text" name="realname"  style="width:336px" value="<?php if(isset($realname)){echo $realname;} ?>"><br>

 <strong><span style="font-size:15px">Department:</span> </strong>
 <input type ="text" name="collname"  style="width:336px"value="<?php if(isset($collname)){echo $collname;} ?>"><br>
 

 <strong><span style="font-size:15px">Email:</span> </strong> 
 <input type ="text" name="email"  style="width:336px" value="<?php if(isset($email)){echo $email;} ?>"><br>

 <strong><span style="font-size:15px">Phone:</span> </strong>
 <input type ="number" name="phone" onBlur="test3();"  style="width:336px" value="<?php if(isset($phone)){echo $phone;} ?>"><br>

All Fields are compulsory

<input type="submit" value="Signup" name="submit" class="btn-block" style="height:36px;background-color:#eb4800;border-color:#eb4800; border-radius:5px;color:white;font-size:18px">

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

