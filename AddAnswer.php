<?php  
if(!isset($_SESSION)){@session_start();} 
    if(isset($_SESSION['Username'])) { $username = $_SESSION['Username'] ; ob_start();} else { $_SESSION['Username'] = "Unknown" ; }
    date_default_timezone_set('America/Lima');
    require_once("Include/functions.php") ; 
    $time=time();
    $date = date("Y-m-d",$time) ; 
    $database = new Database();
    $database->Connect();


   
if(isset($_POST['Question'])) {$Question = $_POST['Question'] ; } else {$Question = "none";}
if(isset($_POST['checkbox']) && $_POST['checkbox'] == '1' ){ $question = true; } else {$question = false;}
if(isset($_POST['dmm']) && $_POST['dmm'] == '1' ){ $dmm = true;  } else {$dmm = false ; }
if(isset($_POST['step']) && $_POST['step'] == '1' ){ $step = true;  } else {$step = false;}
if(isset($_POST['sitecore']) && $_POST['sitecore'] == '1' ){ $sitecore = true; } else {$sitecore = false;}
if(isset($_POST['vignette']) && $_POST['vignette'] == '1' ){ $vignette = true;  } else {$vignette = false ;}
if(isset($_POST['other']) && $_POST['other'] == '1' ){ $other = true;  } else {$other = false ; }
if(isset($_POST['all']) && $_POST['all'] == '1' ){ 
$dmm = true ; 
$step = true; 
$sitecore = true; 
$vignette = true; 
$other = true ; 

} 




?>

<html>
<head>
	<title></title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p><center><?php  echo'<b>'. $Question.'</b>'; ?></center></p>
  <p>Short Description.</p>
  <p>
    <label for="shortdescription"></label>
    <textarea name="shortdescription" id="shortdescription" cols="90" rows="5" tabindex="10"></textarea>
  </p>
  <p> Full Description/Solution: </p>
  <p>
    <label for="description"></label>
    <textarea name="description" id="description" cols="90" rows="5" tabindex="20"></textarea>
  </p>
  <p>Add PDF File</p>
  <input type="file" name="datafile" size="40">
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit Question " tabindex="50" />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>

<?php 



 

?>