<?php

include("conexion.php");
$con=conectar();

$idComputadora=$_POST['idComputadora'];
$TiempoDeRenta=$_POST['TiempoDeRenta'];
$PrecioDeRenta=$_POST['PrecioDeRenta'];
$FechaDeRenta=$_POST['FechaDeRenta'];
$idCliente=$_POST['idCliente'];
$idEmpleado=$_POST['idEmpleado'];

$sql="UPDATE cliente SET TiempoDeRenta='$TiempoDeRenta',PrecioDeRenta='$PrecioDeRenta',FechaDeRenta='$FechaDeRenta',idCliente='$idCliente',idEmpleado='$idEmpleado' WHERE idComputadora='$idComputadora'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: renta.php");
    }
?>