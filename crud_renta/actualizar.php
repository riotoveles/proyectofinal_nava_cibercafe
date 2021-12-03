<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM renta WHERE idComputadora='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idComputadora" value="<?php echo $row['idComputadora']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="TiempoDeRenta" placeholder="Tiempo de Renta" value="<?php echo $row['TiempoDeRenta']  ?>">
                                <input type="text" class="form-control mb-3" name="PrecioDeRenta" placeholder="Precio de Renta" value="<?php echo $row['PrecioDeRenta']  ?>">
                                <input type="text" class="form-control mb-3" name="FechaDeRenta" placeholder="Fecha de Renta" value="<?php echo $row['FechaDeRenta']  ?>">
                                <input type="text" class="form-control mb-3" name="idCliente" placeholder="No. Cliente" value="<?php echo $row['idCliente']  ?>">
                                <input type="text" class="form-control mb-3" name="idEmpleado" placeholder="No. Empleado" value="<?php echo $row['idEmpleado']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>