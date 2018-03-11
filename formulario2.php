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

				<li><a class="buttonPosition" href="formulario33.php">Test Estilos-Aprendizaje</a></li>
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
		<h1>Test Enseñanza-Aprendizaje</h1><br />
	   <table width="726" border="1">																																																																																																																																																																																																																																																																																																																																						
		<tr>
		  <td align="center"><table width="726" border="1">
		    <tr>
		      <td align="center"><form id="form1" method="post" action="guardar.php">
		        <table width="726" border="1">
		          <tr>
		            <td colspan="7"><table height="70" cellpadding="0" cellspacing="0" hspace="0" vspace="0">
		              <tr>
                                     
		                <td height="51" align="left" valign="top"><p align="justify">Instrucciones.<strong></strong><br />
		                  <strong>Por    favor, responda con franqueza a las siguientes cuestiones, la mayoría de las    preguntas se refieren al aspecto personal, por lo que no hay respuestas    correctas o incorrectas. Lo importante es que sea sincero en sus respuestas.</strong></p>
		                  <p><strong>Este cuestionario apoyará a las estrategias  Enseñanza- Aprendizaje.</strong></p></td>
		                </tr>
		              </table></td>
		            </tr>
		          <tr>
		            <td width="91"></td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          <tr>
		            <td height="24"></td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">1.  El universitario debe poseer la capacidad de expresión oral y escrita.</td>
		            <td align="center"><p>
		              <input type="radio" name="1" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="1" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="1" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="1" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="1" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">2.  Es difícil ser un universitario disciplinado, cumplir la planificación de actividades y aplicar las técnicas de estudio.</td>
		            <td align="center"><p>
		              <input type="radio" name="2" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="2" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="2" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="2" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="2" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">3.  El saber trabajar en equipo le permite al universitario ser más competente.</td>
		            <td align="center"><p>
		              <input type="radio" name="3" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="3" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="3" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="3" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="3" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">4.  Para el universitario es complicado tener la capacidad de ser analítico, y buscar la solución a los diferentes problemas.</td>
		            <td align="center"><p>
		              <input type="radio" name="4" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="4" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="4" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="4" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="4" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">5.  El buen uso de la tecnología le permite al universitario obtener información actualizada sobre los diferentes acontecimientos en todos los campos.</td>
		            <td align="center"><p>
		              <input type="radio" name="5" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="5" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="5" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="5" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="5" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
                    <tr>
		            
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">6.  El conocimiento práctico es más importante para el universitario que el conocimiento teórico.</td>
		            <td align="center"><p>
		              <input type="radio" name="6" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="6" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="6" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="6" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="6" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">7.  Las materias técnicas son más importantes para el universitario que las materias  humanistas.</td>
		            <td align="center"><p>
		              <input type="radio" name="7" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="7" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="7" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="7" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="7" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">8.  El universitario debe poseer cultura general.</td>
		            <td align="center"><p>
		              <input type="radio" name="8" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="8" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="8" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="8" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="8" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">9.  La información que recibe el estudiante universitario está alejada de la realidad laboral.</td>
		            <td align="center"><p>
		              <input type="radio" name="9" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="9" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="9" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="9" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="9" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">10.  Cuando el universitario culmina su plan de estudios, está preparado para enfrentarse al campo laboral.</td>
		            <td align="center"><p>
		              <input type="radio" name="10" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="10" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="10" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="10" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="10" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>  
		            </tr>           
		          <tr>
		            <td height="24" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            </tr>
		          <tr>
		            <td width="91"></td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          <tr>
		            <td height="24"></td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            </tr>
		         
                  <tr>
		            <td>&nbsp;</td>
		            <td align="center"> 11.  Por lo regular los universitarios necesitan ser impulsados por la gente que los rodea para realizar sus actividades académicas</td>
		            <td align="center"><p>
		              <input type="radio" name="11" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="11" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="11" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="11" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="11" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">12.  El estudiante universitario de hoy en día es capaz de ayudar a sus compañeros, en alguna dificultad.</td>
		            <td align="center"><p>
		              <input type="radio" name="12" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="12" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="12" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="12" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="12" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">13.  Los universitarios prefieren actividades al aire libre que actividades en el interior de un aula.</td>
		            <td align="center"><p>
		              <input type="radio" name="13" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="13" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="13" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="13" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="13" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">14.  Si le dieran a elegir al estudiante universitario entre quedarse en casa y acudir a la universidad, optaría por la primera opción.</td>
		            <td align="center"><p>
		              <input type="radio" name="14" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="14" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="14" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="14" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="14" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">15.  Los universitarios necesitan del reconocimiento constante de sus profesores para sentirse satisfechos con sus logros.</td>
		            <td align="center"><p>
		              <input type="radio" name="15" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="15" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="15" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="15" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="15" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">16.  Para el estudiante universitario es importante cumplir con sus compromisos académicos, antes que con sus compromisos personales.</td>
		            <td align="center"><p>
		              <input type="radio" name="16" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="16" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="16" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="16" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="16" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">17.  En la universidad mis compañeros casi siempre se muestran poco dispuestos a tomar clase.</td>
		            <td align="center"><p>
		              <input type="radio" name="17" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="17" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="17" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="17" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="17" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">18.  Lo que más me gusta de ser universitario es tener novia (o). </td>
		            <td align="center"><p>
		              <input type="radio" name="18" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="18" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="18" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="18" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="18" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">19.  Lo que menos me gusta de ser universitario son las tareas o proyectos que dejan los profesores.</td>
		            <td align="center"><p>
		              <input type="radio" name="19" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="19" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="19" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="19" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="19" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">20.  En todo momento como universitario reconozco a todas las personas que me rodean.</td>
		            <td align="center"><p>
		              <input type="radio" name="20" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="20" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="20" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="20" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="20" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td height="24" bgcolor="#FF3333"><strong></strong></td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            </tr>
		          <tr>
		            <td width="91"></td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          <tr>
		            <td height="24"></td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">21.  La mayor parte del tiempo, el estudiante universitario muestra la necesidad de alguien que lo aconseje, para saber lo que tiene que hacer.</td>
		            <td align="center"><p>
		              <input type="radio" name="21" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="21" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="21" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="21" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="21" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">22.  Hoy en día los universitarios son capaces de elegir lo que más les conviene.</td>
		            <td align="center"><p>
		              <input type="radio" name="22" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="22" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="22" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="22" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="22" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">23.  Por lo regular, en la universidad me cuesta trabajo mostrarme como realmente soy, por temor a lo que puedan pensar de mi.</td>
		            <td align="center"><p>
		              <input type="radio" name="23" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="23" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="23" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="23" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="23" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">24.  La vida universitaria exitosa requiere de una correcta toma de decisiones.</td>
		            <td align="center"><p>
		              <input type="radio" name="24" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="24" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="24" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="24" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="24" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">25.  La mayor parte del tiempo, los universitarios se sienten temerosos de equivocarse.</td>
		            <td align="center"><p>
		              <input type="radio" name="25" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="25" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="25" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="25" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="25" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">26.  Por lo regular me mantengo calmado cuando en la universidad mis compañeros, critican mis opiniones.</td>
		            <td align="center"><p>
		              <input type="radio" name="26" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="26" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="26" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="26" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="26" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">27.  Hoy en día el universitario esta más al pendiente de su celular o laptop que de la gente que lo rodea.</td>
		            <td align="center"><p>
		              <input type="radio" name="27" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="27" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="27" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="27" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="27" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">28.  La agresividad no forma parte del estudiante universitario.</td>
		            <td align="center"><p>
		              <input type="radio" name="28" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="28" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="28" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="28" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="28" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">29.  En la Universidad es importante ser una persona sociable.</td>
		            <td align="center"><p>
		              <input type="radio" name="29" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="29" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="29" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="29" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="29" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">30.  Los estudiantes universitarios expresamos en todo momento opiniones autónomas.</td>
		            <td align="center"><p>
		              <input type="radio" name="30" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="30" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="30" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="30" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="30" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          
		        
		          
		        
		       <tr></tr>
		          </table>
		        <p>&nbsp;</p>
		  </table></td>
	     </tr>
	  </table>
	    <input name="Enviar" type="submit" value="enviar" /> 
        
       
       
        
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