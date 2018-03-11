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
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

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

<script type='text/javascript'>
//actualiza pagina 
(function()
{
  if( window.localStorage )
  {
    if( !localStorage.getItem('firstLoad') )
    {
      localStorage['firstLoad'] = true;
      window.location.reload();
    }  
    else
      localStorage.removeItem('firstLoad');
  }
})();

</script>

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
				<li><a class="buttonPosition" href="#">Consultar Resultados</a></li>
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
		<h1>&nbsp;</h1>
	<?php
//Inicio de condiciones Test 1

if( $_SESSION['test1p1']>= 0 &&  $_SESSION['test1p1'] <10) {
 $testper1="imagesresultados/NA.jpeg";}
if( $_SESSION['test1p1']>= 90 &&  $_SESSION['test1p1'] <= 210) {
 $testper1="imagesresultados/autoestima10-24.jpg";}
elseif( $_SESSION['test1p1']>= 210 &&  $_SESSION['test1p1'] <= 330) {
$testper1="imagesresultados/autoestima37-24.jpg";}
elseif( $_SESSION['test1p1'] >= 330 &&  $_SESSION['test1p1'] <= 450) {
$testper1="imagesresultados/autoestima50-37.jpg"; }

if( $_SESSION['test1p2']>= 0 &&  $_SESSION['test1p2'] <10) {
 $testper2="imagesresultados/NA.jpeg";}
if($_SESSION['test1p2'] >= 90 &&  $_SESSION['test1p2'] <= 210) {
 $testper2="imagesresultados/sociable10-24.jpg"; }
elseif ($_SESSION['test1p2']>= 24 && $_SESSION['test1p2'] <= 37) {
 $testper2="imagesresultados/sociable37-24.jpg"; }
elseif($_SESSION['test1p2'] >= 37 && $_SESSION['test1p2'] <= 50) {
$testper2="imagesresultados/sociable50-37.jpg"; }


if( $_SESSION['test1p3']>= 0 &&  $_SESSION['test1p3'] <10) {
 $testper3="imagesresultados/NA.jpeg";}
if($_SESSION['test1p3'] >= 90 &&  $_SESSION['test1p3'] <= 210) {
 $testper3="imagesresultados/asertividad10-24.jpg"; }
elseif ($_SESSION['test1p3'] >= 24 && $_SESSION['test1p3'] <= 37) {
 $testper3="imagesresultados/asertividad37-24.jpg"; }
elseif($_SESSION['test1p3'] >= 37 && $_SESSION['test1p3'] <= 50) {
$testper3="imagesresultados/asertividad50-37.jpg"; }

if( $_SESSION['test1p4']>= 0 &&  $_SESSION['test1p4'] <10) {
 $testper4="imagesresultados/NA.jpeg";}
if($_SESSION['test1p4'] >= 90 &&  $_SESSION['test1p4'] <= 210) {
 $testper4="imagesresultados/autoeficacia10-24.jpg"; }
elseif($_SESSION['test1p4'] >= 24 && $_SESSION['test1p4'] <= 37) {
$testper4="imagesresultados/autoeficacia37-24.jpg"; }
elseif($_SESSION['test1p4'] >= 37 && $_SESSION['test1p4'] <= 50) {
$testper4="imagesresultados/autoeficacia50-37.jpg"; }


if( $_SESSION['test1p5']>= 0 &&  $_SESSION['test1p5'] <10) {
 $testper5="imagesresultados/NA.jpeg";}
if($_SESSION['test1p5']>= 90 &&  $_SESSION['test1p5'] <= 210) {
 $testper5="imagesresultados/impulsividad10-24.jpg"; }
elseif ($_SESSION['test1p5'] >= 24 && $_SESSION['test1p5'] <= 37) {
 $testper5="imagesresultados/impulsividad37-24.jpg"; }
elseif($_SESSION['test1p5'] >= 37 && $_SESSION['test1p5'] <= 50) {
$testper5="imagesresultados/impulsividad50-37.jpg"; }


if( $_SESSION['test1p6']>= 0 &&  $_SESSION['test1p6'] <10) {
 $testper6="imagesresultados/NA.jpeg";}
if($_SESSION['test1p6'] >= 90 &&  $_SESSION['test1p6'] <= 210) {
 $testper6="imagesresultados/creenciapersonal10-24.jpg"; }
elseif ($_SESSION['test1p6'] >= 24 && $_SESSION['test1p6'] <= 37) {
 $testper6="imagesresultados/creenciapersonal37-24.jpg"; }
