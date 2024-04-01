<?php
require 'connection.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$desc=$_POST['desc'];
	$right=$_POST['right'];
	$uploaddir = 'uploads/';
$uploadfile="";
	for($i=0; $i<=count($_FILES['image']['name']); $i++)
    {
    // $attachment[$i] = $_FILES['client_attachment']['name']; 
     $uploadfile = $uploaddir . basename($_FILES['image']['name'][$i]);

move_uploaded_file($_FILES['image']['tmp_name'][$i], $uploadfile);
    }

	$sql="INSERT INTO `topics`(`topic_name`, `description`,`image`,`right_main`) VALUES ('$name','$desc','$uploadfile','$right')";
	$result=$con->query($sql);
	$count=$con->affected_rows;
	if($count>0){
		header("location:add_topic.php?success");
	}
	else{
		//echo $sql;
		header("location:add_topic.php?failed");
	}
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   

    <title>E-Learning</title>
  </head>

  <body>
    <h1>Add Topic</h1>
    <div class="container mt-4 mb-4">
  <div class="row justify-content-md-center">
    <div class="col-md-12 col-lg-8">
      
     <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
      	<input type="text" name="name" placeholder="Name">
      </div>
      <br><br>
      <div class="form-group">
         <input type="file" name="image[]" multiple="">
      </div>
      <br><br>
      <div class="form-group">
      	<label>Main Content</label>
         <textarea id="editor" name="desc" placeholder="Main Content"></textarea>
      </div>
      <br><br>
      <div class="form-group">
      	<label>Right Content</label>
         <textarea id="editor1" name="right" placeholder="Right Content"></textarea>
      </div>
      <br>
      <div class="form-group">
      <input type="submit" name="submit" value="Submit">
  </div>
  </form>
    </div>
  </div>
</div>

  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
 
<script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor' );
                 CKEDITOR.replace( 'editor1' );
            </script>
  </body>
</html>