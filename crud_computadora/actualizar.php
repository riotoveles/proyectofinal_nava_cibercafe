<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM computadora WHERE idSerie='$id'";
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
                    
                                <input type="hidden" name="idSerie" value="<?php echo $row['idSerie']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="MarcaProcesador" placeholder="Marca del Procesador" value="<?php echo $row['MarcaProcesador']  ?>">
                                <input type="text" class="form-control mb-3" name="Almacenamiento" placeholder="Almacenamiento" value="<?php echo $row['Almacenamiento']  ?>">
                                <input type="text" class="form-control mb-3" name="MemoriaRAM" placeholder="Memoria RAM" value="<?php echo $row['MemoriaRAM']  ?>">
                                <input type="text" class="form-control mb-3" name="SistemaOperativo" placeholder="Sistema Operativo" value="<?php echo $row['SistemaOperativo']  ?>">
                                <input type="text" class="form-control mb-3" name="idComputadora" placeholder="No. Computadora" value="<?php echo $row['idComputadora']  ?>">
                               
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>