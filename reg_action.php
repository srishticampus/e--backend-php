<?php
require 'connection.php';
date_default_timezone_set('Asia/Kolkata');
$name=$_POST['nme'];
$email=$_POST['eml'];
$phone=$_POST['ph'];
$qualification=$_POST['qualification'];
$pass=$_POST['pass'];
$currentTime = date( 'h:i a', time() );
$currentDate = date('Y/m/d');
$sql="insert into user_registration(name,email,phone,qualification,password,date,time) values('$name','$email','$phone','$qualification','$pass','$currentDate','$currentTime')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	echo 1;
}
else{
	echo 0;
}
?>