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
		<h1>Altas</h1>
		
                       <div id="promo-wrapper">
                        <section id="promo">
										      <h2><form action="sesion2.php" method="post" name="form1" id="form1">
                                              <p>
                                              <span class>Matricula</span><br>
                                              <input type="text" name="matricula" id="matricula" required/>
                                              </p><br />
                                              <p>
                                              <span class="Estilo4">Contraseña</span><br>
                                              <input type="password" name="password" id="password" required/>
                                               </p><br />
                                               <p>
                                               <span class="Estilo4">Nombre</span><br>
                                              <input type="text" name="nombre"  id="nombre" required/>
                                               </p><br />
                                               <p>
                                               <span class="Estilo4">Apellido Paterno</span><br>
                                               <input type="text" name="appat"  id="appat" required/>
                                                </p><br />
                                                <p>
                                                <span class="Estilo4">Apellido Materno</span><br>
                                               <input type="text" name="apmat"  id="apmat" required/>
                                               </p><br />
                                                <span class="Estilo4">Seleccione grupo</span><br>
                                               <select name="grupo" id="grupo" required/>
                                               <option value="110351">110351</option>
                                               <option value="110352">110352</option>
                                               </select>
                                               </p><br />
                                                <input name="button" type="submit" id="button" value="Enviar" />
                                               <input name="restablecer" type="reset" id="restablecer" value="Restablecer" />
 
                                               </p>
                                              </form></h2>
                                                      
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