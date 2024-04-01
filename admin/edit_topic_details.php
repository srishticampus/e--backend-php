<?php
include 'header.php';
$id=$_GET['id'];
?>

<?php
require 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $right=$_POST['right'];
    $img=$_POST['img'];
    $uploaddir = 'uploads/';
$uploadfile="";
$up="";
    // for($i=0; $i<=count($_FILES['image']['name']); $i++)
    // {
    // $attachment[$i] = $_FILES['client_attachment']['name'];
    if($_FILES['image']['name']==""){
      //$uploadfile=$img;

       $s="select * from topics where topic_id=$id";
    $r=$con->query($s);
    $ro=$r->fetch_assoc();
    $image=$ro['image'];

        $up=$image;
    }
    else{
     $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    
    

move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
$up='http://localhost/e-Learning/admin/'.$uploadfile;
}
  
   // if($uploadfile==""){
   //  $s="select * from topics where topic_id=$id";
   //  $r=$con->query($s);
   //  $ro=$r->fetch_assoc();
   //  $image=$ro['image'];
   //      $uploadfile=$image;
   //  }

   

    $sql="update topics set topic_name='$name',description='$desc',image='$up',right_main='$right' where topic_id=$id";
    $result=$con->query($sql);
    //$count=$con->affected_rows;
    if(!$result){
       //   header("location:edit_topic_details.php?s=failed");

         echo '<script>setTimeout(function(){ 
$(".alert").hide();
     }, 3000);</script>';
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width:1000px; margin-left:50px;">
  <h5><strong>Warning!</strong>Failed</h5>
 
   
  
</div>';
    }
    else{
        //echo $sql;
      
       // header("location:edit_topic_details.php?s=succ");
         echo '<script>setTimeout(function(){ 
                            
$(".alert").hide();
     }, 3000);</script>';
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:1000px; margin-left:50px;">
  <h5><strong>Success!</strong>Successfully updated</h5>
 
   
  
</div>';
    }
}
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
                        <h3 class="box-title">Edit Subject and Details</h3>

                       
                        <div class="card">
                            <div class="card-body">
                              <?php
                              $sql="select * from topics where topic_id=$id";
                              $result=$con->query($sql);
                              $row=$result->fetch_assoc();
                              ?>
                                <form class="form-horizontal form-material" action="" method="post"  enctype="multipart/form-data">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="name" placeholder="Subject" class="form-control p-0 border-0" placeholder="Text input" value="<?php echo $row['topic_name'];?>">

                                             </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="image" class="form-control p-0 border-0" id="example-email" multiple="">
                                            <input type="image" src="<?php echo $row['image'];?>"value="<?php echo $row['image'];?>" width="100" height="100" >
                                        <input type="hidden" name="img" value="<?php echo $row['image'];?>">
                                        </div>
                                    </div>

                                     
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Main Content</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea id="editor" name="desc" placeholder="Main Content" class="form-control p-0 border-0"><?php echo $row['description'];?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Right Content</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea  id="editor1"  name="right" placeholder="Right Content" class="form-control p-0 border-0"><?php echo $row['right_main'];?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="submit">Submit</button>
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
    