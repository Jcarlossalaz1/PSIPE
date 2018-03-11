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

<!DOCTYPE html>
<html>

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
<body >
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
		

<?php
//Inicio de condiciones Test 1

if( $_SESSION['test1p1']>= 0 &&  $_SESSION['test1p1'] <10) {
 $testper1="imagesresultados/NA.jpeg";}
if( $_SESSION['test1p1']>= 10 &&  $_SESSION['test1p1'] <= 24) {
 $testper1="imagesresultados/auto10-24.JPG";}
elseif( $_SESSION['test1p1']>= 24 &&  $_SESSION['test1p1'] <= 37) {
$testper1="imagesresultados/auto37-24.JPG";}
elseif( $_SESSION['test1p1'] >= 37 &&  $_SESSION['test1p1'] <= 50) {
$testper1="imagesresultados/auto50-37.JPG"; }

if( $_SESSION['test1p2']>= 0 &&  $_SESSION['test1p2'] <10) {
 $testper2="imagesresultados/NA.jpeg";}
if($_SESSION['test1p2'] >= 10 && $_SESSION['test1p2'] <= 24) {
 $testper2="imagesresultados/soci10-24.JPG"; }
elseif ($_SESSION['test1p2']>= 24 && $_SESSION['test1p2'] <= 37) {
 $testper2="imagesresultados/soci37-24.JPG"; }
elseif($_SESSION['test1p2'] >= 37 && $_SESSION['test1p2'] <= 50) {
$testper2="imagesresultados/soci50-37.JPG"; }


if( $_SESSION['test1p3']>= 0 &&  $_SESSION['test1p3'] <10) {
 $testper3="imagesresultados/NA.jpeg";}
if($_SESSION['test1p3'] >= 10 && $_SESSION['test1p3'] <= 24) {
 $testper3="imagesresultados/aser10-24.JPG"; }
elseif ($_SESSION['test1p3'] >= 24 && $_SESSION['test1p3'] <= 37) {
 $testper3="imagesresultados/aser37-24.JPG"; }
elseif($_SESSION['test1p3'] >= 37 && $_SESSION['test1p3'] <= 50) {
$testper3="imagesresultados/aser50-37.JPG"; }

if( $_SESSION['test1p4']>= 0 &&  $_SESSION['test1p4'] <10) {
 $testper4="imagesresultados/NA.jpeg";}
if($_SESSION['test1p4'] >= 10 && $_SESSION['test1p4'] <= 24) {
 $testper4="imagesresultados/autoe10-24.JPG"; }
elseif($_SESSION['test1p4'] >= 24 && $_SESSION['test1p4'] <= 37) {
$testper4="imagesresultados/autoe37-24.JPG"; }
elseif($_SESSION['test1p4'] >= 37 && $_SESSION['test1p4'] <= 50) {
$testper4="imagesresultados/autoe50-37.JPG"; }


if( $_SESSION['test1p5']>= 0 &&  $_SESSION['test1p5'] <10) {
 $testper5="imagesresultados/NA.jpeg";}
if($_SESSION['test1p5']>= 10 && $_SESSION['test1p5']<= 24) {
 $testper5="imagesresultados/imp10-24.JPG"; }
elseif ($_SESSION['test1p5'] >= 24 && $_SESSION['test1p5'] <= 37) {
 $testper5="imagesresultados/imp37-24.JPG"; }
elseif($_SESSION['test1p5'] >= 37 && $_SESSION['test1p5'] <= 50) {
$testper5="imagesresultados/imp50-37.JPG"; }


if( $_SESSION['test1p6']>= 0 &&  $_SESSION['test1p6'] <10) {
 $testper6="imagesresultados/NA.jpeg";}
if($_SESSION['test1p6'] >= 10 && $_SESSION['test1p6'] <= 24) {
 $testper6="imagesresultados/cree10-24.JPG"; }
elseif ($_SESSION['test1p6'] >= 24 && $_SESSION['test1p6'] <= 37) {
 $testper6="imagesresultados/cree37-24.JPG"; }
elseif($_SESSION['test1p6'] >= 37 && $_SESSION['test1p6'] <= 50) {
$testper6="imagesresultados/cree50-37.JPG"; }


if( $_SESSION['test1p7']>= 0 &&  $_SESSION['test1p7'] <10) {
 $testper7="imagesresultados/NA.jpeg";}
if($_SESSION['test1p7'] >= 10 && $_SESSION['test1p7'] <= 24) {
 $testper7="imagesresultados/cond10-24.JPG"; }
