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
<link href="css/style2.css" rel="stylesheet" type="text/css" />
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
				<li><a class="buttonPosition" href="index.php">Home</a></li>
				<li><a class="buttonPosition" href="formulario.php">Test Personalidad</a></li>
				<li><a class="buttonPosition" href="formulario2.php">Test de Actitud</a></li>
				<li><a class="buttonPosition" href="formulario33.php">Test Estilos-Aprendizaje</a></li>
				<li><a class="buttonPosition" href="contacto.php">Contacto</a></li>
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
<font color="red"><center>
  <a href="http://www.upvm.edu.mx/"> <span class="Estilo1">UPVM</span> </a>
  
</center></font>
<br>
<br>
<br>
<center><h2>Domicilio</h2></center>
<center><h4><span class="Estilo3">Av. Mexiquense s/n, esquina Universidad Politécnica
Col. Villa Esmeralda
C.P. 54910
Tultitlán, Estado de México.
<br>
Telefóno: 50 62 64 60 </h4></span>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
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

		
<center>	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.6574173520603!2d-99.12590030000001!3d19.6419387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f43e59c00a9f%3A0xe3c992b6aa422e2c!2sUniversidad+Polit%C3%A9cnica+del+Valle+de+M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1438237734215" width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>
	
<br>	
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	


				
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