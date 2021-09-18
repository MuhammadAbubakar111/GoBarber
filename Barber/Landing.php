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

              <div class="info-box-content">
                <span class="info-box-text"> Clients</span>
                <span class="info-box-number">
                  <?php
                  echo getTotalClient();
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
              <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-list-alt" aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Appointments</span>
                <span class="info-box-number">
                <?php
                        echo getTotalApp();
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
              <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-window-close" aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"> Cancel Appointments</span>
                <span class="info-box-number">
                <?php
                        echo getTotalCancelApp();
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
                <span class="info-box-text">Earning</span>
                <span class="info-box-number">
                <?php
                        echo getTotalEarning();
                  ?>
                </span>
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
                      //  echo getTodayEarning();
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        
        </div>
        <!-- /.row -->


        
      </div>
      </div>
      <!-- /.row -->
      </div>
      <!--/. container-fluid -->
    </section>
    <!-- /.content -->