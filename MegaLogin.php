<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href=".plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>SESP</b> Solapur</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form  method="post">
      <div class="mb-3">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select</label>
                        <select class="form-control " name="select">
                          <option>HOD</option>
                          <option>Teacher</option>
                          
                        </select>
                      </div>
                    </div>
        
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row ">
          
          <!-- /.col -->
          <div class="col-12">
            <input type="submit"  name="login"  value=" Sign In " class="btn btn-primary btn-block"/ >
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
<?php
if(isset($_POST['login'])){
$servername = "localhost";
$username = "root";
$password = "";
$db="tables";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
    echo "<script>promt('Connection Error')</script>";
}
//echo "Connected successfully";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$user=$_POST['select'];
$m=array(1=>'hod/index.php',2=>'Teacher/index.php');
$c=0;
while($row = $result->fetch_assoc()) {
       //echo "".$row['username']."/t".$row['password']."<br>";
       if($user=='HOD'){
                if($row['password']==$_POST['password'])
                $c=1;
       }
       if($user=='Teacher'){
                if($row['password']==$_POST['password'])
                $c=2;
       }
       if($user=='Student'){
                if($row['password']==$_POST['password'])
                $c=3;
       }
   }

   if($c>0)
  {
      //header("Location:C:/xampp/htdocs/GUIFinal/HOD/MainGUI.html");
      echo $m[$c];
    echo "<script>window.open('$m[$c]','_self');</script>";
    echo $m[$c];
    $c=0;
  }
   else
   echo "<script>alert('Login not successfull,Enter valid password');</script>";

}
?>
