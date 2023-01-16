<?php

$mysqli = new mysqli("localhost", "root", "", "incodeza");

if ($mysqli->connect_errno) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";

    exit;
}

if (isset($_POST["nombre"], $_POST["apellidoP"], $_POST["apellidoM"], $_POST["localidad"], $_POST["telefono"]) and $_POST["nombre"] !="" and $_POST["apellidoP"] !="" and $_POST["apellidoM"] !="" and $_POST["localidad"] !="" and $_POST["telefono"]!="" and $_POST["correo"]!="" ){
    $nombre = $_POST["nombre"];
    $apellidoP = $_POST["apellidoP"];
    $apellidoM = $_POST["apellidoM"];
    $localidad = $_POST["localidad"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $servicio =$_POST["servicio"];

    $consulta = "INSERT INTO clientes (nombre,apellidoP,apellidoM,localidad,telefono,correo,servicio) VALUES ('$nombre','$apellidoP','$apellidoM','$localidad','$telefono','$correo','$servicio')";

    if (mysqli_query($mysqli,$consulta) ){
        include("RegistroAgregado.php");

    }
    else {
        
        echo "<p>Fallo al agregar registro</p>";
    }
}
else {
    include("formulario.php");
    
}