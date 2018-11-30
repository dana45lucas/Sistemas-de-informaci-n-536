<?php
require_once("myDBC.php");
session_destroy();
header("Location: http://localhost/login/index.php");
?>
