<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "uiu";

$conexion = mysqli_connect($server, $user, $pass, $database);
// $conection=new mysqli("localhost:3306", "promay20_artea","restaurante1234","promay20_restauranteartea");

if(!$conexion) {
    die("<script>alert('Conexion fallida')</script>");
}

?>