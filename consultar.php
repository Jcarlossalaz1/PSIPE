<?php
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['nempleado'])) 
{
  header('Location: login3.php'); 
  exit();
}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test</title>
<link href="css/stylealt.css" rel="stylesheet" type="text/css" />
<!--[if IE 5]>
	<style type="text/css"> 
		#sidebar1 {width:230px}
	</style>
<![endif]-->
<!--[if IE]>
	<style type="text/css"> 
		#mainContent {zoom:1}
	</style>
<![endif]-->
<script type="text/javascript" src="js/jquery-1.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(function(){
	$('#menu a')
		.css( {backgroundPosition: "-20px 35px"} )
		.mouseover(function(){$(this).stop().animate({backgroundPosition:"(-20px 94px)"}, {duration:500})})
		.mouseout(function(){$(this).stop().animate({backgroundPosition:"(40px 35px)"}, {duration:200, complete:function(){$(this).css({backgroundPosition: "-20px 35px"})}})})
});
</script>
<script type="text/javascript" charset="utf-8" id="injection_graph_func" src="js/injection_graph_func.js"></script>
</head>
<body>
<!-- #container -->
<div id="container">
<!-- #header -->
	<div id="header">
		<div id="mainMenu">
			<ul id="menu">
				<li><a class="buttonPosition" href="index3.php">Home</a></li>
				<li><a class="buttonPosition" href="altas.php">Alta de alumnos</a></li>
				<li><a class="buttonPosition" href="consultar.php">Consultar Resultados</a></li>
				<li><a class="buttonPosition" href="modificar.php">Modificar alumnos</a></li>
				<li><a class="buttonPosition" href="logout.php">Cerrar Sesion</a></li>
			</ul>
		</div>
		<div class="headerBody">
			
		</div>
	</div><div class="inner_copy"></div>
<!-- / #header -->



<!-- #mainContent -->
	<div id="mainContent">
		<h1>&nbsp;</h1>
		<h2>Si se muestra una pagina en blanco al pedir una consulta por ALUMNO o GRUPO hacer lo siguiente...</h2><br>
                <h3>1. Ingresar la matricula o el grupo que desea y hacer la consulta.<br>
                2. Pegar en la URL "http://selfconfidence.com.mx/ejecuta.php" si es ALUMNO o <br>"http://selfconfidence.com.mx/ejecutag.php" si es GRUPO  </h3>
                       <div id="promo-wrapper">
                        <section id="promo">
                           <div align="center"> <h2 class="pad_bot1">Consultar por Alumno</h2><br />
                               <form name="consulta1" method="post" action="resultados.php">
                               Matricula:<input type="text" name="matricula" id="matricula"/>
                               <input type="submit" value="Aceptar">
                               </form>
                            </div>                                                     
                        </section>
                       </div>
                       
                       
                   <div id="promo-wrapper">
                        <section id="promo">
                           <div align="center"> <h2 class="pad_bot1">Consultar por Grupo</h2><br />
                               <form name="consulta1" method="post" action="resultados_grupal.php">
                               Grupo:<input type="text" name="grupo" id="grupo"/>
                               <input type="submit" value="Aceptar">
                               </form>
                            </div>                                                     
                        </section>
                    </div>
        
        
  </div>
<!-- / #mainContent -->
	<br class="clearfloat" />
<!-- #footer -->
<div id="footer">
	<div class="fcenter">
		<div class="fleft"><p>Copyright Statement</p></div><div class="fright"></div>
		<div class="fleft"><p>Design by <a href="http://www.flash-templates-today.com/" title="#">Free Flash Templates</a></p></div><div class="fright"><p>Best <a href="http://www.templatemonster.com/">Website Templates</a> From TemplateMonster</p></div><div class="fclear"></div>
	</div>
</div>

<!-- / #footer -->
</div>
<!-- / #container -->
</body>
</html>