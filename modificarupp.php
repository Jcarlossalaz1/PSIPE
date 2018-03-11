<?php
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['nempleado'])) 
{
  header('Location: login4.php'); 
  exit();
}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Self Confidence</title>
<link href="css/style4.2.css" rel="stylesheet" type="text/css" />
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
				<li><a class="buttonPosition" href="index4.php">Home</a></li>
				<li><a class="buttonPosition" href="altas2.php">Alta de alumnos</a></li>
				<li><a class="buttonPosition" href="consultar2.php">Consultar Resultados</a></li>
				<li><a class="buttonPosition" href="modificarupp.php">Modificar alumnos</a></li>
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
		
                       <div id="promo-wrapper">
                        <section id="promo">
                           <div align="center"> <h2 class="pad_bot1">MODIFICAR</h2>
                           <form name="modificar_alumnos" method="post" action="modificarupp2.php">
                           <div align="center">
      <table width="363" border="0">
        <tr>
          <td width="99"><div align="right" class="Estilo8">Matricula</div></td>
          <td width="254"><input name="matricula" type="text" id="matricula"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="password" type="hidden" id="password"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="nombre" type="hidden" id="nombre"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="appat" type="hidden" id="appat"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="apmat" type="hidden" id="apmat"></td>
        </tr>
          <tr>
          <td>&nbsp;</td>
          <td><input name="grupo" type="hidden" id="grupo"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Enviar"></td>
        </tr>
      </table>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp; </p>
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