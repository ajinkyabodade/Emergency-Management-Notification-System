<?php
include("dbconnect.php");

$error = '';
if(isset($_POST['login']))
{

$email =  mysqli_real_escape_string($conn,trim($_POST['email']));
$password =  mysqli_real_escape_string($conn,$_POST['password']);



if($email=='' || $password=='')
{
$error='All fields are required';
}



date_default_timezone_set('Asia/Calcutta');          


$sql = "select * from adminlogin where email='".$email."' and password = '".$password."'";

$q = $conn->query($sql);
if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$_SESSION['email']=$res['email'];
$_SESSION['adminid']=$res['id'];
$_SESSION['fname']=$res['fname'];

echo '<script type="text/javascript">window.location="index.php"; </script>';


}else
{
$error = 'Invalid Username or Password';
}




}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Login</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="login-page" background="../../../images/back.jpg">
    <div class="login-box" style="margin-top: 140px;">
        <div class="logo">
            <a href="javascript:void(0);"> Admin Login</a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="alogin.php">
                    <?php if ($error=='') { 


                         ?> <div class="msg">Sign in to start using EMNS</div> <?php
                    }
                    else
                        {
                            ?> <div class="msg"><?php echo $error; ?></div> <?php
                        }
                        ?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Enter Your Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" name="login" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/examples/sign-in.js"></script>
</body>