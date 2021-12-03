<?php
include("conexion.php");
$con=conectar();

$idEmpleado=$_POST['idEmpleado'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Telefono=$_POST['Telefono'];
$Direccion=$_POST['Direccion'];
$FechaDeNacimiento=$_POST['FechaDeNacimiento'];
$RFC=$_POST['RFC'];


$sql="INSERT INTO empleados VALUES('$idEmpleado','$Nombre','$Apellidos','$Telefono','$Direccion','$FechaDeNacimiento','$RFC')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
}else {
}
?>