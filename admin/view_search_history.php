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
                        <h3 class="box-title">Users</h3>
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
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">Qualification</th>
                                            <th class="border-top-0">Search Date</th>
                                            <th class="border-top-0">Search Time</th>
                                            <th class="border-top-0">Topics</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                              <tbody>
                                        <?php
                                        $i=1;
                              $sql="SELECT * FROM history
INNER JOIN user_registration ON history.user_id=user_registration.user_id";
                              $result=$con->query($sql);
                             while($row=$result->fetch_assoc()){

                            ?>
                             <tr class="odd gradeX">
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['phone'];?></td>
                                            <td><?php echo $row['qualification'];?></td>
                                            <td><?php echo $row['his_date'];?></td>
                                            <td><?php echo $row['his_time'];?></td>
                                            <td><?php echo $row['topic_name'];?></td>
                                           
                                            <td><a href="delete_history.php?id=<?php echo $row['his_id']?>">Delete</a></td>
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