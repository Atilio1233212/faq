    <?php   if(!isset($_SESSION)){@session_start();} 
    if(isset($_SESSION['Username'])) { $username = $_SESSION['Username'] ; ob_start();} else { $_SESSION['Username'] = "Unknown" ; }
    date_default_timezone_set('America/Lima');
    require_once("Include/functions.php") ; 
    $time=time();
    $date = date("Y-m-d",$time) ; 
    $database = new Database();
    $database->Connect();
    $file_ = new File();


     ?>
    <!DOCTYPE html>
    <html>

    <head>
        




        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
         <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- Toastr style -->
        <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Connection BAY | FAQ  </title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>

        <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="img/profile_small.png" />
                                 </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['Username'];  ?></strong>
                                 </span> <span class="text-muted text-xs block">Consultant<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            FAQ
                        </div>
                    </li>
                    
    <?php 
    require_once("Include/leftnav.php")  ; ?>








            </div>
        </nav>

            <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
            <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
           
    <!-- INSERT PHP STARTS  HERE -->


    <?php include("Include/topright.php");  ?>


    <!-- INSERT PHP ENDS  HERE -->

                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>

        <!-- Modal Large Window -->  

<div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Home</h4>
                                            <small class="font-bold">Title Here</small>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <iframe scrolling="no" frameBorder="0" width="700" height="600" src="NewIncidence.php"></iframe> 
                                    

                                             
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- Modal Large Window --> 
        <!-- <div id="hidden_div" style="display: none;">
            <div class="button" style="margin-left:100px;" data-toggle="modal" data-target="#myModal5">Upload Files</div></div> -->
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2> Home </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"> </a>
                        </li>
                        <li class="active">
                            <strong></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        <a onclick="openWindow()" class="btn btn-primary" data-toggle="modal" data-target="#myModal5"> Add Question</a>
                    </div>
                </div>
            </div>

            
              
                  <!--  content goes here  -->
<button class="accordion" Style="background-color: #566573; color: #fff; border-bottom: 1px solid #fff; margin-bottom: 2px; ">
    Guia Pra crear Landing Pages en Site Core. </button>
<div class="panel" style="background-color: #F3F3F4; color: #292929; ">

<div id="pdf">
  <object width="100%" height="500" type="application/pdf" data="Sitecore-Landing-Pages.pdf?#zoom=100&scrollbar=0&toolbar=0&navpanes=0" id="pdf_content">
    <p>Insert your error message here, if the PDF cannot be displayed.</p>
  </object>
</div>

  
</div>

<button class="accordion" Style="background-color: #566573; color: #fff; border-bottom: 1px solid #fff; margin-bottom: 2px;" >Login en Site Core   </button>
<div class="panel">
<iframe width="700" height="415" src="https://www.youtube.com/embed/t3wSZD2Zgws" frameborder="0" allowfullscreen></iframe>
</div>


<button class="accordion" Style="background-color: #566573; color: #fff; border-bottom: 1px solid #fff; margin-bottom: 2px;  ">Question 2 </button>
<div class="panel">
Aca pondremos tutoriales en escritura 
</div>




                  <!--  content ends here --> 
                  
             
            
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
 
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>


    <!-- Peity demo data -->
    <script src="js/demo/peity-demo.js"></script>
<script type="text/javascript">

function openWindow(){
 document.getElementById('hidden_div').style.display = "block";


}


function changeStatus(link ='test') {
    var myWindow = window.open("Test.php?id="+link, "", "width=800,height=500");
}

</script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>

<style type="text/css">
      tr{

        background-color:#fff; 
        border-bottom:3px solid #FFF important!;
      }

      tr:hover{

        background-color:#000; 
      }

        </style>

<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd; 
}

div.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
}
</style>


</body>

</html>
