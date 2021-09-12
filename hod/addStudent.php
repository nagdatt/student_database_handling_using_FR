<?php
session_start();
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

  <title>AddStudent | Admin</title>
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
            <a href="#" class="dropdown-item">
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
            <div class="card card-primary col-xl-12 col-lg-12 col-12 my-4">
              <div class="card-header my-1">
                <h3 class="card-title">Add Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post">
                <div class="card-body">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xl-4">
                        <label for="exampleInputEmail1"> First Name</label>
                        <input type="text" class="form-control" name="fname" id="" placeholder="First Name">
                      </div>
                      <div class="col-xl-4">
                        <label for="exampleInputEmail1"> Middle Name</label>
                        <input type="text" class="form-control" name="mname" id="" placeholder="Middle Name">
                      </div>
                      <div class="col-xl-4">
                        <label for="exampleInputEmail1"> Last Name</label>
                        <input type="text" class="form-control" name="lname" id="" placeholder="Last Name">
                      </div>
                    </div>
                    <div class="row my-2">
                      <div class="col-xl-4">
                        <label for="exampleInputEmail1" >Birth day</label>
                        <input type="date" name="bdate" class="form-control" id="">
                      </div>
                      <div class="col-xl-4 col-lg-4 ">
                      <label for="exampleInputEmail1">Select Year</label>
                        <select class="form-control "  name="class" id="class">
                          <option name="1" value="1">First Year (1st Yr)</option>
                          <option name="2" value="2">Second Year (2nd Yr)</option>
                          <option name="3" value="3">Third Year (3rd Yr)</option>
                         
                        </select>
                      </div>
                      <div class="col-xl-4">
                        <label for="exampleInputEmail1">Roll No</label>
                        <input type="number" name="roll" class="form-control" min="1500" max="" id="">
                      </div>

                    </div>
                    <div class="row my-2">
                      <div class="col-xl-4">
                        <label for="exampleInputEmail1">Enrollment Number</label>
                        <input type="number"  min="1700950000" name="enroll" class="form-control" id="">
                      </div>
                      <div class="col-xl-4 col-lg-4 ">
                      <label for="exampleInputEmail1">Address</label>
                      <input type="text"  name="address" class="form-control" id="">
                      </div>
                      <div class="col-xl-4">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email"  name="mail"  class="form-control"  id="">
                      </div>

                    </div>
                    <div class="row my-2">
                      <div class="col-xl-4">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="number" name="phno" class="form-control" id="">
                      </div>
                      <div class="col-xl-4 col-lg-4 ">
                      <label for="exampleInputEmail1">Parent Phone Number</label>
                      <input type="number" name="pphno" class="form-control" id="">
                      </div>
                    </div>
                    <div class="row my-2">
                      <div class="col-xl-4">
                        <label for="exampleInputEmail1" accept="image/jpg,image/jpeg, image/png">Image 1</label>
                        <input type="file"  name="img1" required="true" class="form-control" id="img1">
                      </div>
                      <div class="col-xl-4 col-lg-4 " >
                      <label for="exampleInputEmail1">Image 2</label>
                      <input type="file"  name="img2" required="true" class="form-control" id="img2" accept="image/jpg,image/jpeg, image/png">
                      </div>
                      <div class="col-xl-4 col-lg-4 ">
                      <label for="exampleInputEmail1">Image 3</label>
                      <input type="file"  name="img3" required="true" class="form-control" id="img3" accept="image/jpg,image/jpeg, image/png">
                      </div>
                    

                    </div>

                  </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
<?php
require_once('Excel.php');
require_once('Snap2.php');

function startsWith ($string, $startString) 
	{ 
		$len = strlen($startString); 
		return (substr($string, 0, $len) === $startString); 
	} 
  $servername = "localhost";
