<?php if(!isset($_SESSION)){session_start();} ob_start(); 
require_once("Include/functions.php") ; 
//$Database = new Database(); ?> 


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Internal Management Tool | Register New Account</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IMT</h1>

            </div>
            <h3>Register to IMT</h3>
           <?php 
              if( isset($_SESSION['message'])  && strlen($_SESSION['message']) >= 3) {
                $message = $_SESSION['message'] ; 
              echo "

             <div class='alert alert-danger fade in'>
    <a  class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>$message.</strong>
  </div>   ";     }  ?>


            <form class="m-t" method="post" role="form" action="catchReg.php">
                <div class="form-group">
                    <input type="text" class="form-control" Name="username" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"  name="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control"  Name="password"  placeholder="Password" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox" required=""><i></i> Agree the terms and policy </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="index.php">Login</a>
            </form>
            <p class="m-t"> <small>Fernando Fischer &copy; 2016</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
<?php 
$_SESSION['message'] = NULL ; 




?>