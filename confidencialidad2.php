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

$matricula=$_SESSION['matricula'];
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test</title>
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
<link href="css/style7.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- #container -->
<div id="container">
<!-- #header -->
	<div id="header">
		
		<div class="headerBody">
			
		</div>
	</div><div class="inner_copy"></div>
<!-- / #header -->



<!-- #mainContent -->
	<div id="mainContent">
		<h1><p align="center">CONSENTIMIENTO INFORMADO PARA EL EXAMEN PSICOLÓGICO (PSIPE I)</p></h1><br />
<ul>		
<h3><p align="center"><li>Matricula:  <?php
                           echo $matricula ;
                           ?> </li></p></h3>

</ul>
<br>
<br>
<h3><p align="justify">Hacemos de su conocimiento que toda la información que se recabe y sea almacenada en nuestra base de datos personales, cuenta con los medios de seguridad necesarios para no ser manipulada por personas ajenas a esta Universidad, será manejada con absoluta confidencialidad, en la obtención, uso, divulgación y almacenamiento de los resultados; estos mismos serán utilizados para:</p></h3>
<br>
<br>
<UL TYPE=circle>
<h3><LI> Evaluar la personalidad y la actitud.</LI></h3>
<h3><LI> Los resultados serán utilizados de forma estadística, diagnóstico e investigación.</LI></h3>
<h3><LI> Estadística: Para medir situación emotiva y actitudinal de los alumnos de la UPP y por división.</LI></h3>
<h3><LI> Diagnóstico: Los resultado proponen estrategias generales para mejorar la calidad educativa.</LI></h3>
<h3><LI> Investigación: Los resultados serán tomados para análisis longitudinal de la trayectoria estudiantil de la UPP.</LI></h3>
</UL>
<br>
<br>
<h3><p align="justify">Voluntariamente acepto realizar el examen psicológico, he recibido una explicación clara y completa sobre el carácter general y los propósitos del examen, y de las razones específicas por las que se me examina. He sido informado de los tipos de pruebas, así como la manera en que se utilizarán los resultados.</p></h3></center>
  <div align="center"><br>
  <br>
      <br>
      
<form action="validar2.php" method="post">
Acepta condiciones
<input name="condiciones" type="checkbox" />
<input type="submit" value="Enviar" />
</form>
        
        
        
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