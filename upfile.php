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

$target_path = "uploads/";
$target_path2 = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path2) && $_FILES['uploadedfile']['type'] =="text/plain") { 
$var=basename( $_FILES['uploadedfile']['name']);
echo "El archivo ". $var. " ha sido subido";

$archivo="uploads//$var";
//$archivo2="Libro1tab.txt";
//$archivo="uploads\\$archivo2";
//echo "\nMI RCHIVO".$archivo;
$squery="load data local infile "."'$archivo'"."  into table alumnos;";
//echo "MI QUERY".$squery;
$conexion=mysql_connect("localhost","lizbeth","selfpass2015") or die("Problemas en la conexion");
mysql_select_db("lizbeth_upvm",$conexion) or  die("Problemas en la seleccion de la base de datos");
mysql_query($squery,$conexion) or die("Un problema surgio ".mysql_error());
mysql_close($conexion);

       echo "Registro realizado con exito.<br><br>";
unset($target_path,$target_path2,$archivo);
	
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}

	 
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