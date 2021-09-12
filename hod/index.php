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

  <title>Home | Admin</title>
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
        <div class="container-fluid ">
          <div class="row ">

            <!-- /.col-md-6 -->
            <div class="col-xl-8 my-4" style="height:50%;">

              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Stats</h5>
                </div>
                <div class="row mx-1 my-4">
                  <div class="col-lg-4 col-4 col-xl-4  ">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>
                          <?php
                          $con = new mysqli("localhost", "root", "", "studdetails");

                          if ($con->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }
                          $sql = "SELECT count(*) FROM firstyear";
                          $result = $con->query($sql);
                          $sql = "SELECT count(*) FROM secondyear";
                          $result2 = $con->query($sql);
                          $sql = "SELECT count(*) FROM thirdyear";
                          $result3 = $con->query($sql);
                          echo ($result->fetch_all()[0][0] + $result2->fetch_all()[0][0] + $result3->fetch_all()[0][0]);
                          $con->close();
                          ?>
                        </h3>

                        <p>Number Of Students</p>
                      </div>

                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-4 col-xl-4  ">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>
                          <?php
                          $myfile = fopen("C:/xampp/htdocs/MeagaFinal/MainDataOfDepartment/statistics.txt", "r") or die("Unable to open file!");
                          $i=0;
                          $arr= array();
                          // Output one line until end-of-file
                          while (!feof($myfile)) {
                            $arr[$i]=fgets($myfile);
                            $i+=1;
                          }
                          fclose($myfile);
                          echo $arr[0];

                          ?>
                          
                        </h3>

                        <p>Presnty Persent</p>
                      </div>

                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-4 col-xl-4 ">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3><?php
                        echo $arr[1];
                        ?></h3>

                        <p>Number Of Alert Students</p>
                      </div>

                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                </div>
                <div class="row mx-1">
                  <div class="col-lg-4 col-4 col-xl-4">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">First Year Students </span>
                        <span class="info-box-number">
                          <?php
                          $con = new mysqli("localhost", "root", "", "studdetails");
                          if ($con->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }
                          $sql = "SELECT count(*) FROM firstyear";
                          $result = $con->query($sql);
                          echo ($result->fetch_all()[0][0]);
                          $con->close();
                          ?>

                        </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <div class="col-lg-4 col-4 col-xl-4">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Second Year Students</span>
                        <span class="info-box-number">
                          <?php
                          $con = new mysqli("localhost", "root", "", "studdetails");
                          if ($con->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }
                          $sql = "SELECT count(*) FROM secondyear";
                          $result = $con->query($sql);
                          echo ($result->fetch_all()[0][0]);
                          $con->close();
                          ?>

                        </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <div class="col-lg-4 col-4 col-xl-4">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Third Year Students</span>
                        <span class="info-box-number">
                          <?php
                          $con = new mysqli("localhost", "root", "", "studdetails");
                          if ($con->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }
                          $sql = "SELECT count(*) FROM thirdyear";
                          $result = $con->query($sql);
                          echo ($result->fetch_all()[0][0]);
                          $con->close();
                          ?>

                        </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                </div>


              </div>
            </div>
            <!--Absent students-->
            <div class="col-xl-4 my-4 h-100">

              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Absent Students</h5>
                </div>
                <div class="card-body p-0">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="images/2.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Nagdatt Gajjam</a>
                      <span class="users-list-date">1700950081</span>
                    </li>
                    <li>
                      <img src="dist/img/user8-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Hello world</a>
                      <span class="users-list-date">1700950086</span>
                    </li>
                    <li>
                      <img src="dist/img/user7-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">1700950086</span>
                    </li>
                    <li>
                      <img src="dist/img/user6-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date">1700950086</span>
                    </li>
                    <li>
                      <img src="dist/img/user2-160x160.jpg" alt="User Image">
                      <a class="users-list-name" href="#">1700950086</a>
                      <span class="users-list-date">13 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user5-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">1700950086</span>
                    </li>
                    <li>
                      <img src="dist/img/user4-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date">1700950086</span>
                    </li>
                    <li>
                      <img src="dist/img/user3-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date">1700950086</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <div class="card-footer text-center">
                  <a href="javascript::">View All Students</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
        <!-- DIRECT CHAT -->
        <div class="card direct-chat direct-chat-warning">
          <div class="card-header">
            <h3 class="card-title">Direct Chat</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>

              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- Conversations are loaded here -->
            <div class="direct-chat-messages" name="directchat" id="directchat">


            </div>
            <!--/.direct-chat-messages-->

            <!-- Contacts are loaded here -->

            <!-- /.direct-chat-pane -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <form method="post">
              <div class="input-group">

                <input type="text" name="from" placeholder="From" class="form-control col-xl-3" required="true">
                <input type="text" name="message" placeholder="Type Message ..." class="form-control" required="true">

                <span class="input-group-append">
                  <input type="submit" name="Send" class="btn btn-primary" value="Send" />
                </span>
              </div>
            </form>
            <?php
            $strings = "";
            if (isset($_POST['Send'])) {
              $from = $_POST['from'];
              $message = $_POST['message'];
              $date = date("d-m-y");
              $time = date("h:i:s");
              $con = new mysqli("localhost", "root", "", "test");
              if ($con->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "INSERT INTO messages VALUES ('$from', '$message','$date','$time')";

              if ($con->query($sql) === TRUE) {
                $sql = "SELECT * FROM messages";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row

                  while ($row = $result->fetch_assoc()) {
                    $strings .= " <div class='direct-chat-msg'>";
                    $strings .= "<div class='direct-chat-infos clearfix'>";
                    $strings .=  "<span class='direct-chat-name float-left'>" . $row['fromName'] . "</span>";
                    $strings .=  "<span class='direct-chat-timestamp float-right'>" . $row['date'] . " " . $row['time'] . "</span>";
                    $strings .= "</div>";
                    $strings .= "<div class='direct-chat-text'>";
                    $strings .=  $row['message'];
                    $strings .= "</div>";
                    $strings .= "</div>";
                  }
                  //document.getElementById('directchat').innerHTML =  $strings 
                  echo "<script> document.getElementById('directchat').innerHTML = \"$strings\";</script>";
                } else {
                  echo "0 results";
                }



                // echo "<script> DirectChat();</script>";
              } else {
                echo "Error: " . $sql . "<br>" . $con->error;
              }
            }
            ?>
          </div>
          <!-- /.card-footer-->
        </div>
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
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
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


<?php
$strings = "";

$con = new mysqli("localhost", "root", "", "test");
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM messages";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

  while ($row = $result->fetch_assoc()) {
    $strings .= " <div class='direct-chat-msg'>";
    $strings .= "<div class='direct-chat-infos clearfix'>";
    $strings .=  "<span class='direct-chat-name float-left'>" . $row['fromName'] . "</span>";
    $strings .=  "<span class='direct-chat-timestamp float-right'>" . $row['date'] . " " . $row['time'] . "</span>";
    $strings .= "</div>";
    $strings .= "<div class='direct-chat-text'>";
    $strings .=  $row['message'];
    $strings .= "</div>";
    $strings .= "</div>";
  }
  //document.getElementById('directchat').innerHTML =  $strings 
  echo "<script> document.getElementById('directchat').innerHTML = \"$strings\";</script>";
} else {
  echo "0 results";
}



// echo "<script> DirectChat();</script>";


?>