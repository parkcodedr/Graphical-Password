<?php
session_start();
ob_start();
?>
<html>
<head>
<title>
Successful!!
</title>
<link href="sweetalert/cdn/sweetalert.min.css" rel="stylesheet">
    <script src="sweetalert/cdn/sweetalert.min.js"></script>
</head>
<body> You successfully selected the image sequence ! <br>

<?php
include_once('db.php');	
$_SESSION['layer5']=$_GET['var'];
$name=$_SESSION['uname'];

$layer1=$_SESSION['layer1'];
$layer2=$_SESSION['layer2'];
$layer3=$_SESSION['layer3'];
$layer4=$_SESSION['layer4'];
$layer5=$_SESSION['layer5'];
/*
$layer1lent=strlen($layer1);
$layer1=".".substr($layer1,36,$layer1lent);


$layer2lent=strlen($layer1);
$layer2=".".substr($layer2,36,$layer2lent);

$layer3lent=strlen($layer3);
$layer3=".".substr($layer3,36,$layer3lent);

$layer4lent=strlen($layer4);
$layer4=".".substr($layer4,36,$layer4lent);

$layer5lent=strlen($layer5);
$layer5=".".substr($layer5,36,$layer5lent);

$layer1 = base64_encode(file_get_contents($layer1, true));
$layer2 = base64_encode(file_get_contents($layer2, true));
$layer3 = base64_encode(file_get_contents($layer3, true));
$layer4 = base64_encode(file_get_contents($layer4, true));
$layer5 = base64_encode(file_get_contents($layer5, true));
*/
$layer1 = md5($layer1);
$layer2 = md5($layer2);
$layer3 = md5($layer3);
$layer4 = md5($layer4);
$layer5 = md5($layer5);

$q = "SELECT image1,image2,image3,image4,image5 FROM user_password_images WHERE username='$name'";
	$result=$db->query($q);
		if ($result->num_rows>0){
		$row=$result->fetch_array();
		
		if($row[0]==$layer1 && $row[1]==$layer2 && $row[2]==$layer3 && $row[3]==$layer4 && $row[4]==$layer5)
			
		header('Location:student/');
		else {
		header('Location:layer1_login.php');
		$_SESSION['selectagain']=1;
		}
		}
		



/*$query="INSERT into user(username,password,name,clg,email,phone,image1,image2,image3,image4,image5) 
values('$name','$password','$realname','$collname','$email',$phone,'$image1','$image2','$image3','$image4','$image5')";
$result=mysqli_query($con, $query);*/
?>
</body>
</html>