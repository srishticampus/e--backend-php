<?php
	
	// include database connection file

	include_once "connection.php";

	// autocomplete textbox jquery ajax in PHP
	
	if (isset($_POST['topic'])) {

  		$output = "";
  		$city = $_POST['topic'];
  		$query = "SELECT * FROM topics WHERE topic_name LIKE '%$city%'";
  		$result = $con->query($query);

  		$output = '<ul class="list-unstyled">';		

  		if ($result->num_rows > 0) {
  			while ($row = $result->fetch_array()) {
  				$output .= '<li>'.ucwords($row['topic_name']).'</li>';
  			}
  		}else{
  			  $output .= '<li> Topic not Found</li>';
  		}
  		
	  	$output .= '</ul>';
	  	echo $output;
	}

?>