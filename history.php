<?php
include 'header.php';

if (isset($_POST['deleteBtn'])){
    $recordIds = $_POST['check'];
    //$common = new Common();
    foreach ( $recordIds as $id ) {
        $delete = "delete from history where his_id=$id";
        $result=$con->query($delete);
    }
    if ($result) {
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="history.php";</script>';
    }
}

?>
<style type="text/css">
    body{
background:#eee;
}
.panel-order .row {
    border-bottom: 1px solid #ccc;
}
.panel-order .row:last-child {
    border: 0px;
}
.panel-order .row .col-md-1  {
    text-align: center;
    padding-top: 15px;
}
.panel-order .row .col-md-1 img {
    width: 50px;
    max-height: 50px;
}
.panel-order .row .row {
    border-bottom: 0;
}
.panel-order .row .col-md-11 {
    border-left: 1px solid #ccc;
}
.panel-order .row .row .col-md-12 {
    padding-top: 7px;
    padding-bottom: 7px; 
}
.panel-order .row .row .col-md-12:last-child {
    font-size: 11px; 
    color: #555;  
    background: #efefef;
}
.panel-order .btn-group {
    margin: 0px;
    padding: 0px;
}
.panel-order .panel-body {
    padding-top: 0px;
    padding-bottom: 0px;
}
.panel-order .panel-deading {
    margin-bottom: 0;
}                    
</style>
	<!-- /.navbar -->

	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>History</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-12">
						<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<div class="container bootdey">
    <div class="panel panel-default panel-order">
        <div class="panel-heading" style="height: 100px;background-color: #0D91D2">
         
            <div class="btn-group pull-right">
                <div class="search-panel" style="margin-top: 0px;">
                <form class="form-inline" role="form"> 
                    <div class="form-group adv">
                        <div class="input-group">
                             
                            <input class="form-control searchCourse" type="text" placeholder="Search Topic" id="topic" autocomplete="off">
                            
                        </div>
                        <div id="citylist" style="background: #fff;color: #000;width: 200px;"> </div>

                    </div>  

                    <div class="form-group">
                        <a href="javascript:void(0)" class="btn btnsearch" id="search">Search</a> 
                    </div>
                </form>
            </div>
            </div>
        </div>

        <div class="panel-body">
            <div class="row">
                
                <div class="col-md-12">
                    <form action="" method="POST">
     
                    <?php
$sql="select * from history where user_id=$id";
$result=$con->query($sql);
while($row=$result->fetch_assoc()){
    ?>

<a href="sidebar-right.php?id=<?php echo $row['topic_id']?>">
    <div class="row">
                <div class="col-md-1"><input type="checkbox" name="check[]" id="check" value="<?php echo $row['his_id'];?>"></div> 
                       <div class="col-md-11">
                            <!-- <div class="pull-right"><label class="label label-danger">rejected</label></div> -->
                           <!--  <span><strong><?php echo $row['topic_name']?></strong></span> --> <span class="label label-info" id="info" style="height: 150px"><?php echo $row['topic_name']?></span><br />
                           
                            
                        </div>
                        <div class="col-md-11" id="da_time"> <?php echo $row['his_date'].'  '.$row['his_time']?></div>
                    </div>
</a>

<hr style="color: #0D91D2">

    <?php
}
                    ?>
                     <input type="submit" name="deleteBtn" id="deleteBtn" class="btn btn-success"  value="Delete Records" style="float: right"/>
               </form>
                </div>

            </div>
           

            

           

          
        </div>
       <!--  <div class="panel-footer">Put here some note for example: bootdey si a gallery of free bootstrap snippets bootdeys</div> -->
    </div>
</div>
						
					</div>
					
				</div>
			</div>
	<!-- /container -->

	

	<footer id="footer">
		<div class="container">
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.html">Home</a> | 
								<a href="about.html">About</a> |
								<a href="courses.html">Courses</a> |
								
								<a href="projects.html">Projects</a> |
								<a href="contact.html">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
	


	<script type="text/javascript">
	function validateForm() {
    var count_checked = $("[name='recordsCheckBox[]']:checked").length;
    if (count_checked == 0) {
        alert("Please check at least one checkbox");
        return false;
    }else{
        return true;
    }
}
	</script>
    <script type="text/javascript">
  $(document).ready(function(){
      $("#topic").on("keyup", function(){
        var topic = $(this).val();
        if (topic !=="") {
          $.ajax({
            url:"action.php",
            type:"POST",
            cache:false,
            data:{topic:topic},
            success:function(data){
              $("#citylist").html(data);
              $("#citylist").fadeIn();
            }  
          });
        }else{
          $("#citylist").html("");  
          $("#citylist").fadeOut();
        }
      });

      // click one particular city name it's fill in textbox
      $(document).on("click","li", function(){
        $('#topic').val($(this).text());
        $('#citylist').fadeOut("fast");
      });


       $("#search").on("click", function(){
        var topic = $('#topic').val();
        if (topic !=="") {
          $.ajax({
            url:"search_history_action.php",
            type:"POST",
            cache:false,
            data:{topic:topic},
            success:function(data){
                  var obj = jQuery.parseJSON(data);
                //alert(obj);
                $('#info').html(obj['topic_name']+'... '+'<a href="sidebar-right.php?id='+obj['topic_id']+'" id="next" style="color: #fff; display: ">More</a>');
                $('#da_time').html(obj['his_date']+' '+ obj['his_time']);
            }
             
      });
      }
  });
  });
</script>


</body>
</html>
