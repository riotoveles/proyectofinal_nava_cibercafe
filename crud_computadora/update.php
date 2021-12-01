<?php

include("conexion.php");
$con=conectar();

$idSerie=$_POST['idSerie'];
$MarcaProcesador=$_POST['MarcaProcesador'];
$Almacenamiento=$_POST['Almacenamiento'];
$MemoriaRAM=$_POST['MemoriaRAM'];
$SistemaOperativo=$_POST['SistemaOperativo'];
$idComputadora=$_POST['idComputadora'];

$sql="UPDATE computadora SET MarcaProcesador='$MarcaProcesador',Almacenamiento='$Almacenamiento',MemoriaRAM='$MemoriaRAM',SistemaOperativo='$SistemaOperativo',idComputadora='$idComputadora' WHERE idSerie='$idSerie'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: computadora.php");
    }
?>