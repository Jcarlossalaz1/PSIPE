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
		
	</div><div class="inner_copy"></div>
<!-- / #header -->



<!-- #mainContent -->
	<div id="mainContent">
		<h1>&nbsp;</h1>
		
                       <div id="promo-wrapper">
                        <section id="promo">
                        
                        <?
						  include('conexion.php');

$ciclos=str_replace("-","",$_REQUEST[ciclo]);
	$cadena_sql="update alumnos set  password='$_REQUEST[password]', nombre='$_REQUEST[nombre]', appat='$_REQUEST[appat]', apmat='$_REQUEST[apmat]', grupo=$_REQUEST[grupo], ciclo=$ciclos where matricula=$_REQUEST[matricula]";
    $conjunto_datos=mysql_query($cadena_sql,$id_conexion) 
      or die("Error al ejecutar la sentencia SQL");	
      echo "El registro se ha modificado";
      mysql_close($id_conexion);
						?>
                         

  
                                                    
</section>
<input type="button" onclick=" location.href='newdocentes.php' " value="Regresar" name="boton" />
                                                      </div>
        
        
  </div>


<!-- / #footer -->
</div>
<!-- / #container -->
</body>
</html>