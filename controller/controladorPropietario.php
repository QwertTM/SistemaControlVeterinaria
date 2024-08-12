<?php

require_once(__DIR__.'../../config/conexion.php');
require_once(__DIR__.'../../model/modeloPropietario.php');

class cPropietario{
    private $modelo;

    public function __construct($conexion){
        $this->modelo=new modeloPropietario($conexion);
    }
    
    public function mostrarClientes(){
        $data = $this->modelo->mostrarregistros();
        include(__DIR__.'../../view/propietario/leer.php');
    }

    public function RegistrarCliente() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $email = $_POST['correo'];
    
            $mensaje = $this->modelo->crearregistro($nombre, $apellido, $direccion, $telefono, $email);
            include(__DIR__ . '../../view/propietario/mensaje.php');

        } else {
            include(__DIR__ . '../../view/propietario/crear.php');
        }
    }

    public function editarCliente($id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $email = $_POST['correo'];
    
            $mensaje = $this->modelo->editarregistro($id,$nombre, $apellido, $direccion, $telefono, $email);

            include(__DIR__ . '../../view/propietario/mensaje.php');

        } else {
            $data = $this->modelo->obtenerregistro($id);
            include(__DIR__ . '../../view/propietario/editar.php');
        }
    }

    public function eliminarCliente($id){
        
        $mensaje = $this->modelo->eliminar($id);
        include(__DIR__ . '../../view/propietario/mensaje.php');
    }
    
}