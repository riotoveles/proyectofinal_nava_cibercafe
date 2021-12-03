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


$sql="INSERT INTO cliente VALUES('$idCliente','$Nombre','$Apellidos','$Telefono','$Direccion','$FechaYHoraDeRenta','$PrecioDeRenta')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
}else {
}
?>