elseif($_SESSION['test1p6'] >= 37 && $_SESSION['test1p6'] <= 50) {
$testper6="imagesresultados/creenciapersonal50-37.jpg"; }


if( $_SESSION['test1p7']>= 0 &&  $_SESSION['test1p7'] <10) {
 $testper7="imagesresultados/NA.jpeg";}
if($_SESSION['test1p7'] >= 90 &&  $_SESSION['test1p7'] <= 210) {
 $testper7="imagesresultados/conducta10-24.jpg"; }
elseif ($_SESSION['test1p7'] >= 24 && $_SESSION['test1p7'] <= 37) {
 $testper7="imagesresultados/conducta37-24.jpg"; }
elseif($_SESSION['test1p7'] >= 37 && $_SESSION['test1p7'] <= 50) {
$testper7="imagesresultados/conducta50-37.jpg"; }


if( $_SESSION['test1p8']>= 0 &&  $_SESSION['test1p8'] <10) {
 $testper8="imagesresultados/NA.jpeg";}
if($_SESSION['test1p8'] >= 90 &&  $_SESSION['test1p8'] <= 210) {
 $testper8="imagesresultados/depresion10-24.jpg"; }
elseif ($_SESSION['test1p8'] >24 && $_SESSION['test1p8'] <37) {
 $testper8="imagesresultados/depresion37-24.jpg"; }
elseif($_SESSION['test1p8'] >37 &&$_SESSION['test1p8'] <50) {
$testper8="imagesresultados/depresion50-37.jpg"; }


if( $_SESSION['test1p9']>= 0 &&  $_SESSION['test1p9'] <10) {
 $testper9="imagesresultados/NA.jpeg";}
if($_SESSION['test1p9'] >= 10 && $_SESSION['test1p9'] <= 24) {
 $testper9="imagesresultados/Ansiedadenexámenes10-24.jpg"; }
elseif ($_SESSION['test1p9'] >= 24 && $_SESSION['test1p9'] <= 37) {
 $testper9="imagesresultados/Ansiedadenexámenes37-24.jpg"; }
elseif($_SESSION['test1p9'] >= 37 && $_SESSION['test1p9'] <= 50) {
$testper9="imagesresultados/Ansiedadenexámenes50-37.jpg"; }

//FIN TEST 1, INICIO TEST 2

if( $_SESSION['test2p1']>= 0 &&  $_SESSION['test2p1'] <10) {
 $testact1="imagesresultados/NA.jpeg";}
if($_SESSION['test2p1'] >= 10 && $_SESSION['test2p1'] <= 24) {
 $testact1="imagesresultados/actitudcognitiva10-24.jpg"; }
elseif ($_SESSION['test2p1'] >= 24 && $_SESSION['test2p1'] <= 37) {
 $testact1="imagesresultados/Actitudcognitiva37-24.jpg"; }
elseif($_SESSION['test2p1'] >= 37 && $_SESSION['test2p1'] <= 50) {
$testact1="imagesresultados/Actitudcognitiva50-37.jpg"; }


if( $_SESSION['test2p2']>= 0 &&  $_SESSION['test2p2'] <10) {
 $testact2="imagesresultados/NA.jpeg";}
if($_SESSION['test2p2'] >= 10 && $_SESSION['test2p2'] <= 24) {
 $testact2="imagesresultados/Dimensiónafectiva10-24.jpg"; }
elseif ($_SESSION['test2p2']>24 && $_SESSION['test2p2']<37) {
 $testact2="imagesresultados/Dimensiónafectiva37-24.jpg"; }
elseif($_SESSION['test2p2']>37 && $_SESSION['test2p2']<50) {
$testact2="imagesresultados/Dimensiónafectiva50-37.jpg"; }


if( $_SESSION['test2p3']>= 0 &&  $_SESSION['test2p3'] <10) {
 $testact3="imagesresultados/NA.jpeg";}
if( $_SESSION['test2p3']>= 10 && $_SESSION['test2p3'] <= 24) {
 $testact3="imagesresultados/conativa1024.jpg"; }
elseif ($_SESSION['test2p3'] >= 24 && $_SESSION['test2p3'] <= 37) {
 $testact3="imagesresultados/conativa37-24.jpg"; }
elseif($_SESSION['test2p3'] >= 37 && $_SESSION['test2p3'] <= 50) {
$testact3="imagesresultados/conativa37-50.jpg"; }


