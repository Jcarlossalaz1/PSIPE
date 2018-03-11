<?php
$mysqli=new mysqli('localhost','lizbeth','selfpass2015','lizbeth_upvm')or die ('Ha fallado la conexión: '.mysql_error());
$matricula = $_POST["matricula"];   
$password = $_POST["password"];
$grup=$_POST["group"];
//$_SESSION['group']=$grup;

/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/
$result = $mysqli->query("SELECT * FROM alumnos WHERE matricula = '$matricula'");

//Validamos si el nombre del administrador existe en la base de datos o es correcto
if($row = $result->fetch_object())
{     
//Si el usuario es correcto ahora validamos su contraseña
 if($row->password == $password)
 {
  //Creamos sesión
  session_start();  
  //Almacenamos el nombre de usuario en una variable de sesión usuario
  $_SESSION['matricula'] = $matricula;  
  $_SESSION['NOMBRE']= $row->nombre." ".$row->appat." ".$row->apmat;
  //Redireccionamos a la pagina: index.php
  header("Location: confidencialidad.php");  
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