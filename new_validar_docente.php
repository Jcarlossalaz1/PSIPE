<?php
/****************************************
**establecemos conexion con el servidor.
**nombre del servidor: localhost.
**Nombre de usuario: root.
**Contraseña de usuario: root.
**Si la conexion fallara mandamos un msj 'ha fallado la conexion'**/
$mysqli=new mysqli('localhost','lizbeth','selfpass2015','lizbeth_upvm')or die ('Ha fallado la conexión: '.mysql_error());
 
/*caturamos nuestros datos que fueron enviados desde el formulario mediante el metodo POST
**y los almacenamos en variables.*/
$nempleado = $_POST["nempleado"];   
$password = $_POST["password"];

/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/
$result = $mysqli->query("SELECT * FROM docentes WHERE nempleado = '$nempleado'");

//Validamos si el nombre del administrador existe en la base de datos o es correcto
if($row = $result->fetch_object())
{     
//Si el usuario es correcto ahora validamos su contraseña
 if($row->password == $password)
 {
  //Creamos sesión
  session_start();  
  //Almacenamos el nombre de usuario en una variable de sesión usuario
  $_SESSION['nempleado'] = $nempleado;  

  header("Location: newdocentes.php");  
 }
 else
 {
  //En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
  ?>
   <script languaje="javascript">
    alert("Contrasena Incorrecta");
    location.href = "index.html";
   </script>
  <?
            
 }
}
else
{
 //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php
?>
 <script languaje="javascript">
  alert("El nombre de usuario es incorrecto!");
  location.href = "index.html";
 </script>
<?   
        
}

//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($result);

/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
**programar una aplicación que tendrá muchas visitas ;) .*/
mysql_close();
?>