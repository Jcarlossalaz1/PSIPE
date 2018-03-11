<?php
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['matricula'])) 
{
    session_destroy();
    header('Location: index.html'); 
}

$matricula=$_SESSION['matricula'];
?> 


<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <title>UPVM PSIPE-1</title>
    	<meta name="keywords" content="" />
		<meta name="description" content="" />

        <meta name="viewport" content="width=device-width">
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,300,700' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/templatemo_main.css">
    </head>
    <body>
        <div id="main-wrapper">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 affix text-center" style="z-index: 1;">
                <h1 class="templatemo-site-title">
                        <!--<a href="#">PSIPE-1</a>-->
                        ALUMNOS
                        <img src="images/btn-menu.png" alt="main menu" id="m-btn" class="pull-right visible-xs visible-sm" >
                </h1>

                <ul id="responsive" style="display:none" class="hidden-lg hidden-md"></ul><!-- /.responsive -->
            </div>

            <div class="menu visible-md visible-lg">
                <ul id="menu-list">
                    <!--<li class="active home-menu"><a href="#home">Confide</a></li>
                    <li class="about-menu"><a href="#about">Test...</a></li>-->
                    <li class="services-menu"><a href="#services">Test...</a></li>
        
                         <li><a rel="nofollow" target="_parent" href="newlogout.php" class="external">Cerrar Sesión</a></li>
                </ul>
            </div><!-- /.menu -->

            <div class="image-section">
                <div class="image-container">
                    <img src="images/headerBackground2.jpg" id="home-img" class="main-img inactive" alt="Home">
                    <img src="images/Testt.jpg" id="services-img" class="inactive" alt="Services">
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-6 col-md-offset-6 templatemo-content-wrapper">
                    <div class="templatemo-content">
                        
                        <section id="home-text" class="active templatemo-content-section">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                
<ul>		
<h2><p align="center"><li>Bienvenido  <? echo $matricula;?> </li></p></h2>

</ul>
    </div>
                        </section><!-- /.home-text -->   

                        
                        <section id="services-text" class="inactive">
                           <h4><LI><a  href="index.php" >Ir a Test</a></LI>

                                                    </section><!-- /.services-text --> 
                    </div><!-- /.templatemo-content -->  
                </div><!-- /.templatemo-content-wrapper --> 
            </div><!-- /.row --> 

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
                    <p class="footer-text">
                    	<font color="black"><span>Copyright &copy; 2016 UPVM</font>
                	</p>
                </div><!-- /.footer --> 
            </div>

	</div><!-- /#main-wrapper -->
        
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div><!-- /#preloader -->
        
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/templatemo_script.js"></script>
        <!-- templatemo 398 nature -->
    </body>
</html>