
 

        <div class="card m-3">
        <div class="card-header">
                        <h3> Search Filter</h3>
                        <input type="text" class='form-control' placeholder="Search..." id="myInput">
                </div>
                       
                <div class="table-responsive">
                <!-- /.card-header -->
                <div class="card-body">
                        <table id="myTable" class="table table-bordered  text-center table-striped bg-dark">
                                <thead>
                                        <tr>
                                       
                    <th>Client Name</th>
                    <th>Client Email</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Hair Cut</th>
                    <th>Appointment Status</th>
                    <th> Appointment</th>
                  
                    
                                             
                                         
                                                
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php
                                     $barberId = $_SESSION['id'];
                                     $sql = " SELECT * FROM client_tb , appointment_tb 
                                     WHERE client_tb.clientId = appointment_tb.clientId and client_tb.BarberId = $barberId ";
                                        $result = mysqli_query($con, $sql);
                                        if ($result) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                        <tr>
                                                       
                                                        
                        <td><?php echo $row['clientName'];
                            ?></td>
                                                    <td><?php echo $row['clientEmail'];
                            ?></td>
                        <td><?php echo $row['appointmentDate'];
                                    ?></td>
                                    <td><?php echo $row['appointmentTime'];
                                    ?></td>
                                     <td><?php echo $row['clientHairCut'];
                                    ?></td>
                                      
                                     <td>
 <strong><?php if ($row['appointmentStatus']== 'Active')
 {
?>
<i class="fa fa-check" aria-hidden="true"></i>
<?php
 }
 else
 {
        ?>
     <i class="fa fa-times" aria-hidden="true"></i>
        <?php     
 }
                                    ?>
</td>
<td align="center">
                                                                               <?php

echo '
<a title="Edit" href="Barber.php?PageName=AppointmentListEdit&editAppointmentId=' . $row['appointmentId'] .'" class="btn btn-info
 btn-xs pt-2 pb-2">Cancel</a>
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