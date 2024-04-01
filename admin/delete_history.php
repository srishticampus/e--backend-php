<?php

require 'connection.php';
$id=$_GET['id'];
$sql="delete from history where his_id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:view_search_history.php?s=failed");

}
else{
	header("location:view_search_history.php?s=success");
}
?>