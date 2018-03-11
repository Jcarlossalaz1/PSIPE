<?
   session_start();
   $matricula=$_POST["matricula"];
   $password=$_POST["password"];
   $conexion=mysql_connect("localhost","lizbeth","selfpass2016") or die("Error en la conexión");
   mysql_select_db("lizbeth_upp",$conexion) or die("Error en la base de datos");
   $sql="Select * from alumnos where matricula='".$matricula."' and password='".$password."'";
   $recordSet=mysql_query($sql,$conexion) or die("Error en la sentencia SQL");
   $reg=mysql_fetch_array($recordSet);
   mysql_close($conexion);  
   $num=mysql_num_rows($recordSet);
   if($num==1)
   {
	  $_SESSION["matricula"]=$reg["matricula"];
	  $_SESSION["password"]=$reg["password"];
      header("location:confidencialidad2.php");
   }
   else
   {
	  session_destroy();
      header("location:index.html");
   }
?>