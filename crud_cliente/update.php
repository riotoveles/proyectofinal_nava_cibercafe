<?php

include("conexion.php");
$con=conectar();

$idCliente=$_POST['idCliente'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Telefono=$_POST['Telefono'];
$Direccion=$_POST['Direccion'];
$FechaYHoraDeRenta=$_POST['FechaYHoraDeRenta'];
$PrecioDeRenta=$_POST['PrecioDeRenta'];

$sql="UPDATE cliente SET Nombre='$Nombre',Apellidos='$Apellidos',Telefono='$Telefono',Direccion='$Direccion',FechaYHoraDeRenta='$FechaYHoraDeRenta',PrecioDeRenta='$PrecioDeRenta' WHERE idCliente='$idCliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>