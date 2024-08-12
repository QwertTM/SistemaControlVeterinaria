<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Bootstrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para el sidebar */
        #sidebar {
            min-height: 100vh; /* Ocupa toda la altura de la pantalla */
            width: 110px; /* Ancho del sidebar */
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40; /* Color de fondo */
            padding-top: 20px;
        }

        #sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        #sidebar a:hover {
            background-color: #495057;
        }

        /* Estilo para el contenido principal */
        #content {
            margin-left: 250px; /* Espacio para el sidebar */
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <h4 class="text-center text-white">VET</h4>
        <a href="index.php?page=personal">Personal</a>
        <a href="index.php?page=pacientes">Paciente</a>
        <a href="index.php?page=clientes">Clientes</a>
        <a href="index.php?page=inventario">Inventario</a>
        <a href="index.php?page=tratamientos">Tratamientos</a>
    </div>
    <div class="container">
    
    
