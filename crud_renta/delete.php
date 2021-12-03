<?php

include("conexion.php");
$con=conectar();

$idComputadora=$_GET['id'];

$sql="DELETE FROM renta WHERE idComputadora='$idComputadora'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: renta.php");
    }
?>
