<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		.btn.btn-primary {
    background: #F36A5A !important;
    border: 1px solid #F36A5A !important;
    color: #fff !important; }
	</style>

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center" style="background-color: #F36A5A;">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      <!-- 	<h3 class="text-center mb-4">Have an account?</h3> -->
		      	<h3 class="text-center mb-4" style="color: #F36A5A;">ADMIN</h3>
						<form  class="login-form">
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left" placeholder="Username" id="username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" id="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		
								</div>
								<!-- <div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div> -->
	            </div>
	            <div class="form-group" style="background-color: #F36A5A">
	            	<button type="button" class="btn btn-primary rounded submit p-3 px-5" id="login" style="margin-left: 110px;background-color: #F36A5A">Login</button>
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
  			
         var user= $('#username').val();
          var pass=$('#password').val();
        $.ajax({
        	url:'login_action.php',
        	type:"post",
        	data:{user:user,pass:pass},
        	success:function(data){
        	if(data==1){
        		window.location.href="../admin/index.php?status=success";
        	}

        	}

       });


  		 });

  	});
  </script>

	</body>
</html>

