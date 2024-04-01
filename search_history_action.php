<?php
include_once('connection.php');
session_start();
date_default_timezone_set('Asia/Kolkata');
$id=$_SESSION['user'];
$topic=$_POST['topic'];
$output = array();
$currentTime = date( 'h:i a', time() );
$currentDate = date('Y/m/d');
$sql="select * from history where topic_name LIKE '%$topic%'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
 $row = $result->fetch_assoc();
 $topic_id=$row['topic_id'];
	// $sq="insert into history (user_id,his_date,his_time,topic_name,topic_id)values($id,'$currentDate','$currentTime','$topic','$topic_id')";
	// $res=$con->query($sq);
	// $co=$con->affected_rows;


//echo substr($content,0,$pos ); 
  				$output['topic_name'] =substr($row['topic_name'],0,50 );
          $output['topic_id'] = $row['topic_id'];
          $output['his_date']=$row['his_date'];
          $output['his_time']=$row['his_time'];
  			}
  		else{
  			  $output = 'Topic not Found';
  		}
  		
	  
	  
echo json_encode($output);
?>