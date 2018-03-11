<?php
//creamos la sesion

session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['nempleado'])) 
{
  header('Location: login4.php'); 
  exit();
  
}

	  else
	  { 
       
	    $conexion=mysql_connect('localhost','lizbeth','selfpass2016') or die("Problemas con la conexion");
  mysql_select_db("lizbeth_upp",$conexion) or die("Problemas al seleccionar la base de datos");

	   $matricula=$_POST['matricula'];
 
  $sql = "SELECT autoestima, sociable, asertividad,  autoeficacia,impulsividad,creencia_personal,conducta,depresion,ansiedad_en_examenes,total grupo FROM grafica WHERE matricula='" .$matricula."'";
                               $result = mysql_query ($sql);
							   while ($row = mysql_fetch_row($result)){
								   
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
 $_SESSION['test1p1']=$autoestima;
$_SESSION['test1p2']=$sociable;
 $_SESSION['test1p3']=$asertividad;
 $_SESSION['test1p4']=$autoeficacia ;
 $_SESSION['test1p5']=$impulsividad;
 $_SESSION['test1p6']=$creencia;
 $_SESSION['test1p7']=$conducta;
 $_SESSION['test1p8']=$depresion;
 $_SESSION['test1p9']=$ansiedad;



mysql_free_result($result);


	   include "libchart/libchart/classes/libchart.php"; 
	   header("Content-type: image/png");
	   $chart=new VerticalBarChart(500,400); 
 	   
	   
	   $dataSet=new XYDataSet();
	   $dataSet->addPoint(new Point("Autoestima $autoestima puntos",$autoestima));
	   $dataSet->addPoint(new Point("Sociable $sociable puntos",$sociable)); 
	   $dataSet->addPoint(new Point("Asertividad $asertividad puntos",$asertividad));
	   $dataSet->addPoint(new Point("Autoeficacia $autoeficacia puntos",$autoeficacia));
	   $dataSet->addPoint(new Point("Impulsividad $impulsividad puntos",$impulsividad));
	   $dataSet->addPoint(new Point("Creencia $creencia puntos",$creencia)); 
	   $dataSet->addPoint(new Point("Conducta $conducta puntos",$conducta));  
	   $dataSet->addPoint(new Point("Depresion $depresion puntos",$depresion));
	   $dataSet->addPoint(new Point("Ansiedad $ansiedad puntos",$ansiedad));
	   
	   $chart->SetDataSet($dataSet);
	   $chart->SetTitle("Grafica de resultados matricula: $matricula");
	   
	   $chart->render("images/grafica4.png");
	   
	  
	 
unset($autoestima, $sociable, $asertividad,  $autoeficacia,$impulsividad,$creencia,$conducta,$depresion,$ansiedad,$result);

	   
	     $conexion2=mysql_connect('localhost','lizbeth','selfpass2015') or die("Problemas con la conexion");
  mysql_select_db("lizbeth_upp",$conexion2) or die("Problemas al seleccionar la base de datos");
 
  $sql2 = "SELECT cognitivos, afectivos, conativos FROM ensenanzaaprendizaje WHERE matricula='" .$matricula."'";
  
  $result2 = mysql_query ($sql2);
							   while ($row2 = mysql_fetch_row($result2)){
								   
								$cognitivos=$row2[0];
								$afectivos=$row2[1];  
								$conativos=$row2[2];
                                                                                                   }
																   
$_SESSION['test2p1']=$cognitivos;
$_SESSION['test2p2']=$afectivos;
$_SESSION['test2p3']=$conativos;							   
mysql_free_result($result2);

	  
	  
	   $chart2=new VerticalBarChart(500,400); 
 	   
	   
	   $dataSet2=new XYDataSet();
	   $dataSet2->addPoint(new Point("Cognitivos",$cognitivos));
	   $dataSet2->addPoint(new Point("Afectivos ",$afectivos)); 
	   $dataSet2->addPoint(new Point("Conativos ",$conativos));
	   
	   $chart2->SetDataSet($dataSet2);
	   $chart2->SetTitle("Grafica de resultados matricula: $matricula");
	   
	   $chart2->render("images/grafica5.png");

          
unset($cognitivos, $afectivos, $conativos,$result2);

	   
	   
	   $conexion3=mysql_connect('localhost','lizbeth','selfpass2015') or die("Problemas con la conexion");
  mysql_select_db("lizbeth_upp",$conexion3) or die("Problemas al seleccionar la base de datos");
 
  $sql3 = "SELECT visual, kinestesico, auditivo, viau, viayki FROM test_conocimietos WHERE matricula='" .$matricula."'";
  
  $result3 = mysql_query ($sql3);
							   while ($row3 = mysql_fetch_row($result3)){
								   
								$visual=$row3[0];
								$kinestesico=$row3[1];  
								$auditivo=$row3[2];
								$viau=$row3[3];
								$viayki=$row3[4];
																   
							   }
 $_SESSION['test3p1']=$visual;
 $_SESSION['test3p2']=$kinestesico;
 $_SESSION['test3p3']=$auditivo;
 $_SESSION['test3p4']=$viau;
 $_SESSION['test3p5']=$viayki;

	  mysql_free_result($result3);
	   $chart3=new VerticalBarChart(500,400); 
 	   
	   
	   $dataSet3=new XYDataSet();
	   $dataSet3->addPoint(new Point("Visual",$visual));
	   $dataSet3->addPoint(new Point("Kinestesico",$kinestesico)); 
	   $dataSet3->addPoint(new Point("Auditivo",$auditivo));
	   $dataSet3->addPoint(new Point("Viau ",$viau));
	   $dataSet3->addPoint(new Point("Viayki ",$viayki));
	   
	   $chart3->SetDataSet($dataSet3);
	   $chart3->SetTitle("Grafica de resultados matricula: ".$matricula);
	   
	   $chart3->render("images/grafica6.png");
unset($visual,$kinestesico,$auditivo,$viau,$viayki,$result3);

		  
		header('location:ejecuta2.php');
		
		
		
	  }
	  
	  
	  
	  ?>




