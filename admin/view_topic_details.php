<?php
include 'header.php';

?>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> 
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12 col-xlg-9 col-md-12">
                        <h3 class="box-title">View Subjects</h3>
                    </div>


                    <?php
                        if(isset($_GET['s'])){
                            if($_GET['s']=='success'){
                               echo '<script>setTimeout(function(){ 
                            
$(".alert").hide();
     }, 3000);</script>';
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:1000px; margin-left:50px;">
  <h5><strong>Success!</strong>Successfully deleted</h5>
 
   
  
</div>';
                        }
                        else{
                             echo '<script>setTimeout(function(){ 
$(".alert").hide();
     }, 3000);</script>';
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width:1000px; margin-left:50px;">
  <h5><strong>Warning!</strong>Failed</h5>
 
   
  
</div>';
                        }}
                        ?>
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title"></h3>
                            
                            <div class="table-responsive">
                                <table class="table text-nowrap" id="myTable">
                                   
                                     <thead>
                                        <tr>
                                            <th class="border-top-0">Slno</th>
                                            <th class="border-top-0">Subject</th>
                                            <th class="border-top-0">Details</th>
                                            <th class="border-top-0">Image</th>
                                            <th class="border-top-0">Right main</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                        <?php
                                        $i=1;
                              $sql="select * from  topics ";
                              $result=$con->query($sql);
                             while($row=$result->fetch_assoc()){

                            ?>
                             <tr class="odd gradeX">
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $row['topic_name'];?></td>
                                            <td><textarea style="width: 200px;height: 400px;"><?php echo $row['description'];?></textarea></td>
                                            <td><img src="<?php echo $row['image'];?>" width="100" height="100"></td>
                                            <td><textarea style="width: 200px;height: 400px;"><?php echo $row['right_main'];?></textarea></td>
                                            <td><a href="edit_topic_details.php?id=<?php echo $row['topic_id']?>">Edit</a>&nbsp;&nbsp;<a href="delete_topic_details.php?id=<?php echo $row['topic_id']?>">Delete</a></td>
                                        </tr>
                            <?php
                             }        
                                        ?>
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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

           <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
           <script type="text/javascript">
               

               $(document).ready( function () {
    $('#myTable').DataTable();
} );
           </script>