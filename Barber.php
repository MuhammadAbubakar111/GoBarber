<?php
require('UserControllerData.php');
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$user = $_SESSION['type'];
//if user not admin than gotoback page
if ($email != false && $password != false && $user == "Barber") {
  $sql = "SELECT * FROM users_tb WHERE UserEmail = '$email'";
  $run_Sql = mysqli_query($con, $sql);
  if ($run_Sql) {
    $fetch_info = mysqli_fetch_assoc($run_Sql);
  }
} else {
  echo "<script>   window.history.back(); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Barber Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i> </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="Barber.php" class="brand-link">
        <img src="./img/gobarber-logo.png" alt="Logo" class="brand-image img-circle elevation-3" >
        <span class="brand-text ">
          <h5>GoBarber </h5>
        </span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <h5> <?php echo $_SESSION['name'];?> </h5>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Client
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Barber.php?PageName=AddNewClient" class="nav-link">

                    <p>Add New Client </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Barber.php?PageName=EditClientList" class="nav-link">
                    <p>Update or Delete </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Barber.php?PageName=Clients" class="nav-link">
                    <p>Client List </p>
                  </a>
                </li>
               


              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cart-plus"></i>
                <p>
                  Appointment
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Barber.php?PageName=ClientList" class="nav-link">

                    <p>Add New Appointment</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Admin.php?PageName=EditProduct" class="nav-link">

                    <p>Cancel Appointment </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="Admin.php?PageName=EditProduct" class="nav-link">
                    <p>Update Appointment </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="Barber.php?PageName=AppointmentList" class="nav-link">

                    <p>View Appointment List</p>
                  </a>
                </li>


              </ul>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-credit-card"></i>
                <p>
                Orders
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Admin.php?PageName=Orders" class="nav-link">
                    <p>Active Orders</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Admin.php?PageName=UnpaidOrder" class="nav-link">
                    <p>Cancel Orders</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Admin.php?PageName=PaidOrder" class="nav-link">
                    <p>Completed Orders</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Admin.php?PageName=EditOrders" class="nav-link">
                    <p>Edit Order Detail</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Admin.php?PageName=EditOrders" class="nav-link">
                    <p>View Order List</p>
                  </a>
                </li>


              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-credit-card"></i>
                <p>
                Statitics
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Admin.php?PageName=Orders" class="nav-link">
                    <p>...</p>
                  </a>
                </li>
                


              </ul>
            </li>


            <li class="nav-header">ACCOUNT SETTINGS</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  View Profile
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Update Profile
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-2">
      <!-- Php Pages -->
      <?php

      $PagesDirectory = 'Barber';
      if (!empty($_GET['PageName'])) {
        $PagesFolder = scandir($PagesDirectory, 0);
        unset($PagesFolder[0], $PagesFolder[1]);
        $PageName = $_GET['PageName'];
        if (in_array($PageName . '.php', $PagesFolder)) {
          include($PagesDirectory . '/' . $PageName . '.php');
        } else {
          echo '<h1 id="request">You are Lost..</h1>';
          echo '<h2>Sorry Page Not Found</h2>';
        }
      } else {
        include($PagesDirectory . '/Landing.php');
      }
      ?>
      <!--End Php Pages-->

    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
  <script>

    $(document).ready(function() {
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

    $("body").on("click", "#btnExport", function() {
                html2canvas($('table')[0], {
                    onrendered: function(canvas) {
                        var data = canvas.toDataURL();
                        var docDefinition = {
                            content: [{
                                image: data,
                                width: 500
                            }]
                        };
                        pdfMake.createPdf(docDefinition).download("Report.pdf");
                    }
                });
            });
  </script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>

</body>

</html>