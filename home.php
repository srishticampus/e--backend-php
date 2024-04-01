<?php
include 'header.php';

?>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
					<div class="fluid_container">
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
                        </div> 
                        <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/img3.jpg">
                        </div> 
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->

  <div class="head-box" style="margin-top:-20px;">
            	<div class="container">
				<div class="row">
                	<div class="col-sm-12">
                    	
                        <h2 class="text-center text-uppercase last">Quick Search to the Topic</h2>
                        
                        <p class="text-center last" id="last1" ></p> 
          
<div class="search-panel">
                <form class="form-inline" role="form"> 
                    <div class="form-group adv">
                        <div class="input-group">
                             
                            <input class="form-control searchCourse" type="text" placeholder="Search Topic" id="topic" autocomplete="off">
                            
                        </div>
                       

                    </div>  

                    <div class="form-group">
                        <a href="javascript:void(0)" class="btn btnsearch" id="search">Search</a> 
                    </div>
                     <div id="citylist" style="background: #fff;color: #000;width: 200px;margin-left: 322px;margin-top: -20px;"> </div>
                </form>
            </div>
                    </div><!-- end .col-sm-12 -->
                </div><!-- ene .row -->
				</div>
            </div>
   

	
	<!-- <section class="container">
			
			<div class="row">
			<div class="section-heading">
							<h2>Our Features</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
						</div>
				 
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-eye fa-2x"></i>
						<div class="text">
							<h3>Latest Courses</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-quote-right fa-2x"></i>
						<div class="text">
							<h3>Assessment</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-arrows fa-2x"></i>
						<div class="text">
							<h3>Certificate</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</div>
					</div>
				</div>
			</div>

		</section> -->
			<section>
	<div class="box-2">
	<div class="container">
            	<div class="row">
                	<div class="col-md-12">
                    	<div class="section-heading">
							<h2>We find your skills</h2> 
							  <p>
                        	Learning and developing knowledge both theoretical and working and skills is a process. <br class="hidden-tablet hidden-phone">
							
                        </p>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
						</div>
                      
						
                        <img src="assets/images/940x250.png" alt="">
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
</div>           
		   </div>
	</section>
         <section class="news-box top-margin">
        <div class="container"> 
            <div class="row">
       <div class="section-heading">
							<h2>Popular Topic</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p> -->
						</div>
                        <?php
                        $sql="SELECT * FROM topics LIMIT 3";
                        $result=$con->query($sql);
                        while($row=$result->fetch_assoc()){
                            ?>
                              <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="<?php echo $row['image'];?>" alt="" width="200" height="200"></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <!-- <p class="title"><strong>CONCEPT</strong></p> -->
                                            <p><?php echo substr($row['description'],0,200 );?></p>
                                        </div>
                                        <div>
                                            <a href="courses.php" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <?php

                        }
                        ?>
              
              
            </div>
        </div>
    </section>
   
      
    <footer id="footer">
		<div class="container">
			<div class="social text-center">
				
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
								<a href="index.php">Home</a> | 
								<a href="about.php">About</a> |
								<a href="courses.php">Courses</a> |
								
								<a href="projects.php">Projects</a> |
								<a href="contact.php">Contact</a>
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
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>

    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
				height: '600',
				loader: 'bar',
				pagination: false,
				thumbnails: false,
				hover: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
	</script>
   <script type="text/javascript">
  $(document).ready(function(){
      $("#topic").on("keyup", function(){
        var topic = $(this).val();
        //alert(topic);
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
            url:"search_action.php",
            type:"POST",
            cache:false,
            data:{topic:topic},
            success:function(data){
                  var obj = jQuery.parseJSON(data);
                //alert(obj);
                $('#last1').html(obj['description']+'... '+'<a href="sidebar-right.php?id='+obj['topic_id']+'" id="next" style="color: #fff; display: ">More</a>');
            }
             
      });
      }
  });
  });
</script>
     
</body>
</html>
