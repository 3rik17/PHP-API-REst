<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
$servername = "107.180.48.193";
$username = "bdwsp_usuarios";
$password = "bdwsp_clave";
$dbname = "crudbd";
$conn = new mysqli($servername, $username, $password, $dbname);
?>
