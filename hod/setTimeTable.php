<?php
if (isset($_POST['submit'])) {
  $getN = $_POST['years'];
  if ($getN == "First Year 1st sem")
    $names = "timetable1";
  else if ($getN == "First Year 2nd sem")
    $names = "timetable2";
  else if ($getN == "Second Year 1st sem")
    $names = "timetable3";
  else if ($getN == "Second Year 2nd sem")
    $names = "timetable4";
  else if ($getN == "Third Year 1st sem")
    $names = "timetable5";
  else if ($getN == "Third Year 2nd sem")
    $names = "timetable6";
  else
    $names = "";





  //echo $getN;
  function startsWith($string, $startString)
  {
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
  }
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "tables";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully<br>";
  /* try { $sql = "DELETE FROM timetable";

		// use exec() because no results are returned
		$conn->query($sql);
		echo "Record deleted successfully";
		}
	catch(PDOException $e)
		{
		echo $sql . "<br>" . $e->getMessage();
		}
	$sql = "INSERT INTO timetable VALUES (3.15, 'q','wn','wu','wy','wr','wt')";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	} */
  $count = 0;
  $c = 0;
  $arr = array();
  foreach ($_POST as $a => $v) {

    if (startsWith($a, "creatingTable")) {
      $arr[$c] = $v;
      $c += 1;
    }
  }
  $i = 0;
  $c = 0;
  //echo count($arr); 
  try {
    $sql = "DELETE FROM $names";

    // use exec() because no results are returned
    $conn->query($sql);
    // echo "Record deleted successfully";
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $time = array("10:00:00", "10:55:00", "11:50:00", "01:15:00", "02:10:00", "3:20:00", "4:15:00");
  while ($i < count($arr)) {

    $t1 = $i;
    $t2 = $t1 + 1;
    $t3 = $t2 + 1;
    $t4 = $t3 + 1;
    $t5 = $t4 + 1;
    $t6 = $t5 + 1;
    //echo $arr[$t1];
    $sql = "INSERT INTO $names(Time, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday) VALUES ('$time[$c]','$arr[$t1]','$arr[$t2]','$arr[$t3]','$arr[$t4]','$arr[$t5]','$arr[$t6]')";
    if ($conn->query($sql) === TRUE) {
      //  echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $i += 6;
    $c += 1;
  }
  $conn->close();
}
?>








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

  <title>Set Time Table  | Admin</title>
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
      <form method="post">
        <!-- Main content -->
        <div class="content ">
          <div class="container-fluid ">
            <div class="row ">

              <!-- /.col-md-6 -->
              <div class="col-xl-12 col-lg-12 my-4" style="height:50%;">

                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h5 class="m-0">Select Semister</h5>
                  </div>
                  <div class="mb-3">
                    <!-- select -->
                    <div class="row my-4 mx-4">
                      <div class="form-group col-xl-3 col-lg-4 ">

                        <select class="form-control " name="years" id="years">
                          <option value="First Year 1st sem">First Year 1st sem</option>
                          <option value="First Year 2nd sem">First Year 2nd sem</option>
                          <option value="Second Year 1st sem">Second Year 1st sem</option>
                          <option value="Second Year 2nd sem">Second Year 2nd sem</option>
                          <option value="Third Year 1st sem">Third Year 1st sem</option>
                          <option value="Third Year 2nd sem">Third Year 2nd sem</option>
                        </select>
                      </div>
                      <div class="col-xl-3 col-lg-4 ">
                        <input type="button" name="Generate" onclick="crateTable()" value="Generate" class="btn btn-primary btn-block" />
                      </div>
                    </div>

                  </div>



                </div>
              </div>
              <div class="col-xl-12 col-lg-12 my-4 ">

                <div class="card card-primary card-outline" id="timeTable">
                  <div class="card-header">
                    <h5 class="m-0">Select Year and Sem</h5>
                  </div>
                 
                    
                 
                </div>
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
      </form>
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
  <script>
    var subjects = [
      ["---", "ENG", "MATHS-1", "SCIENCE", "ICT", "WPC", "EGP"],
      ["---", "PIC", "BEC", "EEC", "MATHS-2", "BCC", "CPH", "WPD"],
      ["---", "CPP", "DSU", "CGR", "DBMS", "DTE"],
      ["---", "JPR", "SEN", "DCC", "MIC", "VB.NET"],
      ["---", "EST", "AJP", "STE", "CSS", "ACN", "ADM", "ITR", "CPP-1"],
      ["---", "MGT", "MAD", "ETI", "WBP", "NIS", "DWMT", "EDI", "CPE-2"]
    ];
    p1 = document.getElementById("p1");
    p2 = document.getElementById("p2");
    p3 = document.getElementById("p3");
    p4 = document.getElementById("p4");
    p5 = document.getElementById("p5");
    p6 = document.getElementById("p6");

    function myFunction() {

      var x = document.getElementById("subject");
      for (var i = x.length; i >= 0; i--) {
        x.remove(i);
      }

      var y = document.getElementById("years").options[document.getElementById("years").selectedIndex];
      var id = y.index;
      //document.write(subjects[id].length);
      for (var i = 0; i < subjects[id].length; i++) {
        var option = document.createElement("option");
        option.text = subjects[id][i];
        //  document.write(subjects[id][i]);
        x.add(option);
      }
    }

    function crateTable() {
      var y = document.getElementById("years").options[document.getElementById("years").selectedIndex];
      var id = y.index;
      var str="<div class='card-header'><h5 class='m-0'>Set TimeTable</h5></div>";
     str+="<table  class='table table-bordered'><th>Time</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th>";
      var time = ["10", "10:55", "11:50", "1:15", "2:10", "3:20", "4:15"]
      var m = 0;
      for (var i = 0; i < 7; i++) {
        str += "<tr>";
        if (i == m) {

          str += "<td>" + time[i] + "</td>";
          for (var j = 0; j < 6; j++) {


            str += "<td><select id='creatingTable" + j + "" + i + "' name='creatingTable" + j + "" + i + "'>";
            for (var k = 0; k < subjects[id].length; k++) {
              str += "<option value='" + subjects[id][k] + "'>" + subjects[id][k] + "</option>";
            }
            str += "</select></td>";
          }


        } else {
          for (var j = 0; j < 6; j++) {

            str += "<td><select  class='form-control' id='creatingTable" + j + "" + i + "' name='creatingTable" + j + "" + i + "'>";
            for (var k = 0; k < subjects[id].length; k++) {
              str += "<option value='" + subjects[id][k] + "'>" + subjects[id][k] + "</option>";
            }
            str += "</select></td>";
          }

        }
        str += "</tr>";
        m += 1;
      }
      str += "</td></tr></table>"
      str+="<input type='submit' class='btn btn-primary btn-block col-xl-12 col-lg-12'name='submit' value='Submit Table'/>";
      //str+="  <select id='Table' name='cratingTable'  >";
      document.getElementById("timeTable").innerHTML = str;
    }

    //get values and ids
  </script>
</body>

</html>