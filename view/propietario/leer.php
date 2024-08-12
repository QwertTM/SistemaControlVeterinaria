<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Propietarios</h2>
    <div class="container mt-5">
        <div class="card shadow-sm rounded">
            <div class="card-body">
    <button onclick="registrar()" type="button" class="btn btn-success">REGISTRAR</button><br><br>
     <div class="table-responsive"> 
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>N°</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>Email</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
        </thead>
        <tbody>
        <?php if($data):?>
            <?php foreach($data as $propietario):?>
            <tr>
                <td>#<?php echo $propietario['IdPropietario']?></td>
                <td><?php echo $propietario['Nombre']?></td>
                <td><?php echo $propietario['Apellido']?></td>
                <td><?php echo $propietario['Direccion']?></td>
                <td><?php echo $propietario['Telefono']?></td>
                <td><?php echo $propietario['Email']?></td>
                <td class="tabla-font" style="vertical-align: middle; text-align: center;" style="vertical-align: middle; text-align: center;">
                    <a href="index.php?page=editarCliente&id=<?php echo $propietario['IdPropietario']?>">
                        <span class="nav-link" style="justify-content: left;">
                            <i class="bi bi-pencil-square" style="font-size: 1.2rem; color: grey;" ></i>
                        </span>
                    </a>
                </td>
                <td class="tabla-font" style="vertical-align: middle; text-align: center;">
                    <a href="index.php?page=eliminarCliente&id=<?php echo $propietario['IdPropietario']?>">
                        <span class="nav-link" style="justify-content: left;">
                            <i class="bi bi-trash3" style="font-size: 1.2rem; color: red;"></i>
                        </span>
                    </a>
                </td>

            </tr>
            <?php endforeach;?>
        <?php endif;?>
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>

    <script>
        function registrar(){
            window.location.href = 'index.php?page=RegistrarCliente';
        }
    </script>
</body>
</html>