elseif ($_SESSION['test1p7'] >= 24 && $_SESSION['test1p7'] <= 37) {
 $testper7="imagesresultados/cond37-24.JPG"; }
elseif($_SESSION['test1p7'] >= 37 && $_SESSION['test1p7'] <= 50) {
$testper7="imagesresultados/cond50-37.JPG"; }


if( $_SESSION['test1p8']>= 0 &&  $_SESSION['test1p8'] <10) {
 $testper8="imagesresultados/NA.jpeg";}
if($_SESSION['test1p8'] >= 10 && $_SESSION['test1p8']<= 24) {
 $testper8="imagesresultados/depr10-24.JPG"; }
elseif ($_SESSION['test1p8'] >24 && $_SESSION['test1p8'] <37) {
 $testper8="imagesresultados/depr37-24.JPG"; }
elseif($_SESSION['test1p8'] >37 &&$_SESSION['test1p8'] <50) {
$testper8="imagesresultados/depr50-37.JPG"; }


if( $_SESSION['test1p9']>= 0 &&  $_SESSION['test1p9'] <10) {
 $testper9="imagesresultados/NA.jpeg";}
if($_SESSION['test1p9'] >= 10 && $_SESSION['test1p9'] <= 24) {
 $testper9="imagesresultados/ansi10-24.JPG"; }
elseif ($_SESSION['test1p9'] >= 24 && $_SESSION['test1p9'] <= 37) {
 $testper9="imagesresultados/ansi37-24.JPG"; }
elseif($_SESSION['test1p9'] >= 37 && $_SESSION['test1p9'] <= 50) {
$testper9="imagesresultados/ansi50-37.JPG"; }

//FIN TEST 1, INICIO TEST 2

if( $_SESSION['test2p1']>= 0 &&  $_SESSION['test2p1'] <10) {
 $testact1="imagesresultados/NA.jpeg";}
if($_SESSION['test2p1'] >= 10 && $_SESSION['test2p1'] <= 24) {
 $testact1="imagesresultados/actcog10-24.JPG"; }
elseif ($_SESSION['test2p1'] >= 24 && $_SESSION['test2p1'] <= 37) {
 $testact1="imagesresultados/actcog37-24.JPG"; }
elseif($_SESSION['test2p1'] >= 37 && $_SESSION['test2p1'] <= 50) {
$testact1="imagesresultados/actcog50-37.JPG"; }


if( $_SESSION['test2p2']>= 0 &&  $_SESSION['test2p2'] <10) {
 $testact2="imagesresultados/NA.jpeg";}
if($_SESSION['test2p2'] >= 10 && $_SESSION['test2p2'] <= 24) {
 $testact2="imagesresultados/dimaf10-24.JPG"; }
elseif ($_SESSION['test2p2']>24 && $_SESSION['test2p2']<37) {
 $testact2="imagesresultados/dimaf37-24.JPG"; }
elseif($_SESSION['test2p2']>37 && $_SESSION['test2p2']<50) {
$testact2="imagesresultados/dimaf50-37.jpg"; }


if( $_SESSION['test2p3']>= 0 &&  $_SESSION['test2p3'] <10) {
 $testact3="imagesresultados/NA.jpeg";}
if( $_SESSION['test2p3']>= 10 && $_SESSION['test2p3'] <= 24) {
 $testact3="imagesresultados/dimcona10-24.JPG"; }
elseif ($_SESSION['test2p3'] >= 24 && $_SESSION['test2p3'] <= 37) {
 $testact3="imagesresultados/dimcona37-24.JPG"; }
elseif($_SESSION['test2p3'] >= 37 && $_SESSION['test2p3'] <= 50) {
$testact3="imagesresultados/dimcona50-37.JPG"; }


//FIN TEST 2, INICIO TEST 3
if( $_SESSION['test3p1']>= 0 &&  $_SESSION['test3p1'] <18) {
 $testest1="imagesresultados/NA.jpeg";}
if($_SESSION['test3p1'] >= 18 && $_SESSION['test3p1'] <= 25) {
$testest1="imagesresultados/vis.JPG"; }

if( $_SESSION['test3p2']>= 0 &&  $_SESSION['test3p2'] <18) {
 $testest2="imagesresultados/NA.jpeg";}
if($_SESSION['test3p2'] >= 18 && $_SESSION['test3p2']<= 25) {
 $testest2="imagesresultados/kine.JPG"; }

if( $_SESSION['test3p3']>= 0 &&  $_SESSION['test3p3'] <18) {
 $testest3="imagesresultados/NA.jpeg";}
