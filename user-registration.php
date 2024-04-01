<!DOCTYPE html>
<html>
<head>
  <title>E-Learning</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<style type="text/css">
  body{
  background:black;
}

.container{
  display:flex;
  flex-direction:row;
  justify-content:center;
  align-items:center;
}
.form-control{
  border:none;
  border-bottom:3px solid dodgerblue;
  background:black;
  color:white;
  border-radius:0px;
}

.row{
  width:60%;
  margin-top:50px;
  border: 3px solid orange;
  border-radius:14px;
  height:auto;
}
#btn{
  margin-top: -50px;
  
  font-weight: bold;
  font-size: 15px;
}

form h2{
  color:white;
  text-align: center;
}

.checkbox span{
  color:white;
}

.checkbox{
  float:left;
}

button{
  /*float:right;*/
  margin-left: 450px;
  width:120px;
}

@media(max-width:768px){
  body{
    font-size:10px;
  }
  
  h2{
    font-size:15px;
    text-align: center;
  }
  
  input[type=text]{
    font-size:13px;
  }
  
  input[type=password]{
    font-size:13px;
  }
  
  input[type=email]{
    font-size:13px;
  }
  
  button{
    width:80px;
    height:30px;
    float:right;
    font-size:10px;
    margin-bottom:10px;
  }
  
  .checkbox{
    display:inline;
  }
  
}
</style>
<body>


<div class="container">
  <div class="row">
  <form class="col-xs-12 col-sm-12 col-md-12" >
  <h2>REGISTRATION</h2>
  <br>
  
  <div class="form-group">
      <input type="text" class="form-control" id="name" placeholder="Enter Name *" name="name" required>
    </div>
  
 
  
      <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter email *" name="email" required>
    </div>
     <div class="form-group">
      <input type="text" class="form-control" id="phone" placeholder="Enter phone *" name="phone" required>
    </div>
     <div class="form-group">
      <input type="text" class="form-control" id="quali" placeholder="Enter qualification *" name="quali" required>
    </div>
  <div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password *" name="pwd" required>
   </div>
   <div class="form-group">
      <input type="password" class="form-control" id="rpwd" placeholder="Repeat password *" name="Rptpwd" required>
   </div>
    <div class="checkbox">
      <label><!-- <input type="checkbox" name="remember"> <span>Remember me</span> --></label>
    </div>
<a href="login.php" id="btn" style="font-size: 15px;font-weight: bold;text-decoration: underline;">Login</a>
    <button type="button" class="btn btn-success" id="btnSubmit">Register<i class="glyphicon glyphicon-send"></i></button>
  </form>
     
  </div>
</div>


</body>
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
    window.location.href="login.php";
  }
    }

  });
//}
});
  });
</script>
</html>