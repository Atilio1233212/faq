<?php if(!isset($_SESSION)){session_start();} ob_start(); ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <title>Connection BAY | Manage and Engage With Professional Networks </title>


    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">CB</h1>

            </div>
            <h3>Management System</h3>
            <p>Support and Development Platform
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <?php 
              if( isset($_SESSION['message'])  && strlen($_SESSION['message']) >= 3) {
                $message = $_SESSION['message'] ; 
              echo "

             <div class='alert alert-danger fade in'>
    <a  class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>$message.</strong>
  </div>   ";     }  ?>






           

                 

          






          
            <form class="m-t" role="form" action="catch.php" method="post">
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <!-- <a href="#"><small>Forgot password?</small></a> -->
                <!-- <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
            <p class="m-t"> <small>Fernando Fischer  &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php 
$_SESSION['message'] = NULL ; 




?>