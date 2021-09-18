    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">



          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

   

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"> <i class="nav-icon fas fa-users"></i></span>
              <a href="Barber.php?PageName=ClientStatistics" class='text-light'>
              <div class="info-box-content">
                <span class="info-box-text"> Clients</span>
                <span class="info-box-number">
                  <?php
                  echo getTotalClient();
                  ?>
                </span>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        
  
         
         
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-list-alt" aria-hidden="true"></i></span>

              <div class="info-box-content">
              <a href="Barber.php?PageName=Appointments" class='text-light'>
                <span class="info-box-text">Appointments</span>
                <span class="info-box-number">
                <?php
                        echo getTotalApp();
                  ?>
                </span>
  </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>


    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-window-close" aria-hidden="true"></i></span>
              <a href="Barber.php?PageName=CancelAppointment" class='text-light'>
              <div class="info-box-content">
                <span class="info-box-text"> Cancel Appointments</span>
                <span class="info-box-number">
                <?php
                        echo getTotalCancelApp();
                  ?>
                </span>
  </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-usd" aria-hidden="true"></i></span>
              <a href="Barber.php?PageName=Earnings" class='text-light'>
              <div class="info-box-content">
                <span class="info-box-text">Earning</span>
                <span class="info-box-number">
                <?php
                        echo getTotalEarning();
                  ?>
                </span>
  </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

            <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-list-alt" aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"> Today  Appointment</span>
                <span class="info-box-number">
                <?php
                        echo getTodayApp();
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-usd" aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Today Earning</span>
                <span class="info-box-number">
                  <?php
                        echo getTodayEarning();
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->      
                  <!-- /.col -->
      </div>
        <!-- Table -->
        <div class="row">
        <div class="col-lg-3">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Client Birthday</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-bordered  text-center table-striped bg-dark m-0">
                    <tbody>
                    <?php
                                     $barberId = $_SESSION['id'];
                                     $sql = " SELECT * FROM client_tb
                                     WHERE client_tb.BarberId = $barberId ";
                                        $result = mysqli_query($con, $sql);
                                        if ($result) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                         
                                                 $birthday = $row['clientDob'];
                                                 $birthday = substr($birthday, -5);
                                             
                                                 $today = date("Y-m-d");
                                                 $today = substr($today, -5);
                                            
                                                 if($today== $birthday)
                                                 {
                                                   $name = $row['clientName'];
                                                  echo "<tr> <td> $name </td> </tr>";
                                                 }
                                           
  
                                                }
                                        }
                         ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer -->
            </div>
            
            <!-- /.card -->
        </div>
        <div class="col-lg-9">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Today Appointments</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                <table id="myTable" class="table   text-center table-striped bg-dark">
                                <thead>
                                        <tr>
                                       
                    <th> Name</th>
                    <th> Email</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Hair Cut</th>
                    
                    
                                             
                                         
                                                
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php
                                     $barberId = $_SESSION['id'];
                                     $sql = " SELECT * FROM client_tb , appointment_tb 
                                     WHERE client_tb.clientId = appointment_tb.clientId and client_tb.BarberId = $barberId and  appointment_tb.appointmentStatus = 'Active'";
                                        $result = mysqli_query($con, $sql);
                                        if ($result) {
                                                while ($row = mysqli_fetch_assoc($result)) {

                                                  $Date = $row['appointmentDate'];
                                                  $Date = substr($Date, -5);
                                                  $today = date("Y-m-d");
                                                  $today = substr($today, -5);
                                             
                                                  if($today== $Date)
                                                  {
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
                                                                     
                                                                    
                               
                                                                  
                                                                                       </tr>
                                                     <?php
                                                  }
                                        ?>
                                                       
                                        <?php
                                                }
                                        }
                                        ?>
                                </tbody>

                        </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer -->
        </div>
        <!-- Table -->

      </div>
      <!-- /.row -->
     
      </div>
      </div>
      <!--/. container-fluid -->
    </section>
    <!-- /.content -->

  