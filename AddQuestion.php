<?php  if(!isset($_SESSION)){@session_start();} 
    if(isset($_SESSION['Username'])) { $username = $_SESSION['Username'] ; ob_start();} else { $_SESSION['Username'] = "Unknown" ; }
    date_default_timezone_set('America/Lima');
    require_once("Include/functions.php") ; 
    $time=time();
    $date = date("Y-m-d",$time) ; 
    $database = new Database();
    $database->Connect();
    $file_ = new File();



echo $username ; 






?>