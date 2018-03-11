<?
$id_conexion=mysql_connect("localhost","lizbeth","selfpass2015")
      or die("Error en la conexion al servidor de base de datos.");
  $id_base=mysql_select_db("lizbeth_upvm",$id_conexion) 
      or die("Error en la base de datos.");
	  
?> 