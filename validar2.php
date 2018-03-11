<?php
session_start();
if(!isset($_SESSION['matricula'])) 
{
  header('Location: login.php'); 
  exit();
}


$conexion=mysql_connect("localhost","lizbeth","selfpass2016") 
  or die("Problemas en la conexion");
mysql_select_db("lizbeth_upp",$conexion) or
  die("Problemas en la seleccion de la base de datos");
  
  
$matricula=$_SESSION['matricula'];
    
if(isset($_POST['condiciones'])) {
	mysql_query("insert into confidencialidad(matricula, condiciones) values 
($matricula, '$condiciones')",
   $conexion) or die("Problemas en el select".mysql_error());
	header("location:index2.php");
 
} 

else{
header("location:index.html");
} 

?>