//FIN TEST 2, INICIO TEST 3
if( $_SESSION['test3p1']>= 0 &&  $_SESSION['test3p1'] <18) {
 $testest1="imagesresultados/NA.jpeg";}
if($_SESSION['test3p1'] >= 18 && $_SESSION['test3p1'] <= 25) {
$testest1="imagesresultados/estrategiasvisuales.jpg"; }

if( $_SESSION['test3p2']>= 0 &&  $_SESSION['test3p2'] <18) {
 $testest2="imagesresultados/NA.jpeg";}
if($_SESSION['test3p2'] >= 18 && $_SESSION['test3p2']<= 25) {
 $testest2="imagesresultados/estrategiaskinestesicos.jpg"; }

if( $_SESSION['test3p3']>= 0 &&  $_SESSION['test3p3'] <18) {
 $testest3="imagesresultados/NA.jpeg";}
if($_SESSION['test3p3']>= 18 && $_SESSION['test3p3'] <= 25) {
 $testest3="imagesresultados/estrategiasauditivos.jpg"; }

if( $_SESSION['test3p4']>= 0 &&  $_SESSION['test3p4'] <14) {
 $testest4="imagesresultados/NA.jpeg";}
if($_SESSION['test3p4'] >= 14 && $_SESSION['test3p4']<= 20) {
$testest4="imagesresultados/estrategiasmixtova.jpg"; }

if( $_SESSION['test3p5']>= 0 &&  $_SESSION['test3p5'] <11) {
 $testest5="imagesresultados/NA.jpeg";}
if($_SESSION['test3p5'] >= 11 &&$_SESSION['test3p5'] <= 15) {
 $testest5="imagesresultados/estrategiasmixtovak.jpg"; }

                ?>


<h2><div align="justify"> SI NO SE MUESTRA LA GRAFICA CORRECTA RECARGAR LA PAGINA O PRESIONANDO F5</h2><br><br>        
        
        <img src="images/graficag1.png" />
   
<h3><div align="center"> Autoestima</h3><br><br>
<hr><img src="<?php echo $testper1; ?>" width="600" height="550">
<h3><div align="center"> Sociable</h3><br><br>
<hr><img src="<?php echo $testper2; ?>" width="600" height="550">
<h3><div align="center"> Asertividad</h3><br><br>
<hr><img src="<?php echo $testper3; ?>" width="600" height="550">
<h3><div align="center"> Autoeficacia</h3><br><br>
<hr><img src="<?php echo $testper4; ?>" width="600" height="550">
<h3><div align="center"> Impulsividad</h3><br><br>
<hr><img src="<?php echo $testper5; ?>" width="600" height="550">
<h3><div align="center"> Creencia</h3><br><br>
<hr><img src="<?php echo $testper6; ?>" width="600" height="550">
<h3><div align="center"> Conducta</h3><br><br>
<hr><img src="<?php echo $testper7; ?>" width="600" height="550">
<h3><div align="center"> Depresion</h3><br><br>
<hr><img src="<?php echo $testper8; ?>" width="600" height="550">
<h3><div align="center"> Ansiedad</h3><br><br>
<hr><img src="<?php echo $testper9; ?>" width="600" height="550">
       

 <img src="images/graficag2.png" />

<h3><div align="center"> Cognitivos</h3><br><br>
<hr><img src="<?php echo $testact1; ?>" width="600" height="550">
<h3><div align="center"> Afectivos</h3><br><br>
<hr><img src="<?php echo $testact2; ?>" width="600" height="550">
<h3><div align="center"> Conativos</h3><br><br>
<hr><img src="<?php echo $testact3; ?>" width="600" height="550">

   <img src="images/graficag3.png" />

<h3><div align="center"> Visual</h3><br><br>
<hr><img src="<?php echo $testest1; ?>" width="600" height="550">
<h3><div align="center"> Kinestesico</h3><br><br>
<hr><img src="<?php echo $testest2; ?>" width="600" height="550">
<h3><div align="center"> Auditivo</h3><br><br>
<hr><img src="<?php echo $testest3; ?>" width="600" height="550">
<h3><div align="center"> Estrategias visuales y auditivo</h3><br><br>
<hr><img src="<?php echo $testest4; ?>" width="600" height="550">
<h3><div align="center"> Estrategias mixto visual, kinestesico y auditivo</h3><br><br>
<hr><img src="<?php echo $testest5; ?>" width="600" height="550">
 

 
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