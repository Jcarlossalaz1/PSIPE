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
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <title>UPVM PSIPE-1</title>
    	<meta name="keywords" content="" />
		<meta name="description" content="" />

        <meta name="viewport" content="width=device-width">
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,300,700' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/templatemo_main.css">
    </head>
    <body>
        <div id="main-wrapper">
            <!--[if lt IE 7]>
                <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a rel="nofollow" href="http://browsehappy.com">upgrade your browser</a> or <a rel="nofollow" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 affix text-center" style="z-index: 1;">
                <h1 class="templatemo-site-title">
                        <!--<a href="#">PSIPE-1</a>-->
                        DOCENTES
                        <img src="images/btn-menu.png" alt="main menu" id="m-btn" class="pull-right visible-xs visible-sm" >
                </h1>

                <ul id="responsive" style="display:none" class="hidden-lg hidden-md"></ul><!-- /.responsive -->
            </div>

            <div class="menu visible-md visible-lg">
                <ul id="menu-list">
                   <!-- <li class="active home-menu"><a href="#home">Home</a></li>-->
                    <li class="about-menu"><a href="#about">Altas</a></li>
                  <li class="file-menu"><a href="#file">Altas Archivo</a></li>
                    <li class="services-menu"><a href="#services">Modificar</a></li>
                    <li class="testimonial-menu"><a href="#testimonial">Resultado Grupal</a></li>
                    <li class="test-menu"><a href="#test">Resultado Individual</a></li>                    
                         <li><a rel="nofollow" target="_parent" href="newlogout.php" class="external">Cerrar Sesión</a></li>
                </ul>
            </div><!-- /.menu -->
<div class="image-section">
                <div class="image-container">
                    <img src="images/headerBackground2.jpg" id="home-img" class="main-img inactive" alt="Home">
			<img src="images/altas2.png" id="about-img" class="inactive" alt="About">
			<img src="images/altas2.png" id="file-img" class="inactive" alt="file">
                    <img src="images/modificar.png" id="services-img"  class="inactive" alt="Services">
                    <img src="images/RI1.jpg" id="test-img" class="inactive" alt="Test">
                    <img src="images/RI1.jpg" id="testimonial-img" class="inactive" alt="Testimonial">
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-6 col-md-offset-6 templatemo-content-wrapper">
                    <div class="templatemo-content">
                        
                        <section id="home-text" class="active templatemo-content-section">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <h2>Bienvenido/a PSIPE-1 de la Universidad Politécnica del Valle de México</h2>
                                <p>La información que se consultará permitirá analizar al 
grupo y al alumno en lo individual en cuanto a su 
personalidad, actitud y estilos de aprendizaje.</p>
                            </div>
                        </section><!-- /.home-text -->    

                        <section id="about-text" class="inactive">

                            <div class="col-sm-6 col-md-6">
								<h1>Altas </h1>
		
                      				      <form action="sesion2.php" method="post" name="form1" id="form1">
                                              <p>
                                              <span class>Matricula</span><br>
                                              <input type="text" name="matricula" id="matricula" required/>
                                              </p><br />
                                              <p>
                                              <span class="Estilo4">Contraseña</span><br>
                                              <input type="password" name="password" id="password" required/>
                                               </p><br />
                                               <p>
                                               <span class="Estilo4">Nombre</span><br>
                                              <input type="text" name="nombre"  id="nombre" required/>
                                               </p><br />
                                               <p>
                                               <span class="Estilo4">Apellido Paterno</span><br>
                                               <input type="text" name="appat"  id="appat" required/>
                                                </p><br />
                                                <p>
                                                <span class="Estilo4">Apellido Materno</span><br>
                                               <input type="text" name="apmat"  id="apmat" required/>
                                               </p><br />
                                               <h4> <span class="Estilo4">Seleccione grupo</span><br>
                                               <select name="grupo" id="grupo" required/>
                                               
                                               <option value="110151">110151</option>
                                               <option value="110152">110152</option>
                                               <option value="110153">110153</option>
                                               <option value="110251">110251</option>
                                               <option value="110252">110252</option>
                                               <option value="110253">110253</option>                                               
                                               <option value="110351">110351</option>
                                               <option value="110352">110352</option>
                                               <option value="110353">110353</option></h4>
                                               </select>
                                               </p><br />
                                               
                                                  <h4> <span class="Estilo4">Seleccione Periodo</span><br>
                                               <select name="ciclo" id="ciclo" required/>
                                               
                                               <option value="201703">2017-03</option>
                                               <option value="201801">2018-01</option>                                               
                                               <option value="201802">2018-02</option></h4>
                                               </select>
                                               </p><br />
                                                <input name="button" type="submit" id="button" value="Enviar" />
                                               <input name="restablecer" type="reset" id="restablecer" value="Restablecer" />
 
                                               </p>
                                              </form>
                                              
                                              <br>
                                              
                                              
                                              
                                                      

                        </section><!-- /.altas-text --> 
 
          <section id="file-text" class="inactive"><!-- /.inicio altas-text --> 

                            <div class="col-sm-6 col-md-6">
								<h1>Altas</h1>
		
		<h4>
		<form action="upfile.php" method="post" enctype="multipart/form-data" >
                                              Ingresa archivo ".txt"
                                              <br>
                                              <a target="_blank" href="uploads/AYUDA.pdf">AYUDA</a>

                                              <input name="uploadedfile" type="file" required/>     <input type="submit" value="Subir Archivo" />                                              </from></h4><br><br><br> </section><!-- /.altasfile-text --> 
                                              
                                              
                                              
                                
                                
