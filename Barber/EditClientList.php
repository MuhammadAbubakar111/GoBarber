
 

        <div class="card m-3">
        <div class="card-header">
                        <h3> Search Filter</h3>
                        <input type="text" class='form-control' placeholder="Search..." id="myInput">
                </div>
                       
                          
                       
                       
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
                    <th>Action</th>
                                             
                                         
                                                
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php
                                         $barberId = $_SESSION['id'];
                                     $sql = " SELECT *  FROM client_tb where barberId =$barberId";
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
                                  
 <td align="center">
                                                                               <?php

echo '
<a title="Edit" href="Barber.php?PageName=EditClientList&editClientId=' . $row['clientId'] . '" class="btn btn-primary btn-xs  pl-2 pr-2">Edit</a>
<a title="Delete" href="Barber.php?PageName=EditClientList&deleteClientId=' . $row['clientId'] . '" class="btn btn-danger btn-xs  pl-2 pr-2 ">  Delete</a>';
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