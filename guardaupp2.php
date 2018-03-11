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
/*
  $grupoa = "SELECT grupo FROM alumnos WHERE matricula='" .$matricula."'";


                               $result = mysql_query ($grupoa);
							   while ($row = mysql_fetch_row($result)){
								   
								$grupo=$row[0];

							   }*/
       $visual=$_POST['1']+$_POST['2']+$_POST['3']+$_POST['4']+$_POST['5']; 
	   
	   $kinestesico=$_POST['6']+$_POST['7']+$_POST['8']+$_POST['9']+$_POST['10'];
	   
	   $auditivo=$_POST['11']+$_POST['12']+$_POST['13']+$_POST['14']+$_POST['15'];
       
	   $viau=$_POST['16']+$_POST['17']+$_POST['18']+$_POST['19']+$_POST['20'];
	   
	   $viayki=$_POST['21']+$_POST['22'];
	   
	   $total=$visual+$kinestesico+$auditivo+$viau+$viayki;
	   
  $conexion=mysql_connect('localhost','lizbeth','selfpass2016') or die("Problemas con la conexion");
  mysql_select_db("lizbeth_upp",$conexion) or die("Problemas al seleccionar la base de datos");
  
  mysql_query("insert into test_conocimietos(matricula,,grupo,visual,kinestesico,auditivo,viau,viayki,total) values ('$matricula','$grupo','$visual','$kinestesico','$auditivo','$viau','$viayki','$total')",$conexion) or die ("Problemas con el select".mysql_error());
  
  mysql_close($conexion);
  header('location:index2.php');


?>