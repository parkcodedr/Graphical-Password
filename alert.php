<?php
 
include('db.php');

$image_data=file_get_contents('./bag.jpg',true);
$image_data2=file_get_contents('./images/bag.jpg',true);
if($image_data == $image_data2){
    echo "yes";
}
//$encoded_image=base64_encode($image_data);
//$q ="INSERT INTO testimage VALUES(NULL,'$encoded_image')";
//$result = $db->query($q);
$s = "http://127.0.0.1/graphical-user-auth/images/coke.png";
//echo strlen($s);
$lenght =strlen($s);
$url=substr($s,36,$lenght);
echo $url;  
;
$a = "MQ==";

echo base64_decode($a);
 
//$decoded_image=base64_decode($encoded_image);
 //header("Content-Type:image/jpg");
//echo $decoded_image;
 
?>