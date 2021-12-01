<?php
include("conexion.php");
$con=conectar();

$idComputadora=$_POST['idComputadora'];
$TiempoDeRenta=$_POST['TiempoDeRenta'];
$PrecioDeRenta=$_POST['PrecioDeRenta'];
$FechaDeRenta=$_POST['FechaDeRenta'];
$idCliente=$_POST['idCliente'];
$idEmpleado=$_POST['idEmpleado'];

$sql="INSERT INTO renta VALUES('$idComputadora','$TiempoDeRenta','$PrecioDeRenta','$FechaDeRenta','$idCliente','$idEmpleado')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: renta.php");
}else {
}
?>