<section id="servces-text" class="inactive">
                            <div class="col-sm-12 col-md-12">
                              <div align="center"> <h2 class="pad_bot1">Modificar</h2><br />
                               <form name="consulta1" method="post" action="resultados.php">
					<h4>Matricula:<input type="text" name="matricula" id="matricula"/>
						
                               <input type="submit" value="Aceptar"></h4>
                               </form>
                            </div> 
                        </section><!-- /.modificar.alumno-text --> 
                                
                                
                                
                                
                                
                                                                
                                              
                              <!--    <section id="services-text" class="inactive">
                            <h2 class="text-center">Modificar Alumno</h2>
                            <div class="col-sm-12 col-md-12">
                            
                            
                            
 <form name="modificar_alumnos" method="post" action="modificar2.php">
			<h4>Matricula:<input type="text" name="matricula" id="matricula"/>
                               <input type="submit" value="Aceptar"/></h4>
                               </form>
                            
                                </div>
                            
<h4><form action="modificar2.php" name="modificar_alumnos" method="post" >
                           <div align="center">
     <table width="363" border="0">
       <h2> <tr>
       
  <td width="99"><div align="right" class="Estilo8">Matricula</div></td>
          <td width="254"><input name="matricula" type="text" id="matricula" required/></td>
                   
        </tr></h2>       
          <td><input type="submit" name="Submit" value="Enviar"></td>
        </tr>
      </table>
    </div>
  <!--  <p>&nbsp;</p>
    <p>&nbsp; </p>
  </form></h4>--> 
<!--                     </section> /.modif.alumno-text --> 

                        
                        
                        
<section id="services-text" class="inactive">
                            <div class="col-sm-12 col-md-12">
                              <div align="center"> <h2 class="pad_bot1">Modificar</h2><br />
                               <form name="consulta1" method="post" action="modificar2.php">
					<h4>Matricula:<input type="text" name="matricula" id="matricula"/>
						
                               <input type="submit" value="Aceptar"></h4>
                               </form>
                            </div> 
                        </section><!-- /.modificar.alumno-text --> 
                        
<section id="test-text" class="inactive">
                            <div class="col-sm-12 col-md-12">
                              <div align="center"> <h2 class="pad_bot1">Consultar por Alumno</h2><br />
                               <form name="consulta1" method="post" action="resultados.php">
					<h4>Matricula:<input type="text" name="matricula" id="matricula"/>
						
                               <input type="submit" value="Aceptar"></h4>
                               </form>
                            </div> 
                        </section><!-- /.conul.alumno-text --> 
                        
                        
                        
                        
                         <section id="testimonial-text" class="inactive">
                            <div class="col-sm-12 col-md-12">
                               <div align="center"> <h2 class="pad_bot1">Consultar por Grupo</h2><br />
                               <form name="consulta1" method="post" action="resultados_grupal.php">
                               <h4>Grupo:<input type="text" name="grupo" id="grupo"/>
                               	
                                                  <h4> <span class="Estilo4">Seleccione Periodo</span><br>
                                               <select name="ciclog" id="ciclog" required/>
                                               <option value="0">Periodos</option>
                                               <option value="201503">2015-03</option>
                                               <option value="201602">2016-02</option>
                                               <option value="201603">2016-03</option>
                                               
                                               <option value="201703">2017-03</option>
                                               <option value="201801">2018-01</option>                                               
                                               <option value="201802">2018-02</option></h4>
                                               </select>
                                               </p><br />
                               <input type="submit" value="Aceptar"></h4>
                               </form>
                            </div>  
                            </div>
                        </section><!-- /.conul.grupo-text --> 
                       
                                 
                    </div><!-- /.templatemo-content -->  
                </div><!-- /.templatemo-content-wrapper --> 
            </div><!-- /.row --> 

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
                    <p class="footer-text">
                    	<font color="black"><span>Copyright &copy; 2016 UPVM</font>
                	</p>
                </div><!-- /.footer --> 
            </div>

	</div><!-- /#main-wrapper -->
        
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div><!-- /#preloader -->
        
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/templatemo_script.js"></script>
        <!-- templatemo 398 nature -->
    </body>
</html>