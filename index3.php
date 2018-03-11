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
<title>Inicio</title>
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
<!-- #sidebar1 -->
	<div id="sidebar1">
		
		
		<h3>Calendario</h3>
		<div class="title_back">	
			<div id="calendar">
				<script>
var f=new Date();
var ano = f.getFullYear();
var mes = f.getMonth();
var dia = f.getDate();
var estiloDia;
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var diasMes = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
var diaMaximo = diasMes[mes];
if (mes == 1 && (((ano % 4 == 0) && (ano % 100 != 0)) || (ano % 400 == 0)))
   diaMaximo = 29;
document.write('<div class="mifecha2">');
document.write('<div class="mesano">' + meses[mes] + ' ' + ano + ':</div>');

for (i=1; i<=diaMaximo; i++){
   if(i == dia)
      estiloDia = "diaactual";
   else
      estiloDia = "dia";
   document.write('<div class="' + estiloDia + '">' + i + '</div>');
}   
document.write('</div>');
</script>
			</div>
		</div>
	</div>
<!-- / #sidebar1 -->
<!-- #mainContent -->
	<div id="mainContent"><!--
<p align="center"><h1>¡¡ALERTA!!<br></p><p align="justify">Se ha encontrado errores en ESTA AREA
                 asi que podra experimentar desconexion repentina de su sesion o algunas paginas no funcionaran 
                 con normalidad. Estaremos trabajando para solucionar esto en el menor tiempo posible,
lamentamos las molestias causadas.    
</h1></p> -->
		
<h1>Bienvenido/a SELF-CONFIDENCE de la Universidad Politécnica del Valle de México</h1><br />
		<p align="justify">
        La informacion que podrás consultar te permitirá conocer al grupo y 
alumnos individualmente en cuanto a su autoestima, estilo de actitud cognitiva y aprendizaje 
que se te han asignado.

        
        </p>

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