<?php

include("conexion.php");
$con=conectar();

$idSerie=$_GET['id'];

$sql="DELETE FROM computadora WHERE idSerie='$idSerie'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: computadora.php");
    }
?>
