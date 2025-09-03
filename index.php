<?php
require_once("conexion.php");
$consulta = "SELECT * FROM gatitos";
$gatitos = $conexion -> query($consulta);
$todos_los_gatitos = $gatitos->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Prueba</title>
</head>
<body>
    <style>
        .contenedor{
            padding: 20%;
            padding-top: 10%;
        }
    </style>
    <div class="contenedor">
        <div class="form">
            <form action="datos.php?accion=crear" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="tabla">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <?php foreach($todos_los_gatitos as $gatito){ ?>
                    <tr>
                        <td><?php echo $gatito['id']; ?></td>
                        <td><?php echo $gatito['nombre']; ?></td>
                        <td><?php echo $gatito['email']; ?></td>
                        <td><?php echo $gatito['pass']; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $gatito['id']; ?>"><button type="button" class="btn btn-info">Editar</button></a>
                            <a href="datos.php?accion=borrar&id=<?php echo $gatito['id']; ?>"><button type="button" class="btn btn-danger">Borrar</button></a>
                        </td>
                    </tr>
                <?php  }  ?>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>