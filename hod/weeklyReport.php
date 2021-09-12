<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Weekly Report | Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->


      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-cog"></i>

          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">Settings</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-question"></i> Help

            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-unlock-alt"></i> Change password

            </a>
            <div class="dropdown-divider"></div>
            <a href="../MegaLogin.php" class="dropdown-item">
              <i class="fas fa-sign-out-alt"></i> Log Out

            </a>

          </div>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HOD Cabin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <p>
                  Home
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="teachersAttachment.php" class="nav-link">
                <p>
                  Teachers Attachment
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="setTimeTable.php" class="nav-link">
                <p>
                  Set Timetable
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="addStudent.php" class="nav-link">
                <p>
                  Add Student
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="weeklyReport.php" class="nav-link">
                <p>
                  Weekly Report
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="monthlyReport.php" class="nav-link">
                <p>
                  Monthly report
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="semisterReport.php" class="nav-link">
                <p>
                  Semister's report
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content ">
        <div class="callout callout-danger my-4">
          <h5><i class="fas fa-info"></i> Note:</h5>
          This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
        </div>
        <div class="container-fluid ">
          <div class="row ">
            <!-- /.col-md-6 -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    Solapur Education Society's Polytechnic,Solapur
                    <small class="float-right">Date: 18/09/2020 to 25/09/2020</small>
                  </h4>
                  <hr>
                </div>
                <div class="col-12">
                  <h4>
                    Weekly Report
                    
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->

              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Year</th>
                        <th>Number Of Students</th>
                        <th>Presenty Persentage</th>
                        <th>Read Alert Students</th>
                        <th>Green Alert Students</th>
                        <th>Most Absent Student</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>14</td>
                        <td>88</td>
                        <td>3</td>
                        <td>6</td>
                        <td>xyz king</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>9</td>
                        <td>94</td>
                        <td>0</td>
                        <td>9</td>
                        <td>jdbc </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>18</td>
                        <td>72</td>
                        <td>3</td>
                        <td>9</td>
                        <td>rwe ewr</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-12">
                  <p class="lead">Conclusion</p>


                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    It looks teachers are very strict on students attendence ,so attendence is very Nice.Keep it Up.
                  </p>
                </div>
                <!-- /.col -->

                <!-- /.col -->
              </div>
              <div class="row  float-right">
                <div class="col my-35">
                  <b>HOD Signature<b>
                </div>

              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default "><i class="fas fa-print"></i> Print</a>

                </div>
              </div>
            </div>

            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->

      <!-- Default to the left -->
      <strong>Copyright &copy; 2020-2021 . All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>