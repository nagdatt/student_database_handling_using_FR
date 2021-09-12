
<?php
function startsWith($string, $startString)
{
  $len = strlen($startString);
  return (substr($string, 0, $len) === $startString);
}

?>
<?php
$msg = "";
$msg2 = "";
$sub = array(
  "1" => array("ENG", "MATHS-1", "SCIENCE", "ICT", "WPC", "EGP"),
  "2" => array("PIC", "BEC", "EEC", "MATHS-2", "BCC", "CPH", "WPD"),
  "3" => array("CPP", "DSU", "CGR", "DBMS", "DTE"),
  "4" => array("JPR", "SEN", "DCC", "MIC", "VB.NET"),
  "5" => array("EST", "AJP", "STE", "CSS", "ACN", "ADM", "ITR", "CPP-1"),
  "6" => array("MGT", "MAD", "ETI", "WBP", "NIS", "DWMT", "EDI", "CPE-2")
);
if (isset($_POST['submit'])) {
  //print_r($sub[$_POST['years']][0]);
  $subjects = array();
  $c = 0;
  foreach ($_POST as $a => $v) {

    if (startsWith($a, "t")) {
      if (empty($v)) {
        echo "<script>alert('Do not set Empty value of teachers');</script>";
        break;
      } else {
        $subjects[$sub[$_POST['years']][$c]] = $v;
        $c += 1;
      }
    }
  }

  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "teachers_att";
  $conn = new mysqli($servername, $username, $password, $db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  foreach ($subjects as $a => $v) {
    $sql = "INSERT INTO attachment VALUES ('$a','$v')";
    if ($conn->query($sql) === TRUE) {

      $folder = $v;
      $file = $a;
      $pas = "C:/Program Files/Python36/python.exe";
      $pas2 = "C:/Users/admin/AppData/Local/Programs/Python/Python37/python.exe";
      $output = passthru("$pas2 C:/xampp/htdocs/MeagaFinal/hod/createFolders.py " . $folder . " " . $a);
      $o = $output;
      if ($o == "False2") {
        $msg2 = "Use Underscore( _ ) insted of space\nWarning:Re-Enter All subject's Teachers Name Some Files Are not created";
      }
    } else {
       echo "<script>alert('Data Already Inserted,Can not be Changed');</script>";
     // echo "<script>setMessage();</script>";
      break;
    }
  }
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

  <title>Teachers Attachment | Admin</title>
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
            <button class="btn btn-navbar" type="submit" name="search">
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
    <form method="post">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content ">
          <div class="container-fluid ">
            <div class="row ">

              <!-- /.col-md-6 -->
              <div class="col-xl-12 col-lg-12 my-4">

                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h5 class="m-0">Select Semister</h5>
                  </div>

                  <div class="mb-3">
                    <!-- select -->
                    <div class="row my-4 mx-4">
                      <div class="form-group col-xl-3 col-lg-4 ">

                        <select class="form-control " name="years" id="years">
                          <option name="1" value="1">First Semister (1st)</option>
                          <option name="2" value="2">Second Semister (2nd)</option>
                          <option name="3" value="3">Third Semister (3rd)</option>
                          <option name="4" value="4">Fourth Semister (4th)</option>
                          <option name="5" value="5">Fifth Semister (5th)</option>
                          <option name="6" value="6">Sixth Semister (6th)</option>
                        </select>
                      </div>
                      <div class="col-xl-4 col-lg-4 ">
                        <input type="button" onclick="TeacherAtt()" name="Generate" value=" Generate" class="btn btn-primary btn-block" />
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <!-- /.col-md-6 -->
            </div>

            <div class="row ">
              <!-- /.col-md-6 -->
              <div class="col-xl-12 col-lg-12 my-4">

                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h5 class="m-0">Attach Teachers</h5>
                  </div>

                  <div class="mb-3">
                    <div class="row my-4 mx-4" id="message">


                    </div>
                    <!-- select -->
                    <div id="TeacherAttach">

                    </div>
                    <div class="row my-4 mx-4">

                      <div class="col-xl-3 col-lg-4 ">
                        <input type="submit" name="submit" value=" Submit" class="btn btn-primary btn-block" />
                      </div>
                    </div>


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
    </form>
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
  <script src='Scripts/AlertScripts.js'></script>

  <script>
    var subjects = [
      ["---", "ENGLISH", "MATHS-1", "SCIENCE", "ICT", "WPC", "EGP"],
      ["---", "PIC", "BEC", "EEC", "MATHS-2", "BCC", "CPH", "WPD"],
      ["---", "CPP", "DSU", "CGR", "DBMS", "DTE"],
      ["---", "JPR", "SEN", "DCC", "MIC", "VB.NET"],
      ["---", "EST", "AJP", "STE", "CSS", "ACN", "ADM", "ITR", "CPP-1"],
      ["---", "MGT", "MAD", "ETI", "WBP", "NIS", "DWMT", "EDI", "CPE-2"]
    ];

    function TeacherAtt() {
      gem = "<div class='row  my-4 mx-2'>";
      var y = document.getElementById("years").options[document.getElementById("years").selectedIndex];
      var id = y.index;
      arr = subjects[id];

      //  alert(arr);
      for (var i = 1; i < arr.length; i++) {
        gem += "               <div class='col-xl-4'>";

        gem += "<div class='form-group'>";
        gem += "<label>" + arr[i] + "</label>";
        gem += "<input type='text' class='form-control' placeholder='Teachers Name'" + "name='t" + i + "' id='" + i + "'/> ";
        gem += "</div>";
        gem += "</div>";

        // str += "<div class='col-lg-4 col-xl-4 my-2 '><label>" + arr[i] + "</label> <input type='text' name='t" + i + "' id='" + i + "'/></div>";
      }
      document.getElementById("TeacherAttach").innerHTML = gem;

    }
    function Alert(type, title, message) {
    array = ["primary", "secondary", "success", "danger", "warning", "info", "light", "dark"];

    scriptS = "<div class='alert alert-" + type + " alert-dismissible col-lg-12 col-xl-12' role='alert'>";
    scriptS += "<h4 class='alert-heading'>" + title + "</h4><hr>";

    scriptS += "<p>" + message + "</p>";
    scriptS += " <button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
    scriptS += "<span aria-hidden='true'>&times;</span></button></div>";
    return scriptS;
  }
  function setMessage(){
    document.getElementById('message').innerHTML=Alert('danger','Error','Data Already Inserted');
  }
  </script>


</body>

</html>