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

$sql="UPDATE empleados SET Nombre='$Nombre',Apellidos='$Apellidos',Telefono='$Telefono',Direccion='$Direccion',FechaDeNacimiento='$FechaDeNacimiento',RFC='$RFC' WHERE idEmpleado='$idEmpleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>