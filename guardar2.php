<?php
/****************************************
**establecemos conexion con el servidor.
**nombre del servidor: localhost.
**Nombre de usuario: root.
**Contraseña de usuario: root.
**Si la conexion fallara mandamos un msj 'ha fallado la conexion'**/
mysql_connect('localhost','lizbeth','selfpass2015')or die ('Ha fallado la conexión: '.mysql_error());

/*Luego hacemos la conexión a la base de datos. 
**De igual manera mandamos un msj si hay algun error*/
mysql_select_db('lizbeth_upvm')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
 
/*caturamos nuestros datos que fueron enviados desde el formulario mediante el metodo POST
**y los almacenamos en variables.*/
$matricula = $_POST["matricula"];
$grupo=$_POST['group'];
$resultado1=$_POST["resultado1"];
$resultado2=$_POST["resultado2"];
$resultado3=$_POST["resultado3"];  
$resultado4=$_POST["resultado4"];  
$resultado5=$_POST["resultado5"];   

/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/
$result = mysql_query("UPDATE test_conocimietos SET visual='$resultado1',grupo='$grupo',kinestesico='$resultado2',auditivo='$resultado3',visualyaudi='$resultado4',vikineyaudi='$resultado5' WHERE matricula = '$matricula'");

?>
   <script languaje="javascript">
    alert("Guardado correctamente");
    location.href = "index.php";
   </script>
  <?

//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($result);

/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
**programar una aplicación que tendrá muchas visitas ;) .*/
mysql_close();
?>