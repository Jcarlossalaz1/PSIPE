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
<title>Test</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
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
<link href="css/style2.css" rel="stylesheet" type="text/css" />
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
<li><a class="buttonPosition" href="result_alum.php">Resultados</a></li>
				<!--<li><a class="buttonPosition" href="contacto.php">Contacto</a></li> -->
				<li><a class="buttonPosition" href="logout.php">Cerrar Sesion</a></li>
			</ul>
		</div>
		<div class="headerBody">
			
		</div>
	</div><div class="inner_copy"></div>
<!-- / #header -->



<!-- #mainContent -->
	<div id="mainContent">
		<h1>Test Estilos de Aprendizaje</h1><br />
		<form id="form1" method="post" action="guarda2.php">
                                          
<div class="pregresp">
  <div class="pregunta"><strong>1.	Para entender mejor el tema prefieres que el maestro utilice gráficas e imágenes.</strong><br />
  </div>
  <div class="respuestas">
   <ul>
  <li><input type="radio" name="1" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="1" value="4" required/> b)De acuerdo</li>
  <li><input type="radio" name="1" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="1" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="1" value="1" required/> e)Totalmente en desacuerdo </li>
  </ul>
  </div>
  <strong><br />
2.	Tus apuntes se diferencian de los de tus compañeros porque gustas de utilizar diferentes tintas o decorarlos.</strong>
<ul>
  <li><input type="radio" name="2" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="2" value="4" required/> b)De acuerdo</li>
  <li><input type="radio" name="2" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="2" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="2" value="1" required/> e)Totalmente en desacuerdo </li>
</ul>
<br />
<strong>3.	Prefieres ver una película que escuchar música.</strong>
<ul>
  <li><input type="radio" name="3" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="3" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="3" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="3" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="3" value="1" required/> e)Totalmente en desacuerdo<br /> 
  </li>
</ul>
<br />
<strong>4.	Cuand</strong>o <strong>se trata de estudiar para un examen gustas de leer tu información y/o hacer esquemas.</strong>
<ul>
  <li><input type="radio" name="4" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="4" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="4" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="4" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="4" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>

<br />
<strong>5.	Prefieres admirar el paisaje o leer que acudir a una conferencia.</strong>
<ul>
  <li><input type="radio" name="5" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="5" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="5" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="5" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="5" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>


<br />
<strong>6.	Para entender mejor el tema prefieres que el maestro proponga actividades al aire libre o prácticas.</strong>
<ul>
  <li><input type="radio" name="6" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="6" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="6" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="6" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="6" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>

<br />
<strong>7.	Prefieres hacer ejercicios que tomar notas y si son prácticas ¡mejor!</strong>
<ul>
  <li><input type="radio" name="7" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="7" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="7" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="7" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="7" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>

<br />
<strong>8.	Gustas que las explicaciones del profesor sean con ejemplos aplicables.</strong>
<ul>
  <li><input type="radio" name="8" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="8" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="8" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="8" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="8" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>

<strong><br />
9.	Cuando te enteras que habrá una salida escolar o actividad fuera del aula la esperas con ansiedad.</strong>
<ul>
  <li><input type="radio" name="9" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="9" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="9" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="9" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="9" value="1" required/> e)Totalmente en desacuerdo<br /> 
  </li>
</ul><br />
<strong>10.	Gustas de coleccionar.</strong>
<ul>
  <li><input type="radio" name="10" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="10" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="10" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="10" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="10" value="1" required/> e)Totalmente en desacuerdo<br> </li>
</ul>

<strong><br />
11.	Para  entender mejor el tema prefieres que el maestro explique con detalle, no importa si lleva material extra o hace alguna actividad.</strong>
<ul>
  <li><input type="radio" name="11" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="11" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="11" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="11" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="11" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
  </ul>

<br />
<strong>12.	Gustas de tomar apuntes sin olvidar los detalles.</strong>
<ul>
  <li><input type="radio" name="12" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="12" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="12" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="12" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="12" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>

<br />
<strong>13.	En las clases te distingues por tus participaciones.</strong>
<ul>
  <li><input type="radio" name="13" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="13" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="13" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="13" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="13" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>


<strong><br />
14.	Prefieres escuchar música que ver una película.</strong>
<ul>
  <li><input type="radio" name="14" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="14" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="14" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="14" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="14" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>


<br />
<strong>15.	Gustas de platicar largo rato con tus amigos.</strong>
<ul>
  <li><input type="radio" name="15" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="15" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="15" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="15" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="15" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>


<br />
<strong>16.	Para entender mejor el tema prefieres que el maestro utilice gráficas e imágenes y explique con detalle, no importa si lleva material extra o hace alguna actividad al aire libre.</strong>
<ul>
  <li><input type="radio" name="16" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="16" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="16" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="16" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="16" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>


<strong><br />
17.	Prefieres ver una película o escuchar música que ir a bailar o de excursión.</strong>
<ul>
  <li><input type="radio" name="17" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="17" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="17" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="17" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="17" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>


<br />
<strong>18.	Gustas de los relatos, ver fotografías o debatir un tema que coleccionar algo.</strong>
<ul>
  <li><input type="radio" name="18" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="18" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="18" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="18" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="18" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>


<br />
<strong>19.	Generalmente platicas con tus compañeros durante las clases al mismo tiempo  tomas nota y  ¡sorpresa! También estas atento y aprendes el tema.</strong>
<ul>
  <li><input type="radio" name="19" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="19" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="19" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="19" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="19" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>


<br />
<strong>20.	Generalmente te adaptas a la manera de trabajar del profesor asignado, incluso cuando uno de tus amigos se queja de esa dinámica.</strong>
<ul>
  <li><input type="radio" name="20" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="20" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="20" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="20" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="20" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>


<br />
<strong>21.	No tienes mayor problema por trabajar en equipo, aun cuando los integrantes son elegidos por la maestra, pues siempre eres el que dirige. ¡te gusta hacerlo y lo hace bien!.</strong>
<ul>
  <li><input type="radio" name="21" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="21" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="21" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="21" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="21" value="1" required/> e)Totalmente en desacuerdo<br /> 
  </li>
</ul><br />
<strong>22.	Generalmente te esmeras en todos tus trabajos y la mayoría (95%) son de ¡diez! Aun cuando son escritos, exposiciones, videos, conferencias, rally o ¡actuaciones!.</strong>
<ul>
  <li><input type="radio" name="22" value="5" required/> a)Totalmente de acuerdo</li>
  <li><input type="radio" name="22" value="4" required/> b)De acuerdo<br /> </li>
  <li><input type="radio" name="22" value="3" required/> c)Ni de acuerdo ni en desacuerdo </li>
  <li><input type="radio" name="22" value="2" required/> d)En desacuerdo </li>
  <li><input type="radio" name="22" value="1" required/> e)Totalmente en desacuerdo<br /> </li>
</ul>

  <input name="Enviar" type="submit" value="enviar" />  
</div></form>

</div>


<br />


    
        
        
        
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