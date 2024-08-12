
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta con Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php if($data): ?>
    <div class="container mt-5">
        <div class="card shadow-sm rounded">
            <div class="card-body">
                <div class="text-center">
                <h2>REGISTRO</h2>
                </div><br><br>
        <div class="container">
        <form action="" method ="POST">
        <input type="text" name="id" value="<?php echo $data['IdPropietario']; ?>"  hidden>
          <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $data['Nombre']; ?>" class="form-control" required><br>
                    <label for="color">correo:</label>
                    <input type="text" id="correo" name="correo" value="<?php echo $data['Email']; ?>" class="form-control" required><br>
                    <label for="color">Direccion:</label>
                    <input type="text" id="direccion" name="direccion" value="<?php echo $data['Direccion']; ?>" class="form-control" required><br><br>
                    
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" value="<?php echo $data['Apellido']; ?>" class="form-control" required><br>
                    <label for="peso">Telefono:</label>
                    <input type="number" id="telefono" name="telefono"class="form-control" value="<?php echo $data['Telefono']; ?>"><br><br>
                </div>
            </div>
          </div>
        <div class="form-row">
            <div class="col">
                <div class="text-center">
                        <button type="submit" class="btn btn-primary" onclick="return">ACTUALIZAR</button>
                    </div>
            </div>
            <div class="col">
                <div class="text-center">
                        <button type="button" class="btn btn-danger" onclick="window.history.back();">CANCELAR</button>
                    </div>
            </div>
        </div>
        </form>
        </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</body>
</html>