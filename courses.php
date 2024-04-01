<?php
include 'header.php';

?>
	<!-- /.navbar -->

	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Topics</h1>
				</div>
			</div>
		</div>
	</header>
	
 
         <section class="news-box top-margin">
        <div class="container"> 
            <div class="row">
       <div>
							<h3>Topics</h3>
							<p></p>
						</div>
                        <?php

                        $sql="select * from topics";
                        $result=$con->query($sql);
                        while($row=$result->fetch_assoc()){
                            ?>



                            <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="<?php echo $row['image'];?>" alt="" width="200" height="200"></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong><?php echo $row['topic_name'];?></strong></p>
                                            <p><?php echo substr($row['description'],0,200);?></p>
                                        </div>
                                        <div>
                                            <a href="sidebar-right.php?id=<?php echo $row['topic_id']?>" class="btn-inline">more</a>
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
   

	<?php
include 'footer.php';

    ?>
