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

				<li><a class="buttonPosition" href="formulario2.php">Test de Actitud</a></li>
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
		<h1>Test Personalidad</h1><br />
	   <table width="726" border="1">																																																																																																																																																																																																																																																																																																																																						
		<tr>
		  <td align="center"><table width="726" border="1">
		    <tr>
		      <td align="center"><form id="form1" method="post" action="almacena.php">
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
		            <td width="91">&nbsp;</td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          
		          <tr>
		            <td align="center">&nbsp;</td>
		            <td align="left">1. Siento que soy una persona de valor, al menos en un plano de igualdad con los  demás.</td>
		            <td align="center"><p>
		              <input type="radio" name="1" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="1" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="1" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="1" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="1" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">2. Siento que tengo una serie de buenas cualidades.</td>
		            <td align="center"><p>
		              <input type="radio" name="2" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="2" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="2" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="2" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="2" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">3. Con todo, me inclino a pensar que soy un fracaso. .</td>
		            <td align="center"><p>
		              <input type="radio" name="3" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="3" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="3" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="3" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="3" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">4. Soy capaz de hacer las cosas, así como la mayoría de la gente.</td>
		            <td align="center"><p>
		              <input type="radio" name="4" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="4" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="4" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="4" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="4" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">5. Siento que no tengo mucho de qué enorgullecerme.</td>
		            <td align="center"><p>
		              <input type="radio" name="5" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="5" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="5" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="5" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="5" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">6. Tengo una actitud positiva hacia mí mismo.</td>
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
		            <td align="center">7. En general, estoy satisfecho conmigo mismo.</td>
		            <td align="center"><p>
		              <input type="radio" name="7" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="7" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="7" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="7" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="7" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">8. Me gustaría poder tener más respeto por mí mismo. </td>
		            <td align="center"><p>
		              <input type="radio" name="8" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="8" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="8" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="8" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="8" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">9. Ciertamente me siento inútil a veces. </td>
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
		            <td align="center">10. A veces pienso que no soy bueno en absoluto. </td>
		            <td align="center"><p>
		              <input type="radio" name="10" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="10" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="10" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="10" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="10" id="radio5" value="5" required/>
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
		            <td width="91">&nbsp;</td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          <tr>
		            <td height="24">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center"> 11. Hay muchos momentos en los que no pienso en mí  mismo.</td>
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
		            <td align="center">12. Muchas de las ideas y opiniones de otras personas no tienen mucho sentido.</td>
		            <td align="center"><p>
		              <input type="radio" name="12" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="12" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="12" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="12" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="12" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">13. A menudo no doy felicitaciones a alguien que podría merecerlas.</td>
		            <td align="center"><p>
		              <input type="radio" name="13" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="13" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="13" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="13" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="13" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">14. Encuentro que es difícil ser realmente yo mismo, incluso con mis amigos.</td>
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
		            <td align="center">15. Soy una persona tímida.</td>
		            <td align="center"><p>
		              <input type="radio" name="15" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="15" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="15" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="15" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="15" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">16. Las ideas de mis amigos tienen poca influencia sobre mis decisiones.</td>
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
		            <td align="center">17. Cuando mis amigos necesitan consejos, no es fácil para mí darles sugerencias o ideas sobre qué hacer.</td>
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
		            <td align="center">18. Me gusta pasar tiempo solo. </td>
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
		            <td align="center">19. Yo no tengo muchas cualidades que son especialmente deseables.</td>
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
		            <td align="center">20. No me gusta ser molestado por personas.</td>
		            <td align="center"><p>
		              <input type="radio" name="20" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="20" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="20" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="20" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="20" id="radio5" value="5" required/>
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
		            <td width="91">&nbsp;</td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          <tr>
		            <td height="24">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">21. Ignoro cuando alguien se mete  adelante de mí en alguna fila para comprar o ingresar a algún lado.</td>
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
		            <td align="center">22. Me resulta difícil pedir  un favor a un amigo.</td>
		            <td align="center"><p>
		              <input type="radio" name="22" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="22" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="22" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="22" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="22" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">23.  Si mi  jefe o profesor hace lo que considera una petición razonable, ¿tengo dificultad para decir que no?</td>
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
		            <td align="center">24. Me he  negado a hablar con un conocido atractivo del sexo opuesto.</td>
		            <td align="center"><p>
		              <input type="radio" name="24" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="24" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="24" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="24" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="24" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">25. Es difícil para mí rechazar las peticiones irrazonables de mis padres.</td>
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
		            <td align="center">26.  Me resulta difícil aceptar elogios de mi jefe o supervisor.</td>
		            <td align="center"><p>
		              <input type="radio" name="26" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="26" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="26" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="26" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="26" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">27. Expreso mis sentimientos negativos a los demás cuando lo creo apropiado.</td>
		            <td align="center"><p>
		              <input type="radio" name="27" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="27" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="27" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="27" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="27" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">28. Me ofrezco libremente a dar información u opiniones en los debates con personas a las que no conozco bien.</td>
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
		            <td align="center">29. Si en una reunión social grande hay una persona pública o famosa a quien yo admiro y respeto, me cuesta mucho trabajo presentarse con él /ella.</td>
		            <td align="center"><p>
		              <input type="radio" name="29" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="29" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="29" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="29" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="29" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">30.  Con  frecuencia expreso abiertamente mis sentimientos justificados cuando mis padres están enojados con migo.</td>
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
		            <td width="91">&nbsp;</td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          <tr>
		            <td height="24">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">31. Cuando hago planes, estoy seguro de que puedo hacer que funcionen.</td>
		            <td align="center"><p>
		              <input type="radio" name="31" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="31" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="31" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="31" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="31" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">32. Uno de mis problemas es que no puedo llegar a trabajar cuando debería (impuntualidad).</td>
		            <td align="center"><p>
		              <input type="radio" name="32" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="32" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="32" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="32" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="32" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">33. Si no puedo hacer un trabajo por primera vez, sigo intentándolo hasta que pueda realizarlo.</td>
		            <td align="center"><p>
		              <input type="radio" name="33" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="33" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="33" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="33" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="33" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">34. Cuando me pongo metas personales importantes para mí, rara vez las alcanzan otras personas.</td>
		            <td align="center"><p>
		              <input type="radio" name="34" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="34" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="34" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="34" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="34" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">35. Me rindo ante las metas antes de completarlas.</td
    >
		            <td align="center"><p>
		              <input type="radio" name="35" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="35" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="35" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="35" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="35" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">36. Evito enfrentar problemas o dificultades en mi vida en general.</td>
		            <td align="center"><p>
		              <input type="radio" name="36" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="36" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="36" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="36" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="36" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">37. Si algo parece demasiado complicado, no lo haré ni me molestaré en intentarlo.</td>
		            <td align="center"><p>
		              <input type="radio" name="37" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="37" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="37" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="37" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="37" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">38. Cuando tengo algo desagradable que hacer, me apego a la tarea hasta que la termine.</td>
		            <td align="center"><p>
		              <input type="radio" name="38" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="38" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="38" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="38" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="38" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">39. Cuando decido hacer algo, me pongo a trabajar directamente en tal situación.</td>
		            <td align="center"><p>
		              <input type="radio" name="39" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="39" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="39" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="39" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="39" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">40. Cuando se trata de aprender algo nuevo, me doy por vencido pronto  si no tengo éxito al comenzarlo.</td>
		            <td align="center"><p>
		              <input type="radio" name="40" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="40" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="40" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="40" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="40" id="radio5" value="5" required/>
		              <label for="radio5"></label>
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
		            <td width="91">&nbsp;</td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          <tr>
		            <td height="24">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">41. Planeo cuidadosamente las tareas.</td>
		            <td align="center"><p>
		              <input type="radio" name="41" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="41" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="41" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="41" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="41" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">42. Hago las cosas sin pensar.</td>
		            <td align="center"><p>
		              <input type="radio" name="42" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="42" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="42" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="42" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="42" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">43. Manejo mi mente rápidamente.</td>
		            <td align="center"><p>
		              <input type="radio" name="43" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="43" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="43" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="43" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="43" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td align="center">.</td>
		            <td align="center"><p>44.Me siento feliz y despreocupado
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="44" id="radio1" value="1" required/>
		              <label for="radio1"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="44" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="44" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="44" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="44" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">45. No "presto atención".</td>
		            <td align="center"><p>
		              <input type="radio" name="45" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="45" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="45" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="45" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="45" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td align="center">&nbsp;</td>
		            <td align="center"><p>46. Mi pensamiento es acelerado
		              <label for="radio"></label>
		            </p></td>
                    <td align="center"><p>
		              <input type="radio" name="46" id="radio2" value="5" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="46" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="46" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="46" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="46" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">47. Planeo viajes con mucha antelación.</td>
		            <td align="center"><p>
		              <input type="radio" name="47" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="47" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="47" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="47" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="47" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">48. Soy auto controlado.</td>
		            <td align="center"><p>
		              <input type="radio" name="48" id="radio" value="1" required/>
		              <label for="radio"></label>
					  
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="48" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="48" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="48" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="48" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr> <
		            <td>&nbsp;</td>
		            <td align="center">49. Me concentro fácilmente.</td>
		            <td align="center"><p>
		              <input type="radio" name="49" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="49" id="radio2" value="2"required />
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="49" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="49" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="49" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">50. Me guardo mis pensamientos regularmente.</td>
		            <td align="center"><p>
		              <input type="radio" name="50" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="50" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="50" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="50" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="50" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr></tr>
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
		            <td width="91">&nbsp;</td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          <tr>
		            <td height="24">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">51. Tratar con algunas personas puede ser muy desagradable, pero nunca puede ser horrible.</td>
		            <td align="center"><p>
		              <input type="radio" name="51" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="51" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="51" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="51" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="51" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">52. Cuando cometo un error, a menudo me digo a mí mismo: "Yo no debería haber hecho eso".</td>
		            <td align="center"><p>
		              <input type="radio" name="52" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="52" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="52" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="52" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="52" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">53. Por supuesto, la gente debe obedecer la ley.</td>
		            <td align="center"><p>
		              <input type="radio" name="53" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="53" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="53" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="53" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="53" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">54. No hay nada que yo "no pueda soportar."</td>
		            <td align="center"><p>
		              <input type="radio" name="54" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="54" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="54" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="54" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="54" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">55. Ser ignorado, o ser socialmente torpe en una fiesta reduciría mi sentido de la autoestima.</td>
		            <td align="center"><p>
		              <input type="radio" name="55" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="55" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="55" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="55" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="55" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">56. Algunas situaciones de la vida son verdaderamente penosas.</td>
		            <td align="center"><p>
		              <input type="radio" name="56" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="56" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="56" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="56" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="56" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">57. En algunas áreas absolutamente debería ser más competente.</td>
		            <td align="center"><p>
		              <input type="radio" name="57" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="57" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="57" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="57" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="57" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">58. Mis padres deben ser razonables de lo que piden de mí.</td>
		            <td align="center"><p>
		              <input type="radio" name="58" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="58" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="58" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="58" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="58" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">59. Hay algunas cosas que yo no puedo soportar.</td>
		            <td align="center"><p>
		              <input type="radio" name="59" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="59" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="59" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="59" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="59" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">60. Mi autoestima no es mayor a causa de mis logros en la escuela o en el trabajo.</td>
		            <td align="center"><p>
		              <input type="radio" name="60" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="60" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="60" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="60" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="60" id="radio5" value="1" required/>
		              <label for="radio5"></label>
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
		            <td width="91">&nbsp;</td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          <tr>
		            <td height="24">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">61. Yo vivo mucho para los estándares de los demás.</td>
		           <td align="center"><p>
		              <input type="radio" name="61" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="61" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="61" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="61" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="61" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">62. Con el fin de llevarme bien con los demás y ser querido, tiendo a ser lo que la gente espera que yo sea en vez de lo que yo quiero.</td>
		            <td align="center"><p>
		              <input type="radio" name="62" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="62" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="62" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="62" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="62" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">63. Supongo que me sitúo en un espectáculo para impresionar a la gente. Sé que no soy la persona que pretendo ser.</td>
		           <td align="center"><p>
		              <input type="radio" name="63" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="63" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="63" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="63" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="63" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">64. Cambio mi opinión (o la forma en que hago las cosas) con el fin de agradar a alguien más.</td>
		           <td align="center"><p>
		              <input type="radio" name="64" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="64" id="radio2" value="2"required />
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="64" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="64" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="64" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">65. Tengo que tener cuidado en las fiestas y reuniones sociales por miedo a hacer o decir cosas que a otros no les gustarán.</td>
		            <td align="center"><p>
		              <input type="radio" name="65" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="65" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="65" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="65" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="65" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">66. En la clase, o en un grupo, es poco probable que exprese mi opinión porque temo que otros no pueden pensar bien de mí.</td>
		            <td align="center"><p>
		              <input type="radio" name="66" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="66" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="66" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="66" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="66" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">67. Digo "mentiras blancas" en compañía de mis amigos para que no se den cuenta de que soy diferente (o pienso de forma diferente) de ellos.</td>
		            <td align="center"><p>
		              <input type="radio" name="67" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="67" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="67" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="67" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="67" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">68. Hay muchos aspectos de mi comportamiento en los que tengo muy poco control.</td>
		           <td align="center"><p>
		              <input type="radio" name="68" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="68" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="68" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="68" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="68" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">69. A menudo encuentro que mis propias inclinaciones tienen poco que ver con lo que en realidad hago o digo.</td>
		            <td align="center"><p>
		              <input type="radio" name="69" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="69" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="69" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="69" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="69" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">70. Tengo problemas para hacer favores a otros, a menudo debido a conflictos con mis propias inclinaciones.</td>
		            <td align="center"><p>
		              <input type="radio" name="70" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="70" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="70" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="70" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="70" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
                  <td>&nbsp;</td>
		            <td height="24" bgcolor="#FF3333"><strong></strong></td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            </tr>
		          <tr>
		            <td width="91">&nbsp;</td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          <tr>
		            <td height="24">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td align="center">71. Siento que estoy en contra del mundo.</td>
		             <td align="center"><p>
		              <input type="radio" name="71" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="71" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="71" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="71" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="71" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">72. No soy bueno.</td>
		            <td align="center"><p>
		              <input type="radio" name="72" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="72" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="72" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="72" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="72" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">73. Siempre puedo tener éxito.</td>
		            <td align="center"><p>
		              <input type="radio" name="73" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="73" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="73" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="73" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="73" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">74. Nadie me entiende.</td>
		            <td align="center"><p>
		              <input type="radio" name="74" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="74" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="74" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="74" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="74" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">75. Abandono a la gente que me quiere.</td>
		           <td align="center"><p>
		              <input type="radio" name="75" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="75" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="75" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="75" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="75" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">76. No creo que pueda seguir adelante.</td>
		            <td align="center"><p>
		              <input type="radio" name="76" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="76" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="76" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="76" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="76" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">77. Me gustaría ser una mejor persona.</td>
		            <td align="center"><p>
		              <input type="radio" name="77" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="77" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="77" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="77" id="radio4" value="2" required/>
		              <label for="radio4"></label
		              ></p></td>
		            <td align="center"><p>
		              <input type="radio" name="77" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">78. Soy muy fuerte.</td>
		            <td align="center"><p>
		              <input type="radio" name="78" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="78" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="78" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="78" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="78" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">79. Mi vida no va de la manera que quiero que vaya.</td>
		            <td align="center"><p>
		              <input type="radio" name="79" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="79" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="79" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="79" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="79" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">80. Estoy muy contento conmigo mismo.</td>
		            <td align="center"><p>
		              <input type="radio" name="80" id="radio" value="1" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="80" id="radio2" value="2" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="80" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="80" id="radio4" value="4" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="80" id="radio5" value="5" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td height="24" bgcolor="#FF3333"><strong></strong></td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            <td align="center" bgcolor="#FF3333">&nbsp;</td>
		            </tr>
		          <tr>
		            <td width="91">&nbsp;</td>
		            <td width="209">Pregunta</td>
		            <td width="78">a)Totalmente de acuerdo</td>
		            <td width="70">b)De acuerdo</td>
		            <td width="80">c)Ni de acuerdo, ni en desacuerdo</td>
		            <td width="68">d)En desacuerdo</td>
		            <td width="84">e)Totalmente en desacuerdo</td>
		            </tr>
		          <tr>
		            <td height="24">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            <td align="center">&nbsp;</td>
		            </tr>
		          
		            <td>&nbsp;</td>
		            <td align="center">81. Me sonrojo fácilmente.</td>
		            <td align="center"><p>
		              <input type="radio" name="81" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="81" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="81" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="81" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="81" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">82. A menudo me siento tan impotente y desesperado que la vida se convierte en una fuente de sufrimiento para mí.</td>
		             <td align="center"><p>
		              <input type="radio" name="82" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="82" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="82" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="82" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="82" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            
          <td align="center">83. Las pesadillas son uno de mis mayores problemas.</td>
		             <td align="center"><p>
		              <input type="radio" name="83" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="83" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="83" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="83" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="83" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr></tr>
		            <td align="center">&nbsp;</td>
		             <td align="center"><p>84. Evito hablar con personas en un autobús.
		               <label for="radio"></label>
		             </p></td>
                     <td align="center"><p>
		              <input type="radio" name="84" id="radio2" value="5" required/>
		              <label for="radio2"></label>
		            <td align="center"><p>
		              <input type="radio" name="84" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="84" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="84" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="84" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">85. Tiendo a evitar salir de casa.</td>
		             <td align="center"><p>
		              <input type="radio" name="85" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="85" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="85" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="85" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="85" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr></tr>
		            <td align="center">&nbsp;</td>
		             <td align="center"><p>86. A menudo tengo un dolor de cabeza.</p></td>
                     <td align="center"><p>
		              <input type="radio" name="86" id="radio2" value="5" required/>
		              <label for="radio2"></label>
		            <td align="center"><p>
		              <input type="radio" name="86" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="86" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="86" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="86" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          
		            <td>&nbsp;</td>
		            <td align="center">87. Experimento la sensación de vergüenza.</td>
		            <td align="center"><p>
		              <input type="radio" name="87" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="87" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="87" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="87" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="87" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">88. El nerviosismo se ha convertido en parte de mi vida.</td>
		             <td align="center"><p>
		              <input type="radio" name="88" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="88" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="88" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="88" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="88" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">89. Tengo ataques de vértigo.</td>
		            <td align="center"><p>
		              <input type="radio" name="89" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="89" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="89" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="89" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="89" id="radio5" value="1" required/>
		              <label for="radio5"></label>
		              <label for="radio5"></label>
		              </p></td>
		            </tr>
		          <tr></tr>
		          <tr></tr>
		            <td>&nbsp;</td>
		            <td align="center">90. A veces no puedo pensar en nada excepto mis preocupaciones.</td>
		             <td align="center"><p>
		              <input type="radio" name="90" id="radio" value="5" required/>
		              <label for="radio"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="90" id="radio2" value="4" required/>
		              <label for="radio2"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="90" id="radio3" value="3" required/>
		              <label for="radio3"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="90" id="radio4" value="2" required/>
		              <label for="radio4"></label>
		              </p></td>
		            <td align="center"><p>
		              <input type="radio" name="90" id="radio5" value="1" required/>
		              <label for="radio5"></label>
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