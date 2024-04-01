

<?php
require 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $right=$_POST['right'];
    $uploaddir = 'uploads/';
$uploadfile="uploads/default.png";
    // for($i=0; $i<=count($_FILES['image']['name']); $i++)
    // {
    // $attachment[$i] = $_FILES['client_attachment']['name']; 
     $uploadfile = $uploaddir . basename($_FILES['image']['name']);

move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
   // }
$up='http://localhost/e-Learning/admin/'.$uploadfile;
    $sql="INSERT INTO `topics`(`topic_name`, `description`,`image`,`right_main`) VALUES ('$name','$desc','$up','$right')";
    $result=$con->query($sql);
    $count=$con->affected_rows;
    if($count>0){
        header("location:add_details.php?s=success");
    }
    else{
        //echo $sql;
        header("location:add_details.php?s=failed");
    }
}
?>
<?php
include 'header.php';
?>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                  
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9 col-md-12">
                        <h3 class="box-title">Add Subject and Details</h3>
                        <?php
                        if(isset($_GET['s'])){
                            if($_GET['s']=='success'){
                               echo '<script>setTimeout(function(){ 
                            
$(".alert").hide();
     }, 3000);</script>';
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:1000px; margin-left:50px;">
  <h5><strong>Success!</strong>Successfully added</h5>
 
   
  
</div>';
                        }
                        else{
                             echo '<script>setTimeout(function(){ 
$(".alert").hide();
     }, 3000);</script>';
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width:1000px; margin-left:50px;">
  <h5><strong>Warning!</strong>Inserted Failed</h5>
 
   
  
</div>';
                        }}
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="" method="post"  enctype="multipart/form-data">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="name" placeholder="Subject" class="form-control p-0 border-0">

                                             </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="image" class="form-control p-0 border-0" id="example-email">
                                        </div>
                                    </div>

                                     
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Main Content</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea id="editor" name="desc" placeholder="Main Content" class="form-control p-0 border-0"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Right Content</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea  id="editor1"  name="right" placeholder="Right Content" class="form-control p-0 border-0"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success" name="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
           include 'footer.php';
           ?>
            <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
 
<script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor' );
                 CKEDITOR.replace( 'editor1' );
            </script>
    