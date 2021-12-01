<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM renta";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pagina Renta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idComputadora" placeholder="No. Computadora">
                                    <input type="text" class="form-control mb-3" name="TiempoDeRenta" placeholder="Tiempo de Renta">
                                    <input type="text" class="form-control mb-3" name="PrecioDeRenta" placeholder="Precio de Renta">
                                    <input type="text" class="form-control mb-3" name="FechaDeRenta" placeholder="Fecha de Renta">
                                    <input type="text" class="form-control mb-3" name="idCliente" placeholder="No. Cliente">
                                    <input type="text" class="form-control mb-3" name="idEmpleado" placeholder="No. Empleado">

                                    <input type="submit" class="btn btn-primary">
                                    <li><a href="/proyecto_esquivel_cibercafe/index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Tiempo de Renta</th>
                                        <th>Precio de Renta</th>
                                        <th>Fecha de Renta</th>
                                        <th>No. Cliente</th>
                                        <th>No. Empleado</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idComputadora']?></th>
                                                <th><?php  echo $row['TiempoDeRenta']?></th>
                                                <th><?php  echo $row['PrecioDeRenta']?></th>    
                                                <th><?php  echo $row['FechaDeRenta']?></th>
                                                <th><?php  echo $row['idCliente']?></th>
                                                <th><?php  echo $row['idEmpleado']?></th>
                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['idComputadora'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idComputadora'] ?>" class="btn btn-danger">Eliminar</a></th>                                    
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>