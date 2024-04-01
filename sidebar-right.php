<?php
include 'header.php';
$topic=$_GET['id'];
$sql="SELECT * FROM `topics` where topic_id=$topic";
$result=$con->query($sql);
$count=$result->num_rows;
$row=$result->fetch_assoc();


?>
	<!-- /.navbar -->

	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1><?php echo $row['topic_name']?></h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<section class="container">

		<div class="row">

			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<br />
				<br />
				<p><?php echo $row['description'];?></p>
				
			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-right">

				<div class="row panel">
					<div class="col-xs-12">
						<?php echo $row['right_main']?>
					</div>
				</div>
				<!-- <div class="row panel">
					<div class="col-xs-12">
						<h3>Lorem ipsum dolor sit</h3>
						<p>
							<img src="assets/images/1.jpg" alt="">
						</p>
						<p>Morbi vitae diam felis. Mauris vulputate nisi erat, adipiscing pretium lacus lacinia quis. Sed consectetur ipsum.</p>
					</div>
				</div> -->

			</aside>
			<!-- /Sidebar -->

		</div>
	</section>
	<!-- /container -->

	
	<?php include 'footer.php';?>