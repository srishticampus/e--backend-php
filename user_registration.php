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
    background: #0266e8 !important;
    border: 1px solid #0266e8 !important;
    color: #fff !important; }
</style>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<strong id="success"></strong>
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center" style="background-color: #0266e8;">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		     	<h3 class="text-center mb-4" style="color: #0266e8">Register</h3> 
		      
						<form  class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" id="name" placeholder="Enter Name *" name="name" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="email" class="form-control" id="email" placeholder="Enter email *" name="email" required>
	            </div>


	             <div class="form-group d-flex">
	             <input type="text" class="form-control" id="phone" placeholder="Enter phone *" name="phone" required>
	            </div>
	             <div class="form-group d-flex">
	             <input type="text" class="form-control" id="quali" placeholder="Enter qualification *" name="quali" required>
	            </div>
	             <div class="form-group d-flex">
	             <input type="password" class="form-control" id="pwd" placeholder="Enter password *" name="pwd" required>
	            </div>
	             <div class="form-group d-flex">
	               <input type="password" class="form-control" id="rpwd" placeholder="Repeat password *" name="Rptpwd" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		
								</div>
								<!-- <div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div> -->
	            </div>
	            <div class="form-group">
	            	<button type="button" class="btn btn-primary rounded submit p-3 px-5" id="btnSubmit" style="margin-left: 110px;">Register</button>
	            	<br><br><br>
	            	<a href="login.php" style="margin-left: 160px; color: #0266e8">Login</a>
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
$('#btnSubmit').click(function(){
var name=$('#name').val();

var email=$('#email').val();
var phone=$('#phone').val();
var quali =$('#quali').val();
var pwd=$('#pwd').val();
var rpwd=$('#rpwd').val();
//if(pwd==rpwd){
  $.ajax({
    url:"reg_action.php",
    type:"post",
    data:{nme:name,eml:email,ph:phone,qualification:quali,pass:pwd},
    success:function(n){
    // $('#success').text('Your registration completed successfully');
    if(n==1){
    window.location.href="login.php?status=success";
  }
  else{
$('#success').html('Your registration completed successfully');
  }
    }

  });
//}
});
  });
</script>

	</body>
</html>

