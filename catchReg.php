<?php  if(!isset($_SESSION)){session_start();} ob_start(); 
//echo $_SERVER['HTTP_HOST'];
//echo "<br /><br />" ; 
require_once("Include/functions.php") ; 
$Database = new Database();

if(isset($_POST['username'])) { $user = $Database->Clean("username") ; $user = strtolower($user);  $user = ucwords($user); }
if(isset($_POST['password'])) { $password = sha1($Database->Clean("password")) ; }
if(isset($_POST['email']))    { $email = $Database->Clean("email") ;  $email = strtolower($email) ; }
$Database->connect();


// Verify User Credentiasl 
// *********                  $Database->sql = "SELECT * FROM users WHERE username = '$user' AND password = '$password' AND status = 'Active'  " ; 
// *********                  ECHO $Database->countALL() ; 
// Verify User Credentiasl 



 
// Verify and redirect if Email has been alreday regitered *******

$Database->sql = "SELECT * FROM users WHERE email = '$email' " ; 
if ($Database->countALL() >= 1 ) {


	       $_SESSION['message'] =  "An Account Associated With This Email<br />Already Exists  ";   header("Location: register.php"); exit();  }

 else
         {
               $Database->insertUser($user, $password, $email) ;
                $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND status = 'Active' "; 
               $_SESSION['Username'] = $Database->extractInfo($query, "username");
               $Database->conn = NULL ; 
         	    Header("Location: Main.php"); exit() ; }
         	  

// VVerify and redirect if Email has been alreday regitered *******










?>