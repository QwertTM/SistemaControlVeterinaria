<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Modal general para mensajes-->
    <div class="modal fade" id="mensaje-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Aviso</h5>
                </div>
                <div class="modal-body" id="mensaje-confirmacion" style="text-align: center;">
                <?php echo $mensaje; ?>
                </div>
                <div class="modal-footer">
                    <button id="btn-confirma-aviso" style="font-size: 1rem;" type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Abre el modal automáticamente cuando se carga la página
            var modal = new bootstrap.Modal(document.getElementById('mensaje-confirma'));
            modal.show();

            // Redirigir después de cerrar el modal
            document.getElementById('btn-confirma-aviso').addEventListener('click', function() {
                window.location.href = 'index.php?page=clientes';
            });
        });
    </script>
</body>
</html>
