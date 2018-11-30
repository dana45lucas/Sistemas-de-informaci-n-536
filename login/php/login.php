<?php
require_once("myDBC.php");
$consultas=new myDBC();
$user=trim($_POST['usuario']);
$pass=trim($_POST['contrasenia']);
$log = $consultas->logueo($user, $pass);

?>
