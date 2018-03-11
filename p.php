<?php
	    
	 /* $conexion=mysql_connect('localhost','lizbeth','selfpass2016') or die("Problemas con la conexion");
  mysql_select_db("lizbeth_upvm",$conexion) or die("Problemas al seleccionar la base de datos");
 
 
$sql ="SELECT AVG(visual), kinestesico, auditivo, viau, viayki FROM test_conocimietos WHERE grupo='" .'110103'."'";
                           
  $result = mysql_query ($sql,$conexion);
							   while ($row = mysql_fetch_array($result)){
								   
								 $autoestima=$row[0];
							         $sociable=$row[1];  
								$asertividad=$row[2];
								$autoeficacia=$row[3];
								$impulsividad=$row[4];
								$creencia=$row[5];
								$conducta=$row[6];
								$depresion=$row[7];
								$ansiedad=$row[8]; 
								   
							   }




 mysql_free_result($result);

		header('location:ejecutag.php');*/
		
	$archivo="C:/Users/Salvador/Desktop/Libro1.txt";
$archivon=str_replace("\","/",$archivo);
echo $archivo;

?>