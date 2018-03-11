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
      $matricula=$_SESSION['matricula'];
  
   $autoestima=$_POST['1']+$_POST['2']+$_POST['3']+$_POST['4']+$_POST['5']+$_POST['6']+$_POST['7']+$_POST['8']+$_POST['9']+$_POST['10']; 
	   
	   $sociable=$_POST['11']+$_POST['12']+$_POST['13']+$_POST['14']+$_POST['15']+$_POST['16']+$_POST['17']+$_POST['18']+$_POST['19']+$_POST['20'];
	   
	   $asertividad=$_POST['21']+$_POST['22']+$_POST['23']+$_POST['24']+$_POST['25']+$_POST['26']+$_POST['27']+$_POST['28']+$_POST['29']+$_POST['30'];
       
	   $autoeficacia=$_POST['31']+$_POST['32']+$_POST['33']+$_POST['34']+$_POST['35']+$_POST['36']+$_POST['37']+$_POST['38']+$_POST['39']+$_POST['40'];
	   
	   $impulsividad=$_POST['41']+$_POST['42']+$_POST['43']+$_POST['44']+$_POST['45']+$_POST['46']+$_POST['47']+$_POST['48']+$_POST['49']+$_POST['50'];
	   
	   $creencia=$_POST['51']+$_POST['52']+$_POST['53']+$_POST['54']+$_POST['55']+$_POST['56']+$_POST['57']+$_POST['58']+$_POST['59']+$_POST['60'];
	   
	   $conducta=$_POST['61']+$_POST['62']+$_POST['63']+$_POST['64']+$_POST['65']+$_POST['66']+$_POST['67']+$_POST['68']+$_POST['69']+$_POST['70'];
	   
	   $depresion=$_POST['71']+$_POST['72']+$_POST['73']+$_POST['74']+$_POST['75']+$_POST['76']+$_POST['77']+$_POST['78']+$_POST['79']+$_POST['80'];
	   
	   $ansiedad=$_POST['81']+$_POST['82']+$_POST['83']+$_POST['84']+$_POST['85']+$_POST['86']+$_POST['87']+$_POST['88']+$_POST['89']+$_POST['90'];
	   
	   $total=$autoestima+$sociable+$asertividad+$autoeficacia+$impulsividad+$creencia+$conducta+$depresion+$ansiedad;
	   
  $conexion=mysql_connect('localhost','lizbeth','selfpass2015') or die("Problemas con la conexion");
  mysql_select_db("lizbeth_upvm",$conexion) or die("Problemas al seleccionar la base de datos");
       //getgroup & getcicle 
    $result=mysql_query("select grupo,ciclo from alumnos where matricula='".$_SESSION['matricula']."'");



 while ($row = mysql_fetch_row($result)){
								   
	$grupo=$row[0];
	$ciclo=$row[1];  }


//echo "$grupo   $ciclo $matricula";

mysql_free_result($result);
    //insert scores in table
  mysql_query("insert into grafica values ('$matricula','$ciclo','$grupo','$autoestima','$sociable','$asertividad','$autoeficacia','$impulsividad','$creencia','$conducta','$depresion','$ansiedad','$total')",$conexion) or die ("Ya haz presentado este Test".mysql_error());
    unset($grupo,$ciclo);
  mysql_close($conexion);
  header('location:index.php');


?>