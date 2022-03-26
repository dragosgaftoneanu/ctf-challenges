<?php
session_start();
if(strlen($_SESSION['user']) == 0)
{
	header("Location: index.php");
	die();
}
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Platforma Intranet</title>

<link rel="stylesheet" href="css/style.default.css" />
<link rel="stylesheet" href="css/responsive-tables.css">
    
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/modernizr.min.js"></script>
<script src="js/jquery.cookies.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script src="js/flot/jquery.flot.min.js"></script>
<script src="js/flot/jquery.flot.resize.min.js"></script>
<script src="js/responsive-tables.js"></script>
<script src="js/jquery.slimscroll.js"></script>

<script src="js/custom.js"></script>

<!--[if lte IE 8]>
<script src="js/excanvas.min.js"></script>
<![endif]-->

</head>

<body>

<div id="mainwrapper" class="mainwrapper">
    
    <div class="leftpanel">
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Meniu</li>
                <li><a href="dashboard.php"><span class="iconfa-laptop"></span> Acasa</a></li>
				<li><a href="dashboard.php?page=admin"><span class="iconfa-cog"></span> Administrare</a></li>
				<li><a href="dashboard.php?page=dev"><span class="iconfa-pushpin"></span> Actualizari</a></li>
                <li><a href="logout.php"><span class="iconfa-off"></span> Deconectare</a></li>
            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->
    
    <div class="rightpanel">

        <div class="maincontent">
            <div class="maincontentinner">
                        
				<?php
					if($_GET['page'] == "dev")
						include "app-pages/dev.php";
					elseif($_GET['page'] == "admin")
						include "app-pages/admin.php";
					else
						include "app-pages/index.php";
				?>
                
                <div class="footer">
                    <div class="footer-left">
                        <span>Copyright &copy; 2020. Awesome Company. Toate drepturile rezervate.</span>
                    </div>
                    <div class="footer-right">
                        <span>Design de: <a href="http://themepixels.com/">ThemePixels</a></span>
                    </div>
                </div><!--footer-->
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->
</body>
</html>













































































<!-- 

If you scrolled until here, just wanted to let you know that I likes trains

    _____
 ___ |[]|_n__n_I_c
|___||__|###|____}
 O-O--O-O+++--O-O 
 
   ~~~~ ____   |~~~~~~~~~~~~~|
  Y_,___|[]|   | Go Boilers! |
 {|_|_|_|PU|_,_|_____________|
//oo---OO=OO     OOO     OOO

   OO O o o o...      ______________________ _________________
  O     ____          |                    | |               |
 ][_n_i_| (   ooo___  |                    | |               |
(__________|_[______]_|____________________|_|_______________|
  0--0--0      0  0      0       0     0        0        0
  
-->