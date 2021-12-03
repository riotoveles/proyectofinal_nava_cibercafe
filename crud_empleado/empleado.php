<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM empleados";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pagina Empleado</title>
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

                                    <input type="text" class="form-control mb-3" name="idEmpleado" placeholder="No. Empleado">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="FechaDeNacimiento" placeholder="Fecha de Nacimiento">
                                    <input type="text" class="form-control mb-3" name="RFC" placeholder="RFC">

                                    <input type="submit" class="btn btn-primary">
                                    <li><a href="/proyecto_esquivel_cibercafe/index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Telefono</th>
                                        <th>Direccion</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>RFC</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idEmpleado']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellidos']?></th>    
                                                <th><?php  echo $row['Telefono']?></th>
                                                <th><?php  echo $row['Direccion']?></th>
                                                <th><?php  echo $row['FechaDeNacimiento']?></th>
                                                <th><?php  echo $row['RFC']?></th>
                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['idEmpleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idEmpleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                    
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