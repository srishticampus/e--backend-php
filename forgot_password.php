<?php 

require 'connection.php';

if(isset($_GET['status'])){
	$status=$_GET['status'];
	if($status=='success'){
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>Your registration completed successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
else if($status=='s'){
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Failed!</strong>Failed successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}
}
else{
}
 ?>




<!doctype html>
<html lang="en">
  <head>
  	<title>Forgot Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style type="text/css">
	.btn.btn-primary {
    background: #0266e8 !important;
    border: 1px solid #0266e8 !important;
    color: #fff !important; }
</style>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center" style="background-color: #0266e8">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		     	<h3 class="text-center mb-4"style="color: #0266e8">Forgot Password</h3> 
		      
						<form  class="login-form">
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left" placeholder="Enter Your Email Id" id="username" name="email" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" id="password" class="form-control rounded-left" placeholder="Enter Password" name="pwd" required>
	            </div>
	              
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		
								</div>
								<!-- <div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div> -->
	            </div>
	            <div class="form-group">
	            	<button type="button" class="btn btn-primary rounded submit p-3 px-5" id="login" style="margin-left: 110px;">Submit</button>
	            	<br><br><br>
	            	
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
  	
  	$(document).ready(function(){
  		//alert('hai');
  		$('#login').click(function(){
  		
         var email= $('#username').val();
          var pwd=$('#password').val();
          var passw=$('#pass').val();
        $.ajax({
        	url:'forgot_action.php',
        	type:"post",
        	data:{eml:email,pass:pwd},
        	success:function(data){
        		//alert(data);
        	if(data==1){
        		window.location.href="login.php?status=s";
        	}

        	}

       });


  		 });

  	});
  </script>

	</body>
</html>
