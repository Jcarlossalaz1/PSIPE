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
		<div class="headerBody">
			
		</div>
	</div><div class="inner_copy"></div>
<!-- / #header -->



<!-- #mainContent -->
	<div id="mainContent">
		<h1>&nbsp;</h1>
		
                       <div id="promo-wrapper">
                        <section id="promo">
                        
                        <?
						  include('conexion.php');
						  $cadena_sql="Select * from alumnos where matricula=$_REQUEST[matricula]";
                          $conjunto_datos=mysql_query($cadena_sql,$id_conexion) 
                          or die("Error al ejecutar la sentencia SQL");	
                          $reg=mysql_fetch_array($conjunto_datos);  
						?>
                           <div align="center"> <h2 class="pad_bot1">MODIFICAR</h2>
                         
  <form name="ingreso_alumnos" method="post" action="modificar3.php">
  <div align="center">
    <table width="363" border="0">
      <tr>
        <td width="111"><div align="right" class="Estilo7">Matricula</div></td>
        <td width="242"><input name="matricula" type="hidden" id="matricula" value=<? echo "'$reg[0]'"?> ></td>
      </tr>
       <tr>
        <td width="111"><div align="right" class="Estilo7">Password</div></td>
        <td width="242"><input name="password" type="text" id="password" value=<? echo "'$reg[1]'"?> ></td>
      </tr>
      <tr>
        <td><div align="right" class="Estilo7">Nombre </div></td>
        <td><input name="nombre" type="text" id="nombre" value=<? echo "'$reg[2]'" ?>></td>
      </tr>
      <tr>
        <td><div align="right" class="Estilo7">Apellido Paterno </div></td>
        <td><input name="appat" type="text" id="appat" value=<? echo "'$reg[3]'" ?>></td>
      </tr>
       <tr>
        <td><div align="right" class="Estilo7">Apellido Materno </div></td>
        <td><input name="apmat" type="text" id="apmat" value=<? echo "'$reg[4]'" ?>></td>
      </tr>
      <tr>
        <td><div align="right" class="Estilo7">Grupo </div></td>
        <td><input name="grupo" type="text" id="grupo" value=<? echo "'$reg[5]'" ?>></td>
      </tr>
      <tr>
        <td><div align="right" class="Estilo7">Periodo </div></td>
        <td><input name="ciclo" type="text" id="ciclo" value=<? echo "'$reg[6]'" ?>></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input type="submit" name="Submit" value="Modificar" /></td>
<input type="button" onclick=" location.href='newdocentes.php' " value="Cancelar" name="boton" />
      </tr>

      </table>
  </div>
  <br />
  <p align="center" class="Estilo2">Si esta seguro de modificar el registo pulse el boton de modificar </p>
  <p align="center">&nbsp;</p>
</form> </div>

  
 </div>                                                     
</section>
                                                      </div>
        
        
  </div>
<!-- / #mainContent -->
	<br class="clearfloat" />
<!-- #footer -->
<div id="footer">
	<div class="fcenter">
		<div class="fleft"><p>Copyright UPVM 2016</p></div><div class="fright"></div>
	</div>
</div>

<!-- / #footer -->
</div>
<!-- / #container -->
</body>
</html>