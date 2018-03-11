<?php
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['matricula'])) 
{
  header('Location: login.php'); 
  exit();
}
?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacto</title>
<link href="css/style7.css" rel="stylesheet" type="text/css" />
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
<style type="text/css">
<!--
.Estilo1 {font-size: large}
.Estilo2 {color: #0000FF}
.Estilo3 {color: #009933}
-->
</style>
</head>
<body>
<!-- #container -->
<div id="container">
<!-- #header -->
	<div id="header">
		<div id="mainMenu">
			<ul id="menu">
				<li><a class="buttonPosition" href="index2.php">Home</a></li>
				<li><a class="buttonPosition" href="formularioupp.php">Test Psicologico</a></li>
				<li><a class="buttonPosition" href="formularioupp2.php">Test de Actitud</a></li>
				<li><a class="buttonPosition" href="formularioupp3.php">Test Estilos-Aprendizaje</a></li>
				<li><a class="buttonPosition" href="contacto2.php">Contacto</a></li>
				<li><a class="buttonPosition" href="logout.php">Cerrar Sesion</a></li>
			</ul>
		</div>
		<div class="headerBody">
			
		</div>
	</div><div class="inner_copy"></div>
<!-- / #header -->
<!-- #sidebar1 -->
	<div id="sidebar1">
	<center><h1>CONTACTO</h1></center>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<a href ="http://www.uppenjamo.edu.mx/">  <font color="blue"><span class="Estilo1">UPP  </span>  </font></a>
</center>
<br>
<center><h2>Domicilio</h2></center>
<center><h4><span class="Estilo2">Carretera Irapuato - La Piedad Km 44 Predio "El Derramadero",
Municipio de Pénjamo, Gto.
<br>
Telefóno: (469) 692.60.00 </span></h4>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
	

	
<!-- / #sidebar1 -->
<!-- #mainContent -->
	<div id="mainContent">

<br>
<br>
<br>	
<center>	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.547852213735!2d-101.65311319999999!3d20.4426797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c6c5c61f00139%3A0x5ee452f82087a3c6!2sUniversidad+Polit%C3%A9cnica+de+P%C3%A9njamo!5e0!3m2!1ses!2smx!4v1438238180203" width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> </center>
<br><br><br><br>
				
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