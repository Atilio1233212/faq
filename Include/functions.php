<?php if(!isset($_SESSION)){session_start();} ob_start(); 

class Database{ 
var $conn ;
var $counter; 
var $sql;
var $lines_string;






Function Connect(){ 
  $actual_link =  $_SERVER['HTTP_HOST'];
  if ($actual_link == "localhost"){

//echo $actual_link; echo "<br />"; // Debug Pourposes  
$servername = "localhost";
$username = "root";
$password = "";
$database = "imt";

  } Else {

//echo $actual_link; echo "<br />"; // Debug Pourposes  
$servername = "Localhost";
$username = "connecti_imt";
$password = "FERfis@302050";
$database = "connecti_imt";


  }





$this->counter= 1 ; 
try {
    $this->conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  echo "Connected successfully <br />"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
echo "<br />".$username;
echo "<br />";
    }} 



// Insert user into DB starts Function here // *********************
Function insertUser($username ="name", $password = "password", $email = "email") {
$statement = $this->conn->prepare("INSERT INTO users (id, username, password, email) VALUES (NULL, '$username', '$password', '$email')");
       $statement->execute();}
// Insert user into DB ends Function here // *********************






// Count a number of rows in DB and return a value starts here  // **********************
function countAll(){
  
  if (strlen($this->sql) <= 3 ) {$this->sql = "select * from information" ; }

   $stmt = $this->conn->prepare($this->sql);
    try { $stmt->execute();}
    catch(PDOException $e){echo $e->getMessage();}

return $stmt->rowCount();}

// Count a number of rows in DB and return a value ends here  // **********************




// function filter data starts here 

function Clean($vvalue = "123.hhhhh"){
  if(isset($_POST[$vvalue])) { $value = $_POST[$vvalue] ; } else { $value = $vvalue ; }


if (strlen($value) <= 1 || strlen($value) >= 10000) { header("location: index.php?id=Wronglength") ; exit(); } else {

 $value = htmlentities($value);
 return $value; }}
// function filter data ends  here 






// Function Extract Username Starts  Here 
function extractInfo($query = "SELECT * FROM users", $field = "id") {

$this->Connect(); 
$handler = $this->conn; 
$query2 = $handler->query($query);
while ($r = $query2->fetch(PDO::FETCH_OBJ)) {
  return $r->$field; 
}


}


// Function Extract Username Ends  Here 












// Class Database ends here 

}







































































































Class file{

function read($url='working.html'){




//fopen opens webpage in Binary
$handle=fopen($url,"rb");
// initialize
$Database->lines_string="";
// read content line by line
do{
    $data=fread($handle,1024);
    if(strlen($data)==0) {
        break;
    }
    $Database->lines_string.=$data;
}while(true);
//close handle to release resources
fclose($handle);
//output, you can also save it locally on the server
$Database->counter = strlen($Database->lines_string);







}








}







?>