$username = "root";
$password = "";
$db="studdetails"; 
$conn = new mysqli($servername, $username, $password,$db);
$tableName="";
if(isset($_POST["submit"]))  
 {  
$fname=$_POST['fname'];$mname=$_POST['mname'];$lname=$_POST['lname'];
$bdate=$_POST['bdate'];$roll=$_POST['roll'];$enroll=$_POST['enroll'];
$address=$_POST['address'];$mail=$_POST['mail'];$phno=$_POST['phno'];
$pphno=$_POST['pphno'];
$Names = '/^[a-zA-Z ]+$/'; 
$rollRe="/\d{4}/";
$enrollRe="/\d{10}/";
$emialRegex="/^[a-zA-z]+[a-zA-z0-9\_\.]*@[a-z]+\.[a-z]{2,6}$/";
$phoneRe="/\d{10}/";
$class=$_POST['class'];
$range=false;
if($class=="First Year")
{$range=($rollRe>=1500 && $rollRe<=1620)?true:false;
$GLOBALS['tableName']="firstyear";}
else if($class=="Second Year")
{$range=($rollRe>=2500 && $rollRe<=2620)?true:false;
$GLOBALS['tableName']="secondyear";
}
else if($class=="Third Year")
{$range=($rollRe>=3500 && $rollRe<=3620)?true:false;
$GLOBALS['tableName']="thirdyear";
}
$_SESSION['tableName2']=$tableName;
if(preg_match($Names,$fname) && preg_match($Names,$mname) && preg_match($Names,$lname))
{
	if(preg_match($rollRe,$roll) && preg_match($enrollRe,$enroll)  ){
		
		if(preg_match($emialRegex,$mail) && preg_match($phoneRe,$phno) && preg_match($phoneRe,$pphno)){
			 $file1 = addslashes(file_get_contents($_FILES["img1"]["tmp_name"]));  
	  $file2 = addslashes(file_get_contents($_FILES["img2"]["tmp_name"]));  
	  $file3 = addslashes(file_get_contents($_FILES["img3"]["tmp_name"])); 
	  $tb=$GLOBALS['tableName'];
	  
$tb=$GLOBALS['tableName'];	  
      $sql ="insert into $tb  values('$fname','$mname','$lname','$bdate',$roll,$enroll,'$address','$mail',$phno,$pphno,'$file1','$file2','$file3')";
         $conn->query( 'SELECT @@global.max_allowed_packet' );
		 if ($conn->query($sql) === TRUE) {
			move_uploaded_file($file1,"../MainDataOfDepartmentImages/".$tb."/".$enroll."/image1.jpg");
	  move_uploaded_file($file2,"../MainDataOfDepartmentImages/".$tb."/".$enroll."/image2.jpg");
	  move_uploaded_file($file3,"../MainDataOfDepartmentImages/".$tb."/".$enroll."/image3.jpg");
			 $addd=Add();
			 if(true){
				 $Farr1=array($_FILES["img1"]["name"],$_FILES["img2"]["name"],$_FILES["img3"]["name"]);
				 $Farr2=array($_FILES["img1"]["tmp_name"],$_FILES["img2"]["tmp_name"],$_FILES["img3"]["tmp_name"]);
				 
				 $addImgPath=AddImageToPath($Farr1,$Farr2,$tb,$enroll);
				  echo "<script>alert('Student Added SucessFully'+$addImgPath);</script>";
			 }
		 }else{
			  echo "<script>alert('Insert Once Again !!!It's Invalid Data1');</script>";
		 } 
		}
		else{
			echo "<script>alert('Invalid Data!! Insert Data Again 2' );</script>";
		}
	}
	else{
			echo "<script>alert('Invalid Data!! Insert Data Again3 ' );</script>";
		}
}
else{
			//echo "<script>alert('Invalid Data!! Insert Data Again ');</script>";
		}    
		
		
 }  
 function Add(){
	 $servername = "localhost";
$username = "root";
$password = "";
	 $sub=array("firstyear"=>array("ENG","MATHS-1","SCIENCE","ICT","WPC","EGP","PIC","BEC","EEC","MATHS-2","BCC","CPH","WPD"),
  "secondyear"=>array("CPP","DSU","CGR","DBMS","DTE","JPR","SEN","DCC","MIC","VB.NET"),
  "thirdyear"=>array("EST","AJP","STE","CSS","ACN","ADM","ITR","CPP-1","MGT","MAD","ETI","WBP","NIS","DWMT","EDI","CPE-2"));
	
	 $arr=$sub[ $GLOBALS['tableName']];
	 $conn2 = new mysqli($servername, $username, $password,"teachers_att");
	 $result=$conn2->query("select * from attachment");

	while($row = $result->fetch_assoc()) {
		$raw= $row["Subjects"];
		 $m=array_search($raw,$arr);
		
		
    if($arr[$m]==$row["Subjects"]){
		 $dm=date("m");
		 $str="";
		 if(startsWith($dm,"0"))
			 $str=$dm[1];
		 else 
			 $str=$dm;

	 for($i=$str;$i<$str+6;$i+=1)
	 {
	$path="C:/xampp/htdocs/GUIFinal/MainDataOfDepartment/".$row["Teacher_Name"]."/".$row["Subjects"]."_".($i)."_20".date("y")."";
	AddExcelData($GLOBALS['fname'],$GLOBALS['mname'],$GLOBALS['lname'],$GLOBALS['roll'],$GLOBALS['enroll'],$path,$i,date("y"));
	
	 }
	
	}

 }
 return true;
 }
?>