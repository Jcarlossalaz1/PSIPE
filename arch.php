<?php
session_start();


?>
<form enctype="multiform/form-data" method="post" >
  Archivo: <input type="text" name="archivo"><br>
  <input type="submit" value="Submit">
</form>
<?php

$archivo=$_POST["archivo"];
echo "\nArchivon = $archivo";
$archivo=str_replace('\\','/',$archivo);
echo "Archivo = $archivo";


$conexion=mysql_connect("localhost","lizbeth","selfpass2016") 
  or die("Problemas en la conexion");
mysql_select_db("lizbeth_upvm",$conexion) or  die("Problemas en la seleccion de la base de datos");
mysql_query("load data infile '$archivo' into table alumnos;", $conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);

       echo "El alumno fue registrado con exito.<br><br>";


?>