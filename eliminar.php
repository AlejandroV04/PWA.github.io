<?php

$mysqli = new mysqli("localhost", "root", "", "incodeza");

    $ID=$_GET['ID'];
    

    $sql="delete from clientes where ID='".$ID."'";
?>