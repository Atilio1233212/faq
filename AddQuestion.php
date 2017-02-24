<?php  
if(!isset($_SESSION)){@session_start();} 
    if(isset($_SESSION['Username'])) { $username = $_SESSION['Username'] ; ob_start();} else { $_SESSION['Username'] = "Unknown" ; }
    date_default_timezone_set('America/Lima');
    require_once("Include/functions.php") ; 
    $time=time();
    $date = date("Y-m-d",$time) ; 
    $database = new Database();
    $database->Connect();
    $file_ = new File();
?>
<style type="text/css">
#Title {
	text-align: center;
}
#container{
background-color:#F8FAFB;	
}
</style>

<div id="container">
<form id="form1" name="form1" method="post" action="AddAnswer.php">

  <table width="90%" border="0">
    <tr>
      <td width="63%"><label for="Question" id ="qtitle">Question</label>
:  
  <input name="Question" type="text" id="Question" accesskey="10" tabindex="10"  size="60" /></td>
      <td width="7%">&nbsp;<div id="questionMark" style='width: 25px;'>&#10068;</div></td>
      <td width="30%"><input onchange="questionMark();"name="checkbox" type="checkbox" id="checkbox" checked="checked" value ="1"/>
        <label for="checkbox"></label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>This Question is related to : <br /><br />
  </p>
  <table width="90%" border="0" cellspacing="3" style="text-align: left;">
    <tr>
      <th width="16%" scope="row">DMM</th>
      <td width="84%"><input type="checkbox" name="dmm" id="dmm" tabindex="20"  value='1'  />
      <label for="dmm"></label></td>
    </tr>
    <tr>
      <th scope="row">Site Core</th>
      <td><input type="checkbox" name="sitecore" id="sitecore" tabindex="30"  value='1' />
      <label for="sitecore"></label></td>
    </tr>
    <tr>
      <th scope="row">Step</th>
      <td><input type="checkbox" name="step" id="step" tabindex="40"  value='1' />
      <label for="step"></label></td>
    </tr>
    <tr>
      <th scope="row">Vignette</th>
      <td><input type="checkbox" name="vignette" id="vignette" tabindex="50"  value='1' />
      <label for="vignette"></label></td>
    </tr>
    <tr>
      <th scope="row">Other</th>
      <td><input type="checkbox" name="other" id="other" tabindex="60"  data-toggle="checkbox-x" value='1'  />
      <label for="other"></label></td>
    </tr>
    <tr>
      <th scope="row">All</th>
      <td><input type="checkbox" name="all" id="all" tabindex="70" value='1'  />
      <label for="all"></label></td>
    </tr>
</table>
  <p>
    <center><input type="submit" name="submit" id="submit" value=" Next  " tabindex="80"  /></center>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</div>
<script type="text/javascript">
function questionMark(){

     var x = document.getElementById("checkbox").checked;

if(x == true) {var y = '&#10068;'; var q = 'Question  '; } else {var y = " &nbsp;&nbsp;" ; var q = "Title  "; }
document.getElementById("questionMark").innerHTML = y ; 
document.getElementById("qtitle").innerHTML = q; 
}

</script>
