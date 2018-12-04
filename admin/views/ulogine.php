<?php
include("dbconnect.php");

$error = '';
if(isset($_POST['login']))
{


$adharno =  mysqli_real_escape_string($conn,$_POST['adharno']);



if($adharno=='')
{
$error='All fields are required';
}

    

$_SESSION['adharno']=$adharno;
$_SESSION['ufname']=$adharno;
$_SESSION['uemail']='';
$_SESSION['userid']=$adharno;
$sql = "select * from user where adharno='".$adharno."' ";

$q = $conn->query($sql);
if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$mobno=$res['mobno'];





// Account details
	$apiKey = urlencode('frEfnXI0iPQ-24fbHuIbWI97yqRmR75G4WKKybTj7M');
	
	// Message details
	

	$numbers = array($mobno);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('Your OPT For EMNS Emergency Login is: 2551');

	$numbers = implode(',', $numbers);

	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;









echo '<script type="text/javascript">window.location="ulogine1.php"; </script>';


}
else{
	$error='Invalid Aadhaar Id';
}
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Emergency User Login</title>
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
            <a href="javascript:void(0);">Emergency User Login</a>
        </div>
        <div class="card">
            <div class="body">
                <form id="" method="POST" action="ulogine.php">
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
                            <input type="text" class="form-control" name="adharno" placeholder="Enter Your Aadhar No" required autofocus>
                        </div>
                    </div>
                  
                    <div class="row">
                        
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" name="login" type="submit">Send OTP</button>
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