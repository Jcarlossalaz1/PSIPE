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
      

   $cognitivos=$_POST['1']+$_POST['2']+$_POST['3']+$_POST['4']+$_POST['5']+$_POST['6']+$_POST['7']+$_POST['8']+$_POST['9']+$_POST['10']; 
	   
	   $afectivos=$_POST['11']+$_POST['12']+$_POST['13']+$_POST['14']+$_POST['15']+$_POST['16']+$_POST['17']+$_POST['18']+$_POST['19']+$_POST['20'];
	   
	   $conativos=$_POST['21']+$_POST['22']+$_POST['23']+$_POST['24']+$_POST['25']+$_POST['26']+$_POST['27']+$_POST['28']+$_POST['29']+$_POST['30'];
       
	  
	   $total=$cognitivos+$afectivos+$conativos;
	   
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
  mysql_query("insert into ensenanzaaprendizaje values ('$matricula','$ciclo','$grupo','$cognitivos','$afectivos','$conativos','$total')",$conexion) or die ("Ya haz presentado este Test   ".mysql_error());
  unset($grupo,$ciclo);
  mysql_close($conexion);
  header('location:index.php');


?>