<?php
require 'connection.php';
$id=$_GET['id'];
$sql="delete from topics where topic_id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:view_topic_details.php?s=Failed");
}
else{
	header("location:view_topic_details.php?s=success");
}

?>