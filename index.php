<?php

include('cabeza.php');

require_once(__DIR__.'/config/conexion.php');
require_once(__DIR__.'../controller/controladorPropietario.php');


$id = isset($_GET['id']) ? $_GET['id'] : null;
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'clientes':
            $cCliente = new cPropietario($conexion);
            $cCliente->mostrarClientes();
            break;
        case 'RegistrarCliente':
            $cCliente = new cPropietario($conexion);
            $cCliente->RegistrarCliente();
            break;
        case 'editarCliente':
            if($id !== null){
                $cCliente = new cPropietario($conexion);
                $cCliente->editarCliente($id);
            }
            break;
        case 'eliminarCliente':
            if($id !== null){
                $cCliente = new cPropietario($conexion);
                $cCliente->eliminarCliente($id);
            }
            break;
    }
}else{
    $cCliente = new cPropietario($conexion);
    $cCliente->mostrarClientes();
}




include('pie.php');