if($_SESSION['test3p3']>= 18 && $_SESSION['test3p3'] <= 25) {
 $testest3="imagesresultados/aud.JPG"; }

if( $_SESSION['test3p4']>= 0 &&  $_SESSION['test3p4'] <14) {
 $testest4="imagesresultados/NA.jpeg";}
if($_SESSION['test3p4'] >= 14 && $_SESSION['test3p4']<= 20) {
$testest4="imagesresultados/mixva.JPG"; }

if( $_SESSION['test3p5']>= 0 &&  $_SESSION['test3p5'] <11) {
 $testest5="imagesresultados/NA.jpeg";}
if($_SESSION['test3p5'] >= 11 &&$_SESSION['test3p5'] <= 15) {
 $testest5="imagesresultados/mixvak.JPG"; }

                ?>


<h2><div align="justify"> SI NO SE MUESTRA LA GRAFICA CORRECTA ACTUALIZA LA PAGINA PRESIONANDO F5 o <input type="button" value="aquí" onclick="window.location.reload()" />.<br>
<input type="button" onclick=" location.href='newdocentes.php' " value="Regresar a Docentes" name="boton" /></h2><br><br>        
        
        <img src="images/grafica.png" /><br><br><br><br>
   
<h3><div align="center"> Autoestima</h3><br><br>
<hr><img src="<?php echo $testper1; ?>" ><br><br>
<h3><div align="center"> Sociable</h3><br><br>
<hr><img src="<?php echo $testper2; ?>" ><br><br>
<h3><div align="center"> Asertividad</h3><br><br>
<hr><img src="<?php echo $testper3; ?>" ><br><br>
<h3><div align="center"> Autoeficacia</h3><br><br>
<hr><img src="<?php echo $testper4; ?>" ><br><br>
<h3><div align="center"> Impulsividad</h3><br><br>
<hr><img src="<?php echo $testper5; ?>" ><br><br>
<h3><div align="center"> Creencia</h3><br><br>
<hr><img src="<?php echo $testper6; ?>" ><br><br>
<h3><div align="center"> Conducta</h3><br><br>
<hr><img src="<?php echo $testper7; ?>" ><br><br>
<h3><div align="center"> Depresion</h3><br><br>
<hr><img src="<?php echo $testper8; ?>" ><br><br>
<h3><div align="center"> Ansiedad</h3><br><br>
<hr><img src="<?php echo $testper9; ?>" ><br><br>
<?php unset($testper1,$testper2,$testper3,$testper4,$testper5,$testper6,$testper7,$testper8,$testper9);         ?>

 <img src="images/grafica2.png" /><br><br><br><br>

<h3><div align="center"> Actitud cognitiva</h3><br><br>
<hr><img src="<?php echo $testact1; ?>" ><br><br>
<h3><div align="center"> Dimensión afectiva</h3><br><br>
<hr><img src="<?php echo $testact2; ?>" ><br><br>
<h3><div align="center"> Dimensión conativa</h3><br><br>
<hr><img src="<?php echo $testact3; ?>" ><br><br><br><br>
<?php unset($testact1,$testact2,$testact3);?>

<h3><div align="center">ESTRATEGIAS PARA DIFERENTES TIPOS DE APRENDIZAJE </h3><br><br>
   <img src="images/grafica3.png" /><br><br><br><br>

<h3><div align="center"> Visuales</h3><br><br>
<hr><img src="<?php echo $testest1; ?>" >
<h3><div align="center"> Kinest&eacute;sicos</h3><br><br>
<hr><img src="<?php echo $testest2; ?>" >
<h3><div align="center"> Auditivos</h3><br><br>
<hr><img src="<?php echo $testest3; ?>" >
<h3><div align="center"> Estrategias visuales y auditivo</h3><br><br>
<hr><img src="<?php echo $testest4; ?>" >
<h3><div align="center"> Estrategias mixto visual, kinest&eacute;sico y auditivo</h3><br><br>
<hr><img src="<?php echo $testest5; ?>" >
<?php unset($testest1,$testest2,$testest3,$testest4,$testest5);?>
</div>
<br><input type="button" onclick=" location.href='newdocentes.php' " value="Regresar a Docentes" name="boton" />
<!-- / #mainContent -->
	<br class="clearfloat" />
<!-- #footer -->
<div id="footer">
	<div class="fcenter">
		<div class="fleft"><p>Copyright UPVM 2016  </p></div><div class="fright"></div>
	</div>
</div>

<!-- / #footer -->
</div>
<!-- / #container -->






</body>
</html>