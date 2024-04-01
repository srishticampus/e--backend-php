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
                                            <th class="border-top-0">Date</th>
                                            <th class="border-top-0">Time</th>
                                        </tr>
                                    </thead>
                                    </thead>
                           <tbody>
                                        <?php
                                        $i=1;
                              $sql="select * from  user_registration ";
                              $result=$con->query($sql);
                             while($row=$result->fetch_assoc()){

                            ?>
                             <tr class="odd gradeX">
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['phone']?></td>
                                            <td><?php echo $row['qualification'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['time']?></td>
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