
 

        <div class="card m-3">
        <div class="card-header">
                        <h3>  Filter Result</h3>
                        <input type="text" class='form-control' placeholder="Search..." id="myInput">
                </div>
                <div class="table-responsive">
                <!-- /.card-header -->
                <div class="card-body">
                        <table id="myTable" class="table table-bordered  text-center table-striped bg-dark">
                                <thead>
                                        <tr>
                                       
                                        <th> Name</th>
                    <th> Email</th>
                    <th> Phone Number</th>
                    <th>Client Income</th>
                    <th>Client Orders</th>
                    <th>Detail</th>
                                             
                                         
                                                
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php
                                        $barberId = $_SESSION['id'];
                                     $sql = " SELECT *  FROM client_tb where barberId =  $barberId";
                                        $result = mysqli_query($con, $sql);
                                        if ($result) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                        <tr>
                                                       
                                                        
                        

                                                        <td><?php echo $row['clientName'];
                            ?></td>
                        <td><?php echo $row['clientEmail'];
                                    ?></td>
                                    <td><?php echo $row['clientNumber'];
                                    ?></td>
                                    <td><?php echo $row['clientIncome'];
                                    ?></td>
                                     <td><?php echo $row['clientOrders'];
                                    ?></td>
                                    
                                    
                                    <td align="center">
                                                                               <?php

echo '
<a title="Edit" href="Barber.php?PageName=ClientAppointmentDetail&clientId=' . $row['clientId'] . '" class="btn btn-info btn-xs  ">Transection History</a>
';
?>
                                                                               </td>


                                                        </tr>
                                        <?php
                                                }
                                        }
                                        ?>
                                </tbody>

                        </table>
                </div>
                </div>
                <!-- /.card-body -->
        </div>
       

<script>

</script>