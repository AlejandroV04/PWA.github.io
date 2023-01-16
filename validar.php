<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","incodeza");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index2.html");

}else{
    ?>
    <?php
    include("error.php");
    ?>
    
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);