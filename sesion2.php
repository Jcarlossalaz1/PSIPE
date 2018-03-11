<?php
session_start();


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
<link href="css/stylealt.css" rel="stylesheet" type="text/css" />
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
	   <div id="promo-wrapper">
                        <section id="promo">
		
                   

<center>

<?
$conexion=mysql_connect("localhost","lizbeth","selfpass2015") 
  or die("Problemas en la conexion");
mysql_select_db("lizbeth_upvm",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into alumnos values 
('$_REQUEST[matricula]','$_REQUEST[password]','$_REQUEST[nombre]','$_REQUEST[appat]','$_REQUEST[apmat]',$_REQUEST[grupo],$_REQUEST[ciclo])",
   $conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);

       echo "El alumno fue registrado con exito.<br><br>";

?>

<?
       
      $nombre=$_POST["nombre"];  
      $appat=$_POST["appat"];
	  $apmat=$_POST["apmat"];
	
     echo "Nombre: $nombre <br>";
     echo "Apellido Paterno: $appat <br>";
	 echo "Apellido Materno: $apmat";
	

	 
?><br>
<input type="button" onclick=" location.href='newdocentes.php' " value="Regresar" name="boton" />
</center>
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

<!-- / #footer -->
</div>
<!-- / #container -->
</body>
</html>