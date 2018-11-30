<?php
require_once("myDBC.php");
if(isset($_SESSION['session']))
{
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>..:PAGINA PRINCIPAL:..</title>
</head>

<body bgcolor="#F5A9F2">
	<center><h2>BIENVENIDO</h2></center>
	
	<a href="salir.php"><h4>CERRAR SESSION</h4></a>
</body>
</html>
<?php
}else
echo'<script type="text/javascript">
	  alert("Registrarse para ver este contenido");
	  window.location="http://localhost/login/index.php"
</script>';
?>
