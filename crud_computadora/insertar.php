<?php
include("conexion.php");
$con=conectar();

$idSerie=$_POST['idSerie'];
$MarcaProcesador=$_POST['MarcaProcesador'];
$Almacenamiento=$_POST['Almacenamiento'];
$MemoriaRAM=$_POST['MemoriaRAM'];
$SistemaOperativo=$_POST['SistemaOperativo'];
$idComputadora=$_POST['idComputadora'];


$sql="INSERT INTO computadora VALUES('$idSerie','$MarcaProcesador','$Almacenamiento','$MemoriaRAM','$SistemaOperativo','$idComputadora')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: computadora.php");
}else {
}
?>