<?php  if(!isset($_SESSION)){session_start();} ob_start(); 
// echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo "<br /><br />" ;
require_once("Include/functions.php") ; 
$Database = new Database();

if(isset($_POST['username'])) { $user = $Database->Clean("username") ; }
if(isset($_POST['password'])) { $password = sha1($Database->Clean("password")) ; }
if(isset($_POST['email']))    { $email = $Database->Clean("email") ; }
$Database->connect();


// Verify User Credentiasl 
                $Database->sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND status = 'Active'  " ; 
              if ($Database->countALL() >= 1) {
               $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND status = 'Active' "; 
               $_SESSION['Username'] = $Database->extractInfo($query, "username");
                $_SESSION['Userid'] = $Database->extractInfo($query, "id");
                $_SESSION['message'] = "0"; header("Location: Main.php") ; exit(); } else{
                             
                             $Database->conn = NULL; 
              	            $_SESSION['message'] =  "Wrong Username/Password<br />Combination";   header("Location: index.php"); exit(); 
              }
// Verify User Credentiasl 







?>