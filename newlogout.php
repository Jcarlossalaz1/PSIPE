<?php 
 //Crear sesi贸n
 session_start();
 //Vaciar sesi贸n
 $_SESSION = array();
 //Destruir Sesi贸n
 session_destroy();
 //Redireccionar a login.php
 header("location: index.html");
?>