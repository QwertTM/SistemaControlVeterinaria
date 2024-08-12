<?php

class modeloPropietario{
    private $conexion;

    public function __construct($con){
        $this->conexion = $con;
    }

    public function crearregistro($nombre, $apellido, $direccion, $telefono, $email){
        $sentencia = 'INSERT INTO senati_propietario(Nombre, Apellido, Direccion, Telefono, Email) VALUES(:nombre, :apellido, :direccion, :telefono, :email)';
        $consulta = $this->conexion->prepare($sentencia);
        $valores = [
            ':nombre'=>$nombre, 
            ':apellido'=>$apellido, 
            ':direccion'=>$direccion, 
            ':telefono'=>$telefono, 
            ':email'=>$email];
        if($consulta->execute($valores)){
            $respuesta = 'cliente <b>'.$nombre.'</b> agregado correctamente';
            return $respuesta;
        }else{
            $respuesta = 'Error al ejecutar el guardado';
            return $respuesta;
        }
    }

    public function mostrarregistros(){
        $sentencia = 'SELECT * FROM senati_propietario';
        $consulta = $this->conexion->prepare($sentencia);
        $consulta->execute();
        $dato = $consulta->fetchAll();
        return $dato;
    }

    public function obtenerregistro($id) {
        $sentencia = 'SELECT * FROM senati_propietario WHERE IdPropietario=:id';
        $consulta = $this->conexion->prepare($sentencia);
        $valores = [':id' => $id];
        $consulta->execute($valores);
        $data = $consulta->fetch();
        return $data;
    }
    

    public function editarregistro($id, $nombre, $apellido, $direccion, $telefono, $email){
        $sentencia = 'UPDATE senati_propietario SET Nombre=:nombre, Apellido=:apellido, Direccion=:direccion, Telefono=:telefono, Email=:email WHERE IdPropietario=:id';
        $consulta = $this->conexion->prepare($sentencia);
        $valores = [
            ':id'=>$id,
            ':nombre'=>$nombre, 
            ':apellido'=>$apellido, 
            ':direccion'=>$direccion, 
            ':telefono'=>$telefono, 
            ':email'=>$email];
        if($consulta->execute($valores)){
            $respuesta = 'EDITADO correctamente';
            return $respuesta;
        }else{
            $respuesta = 'Error al ejecutar el editado';
            return $respuesta;
        }
    }

    public function eliminar($id){
        $sentencia = 'DELETE FROM senati_propietario WHERE IdPropietario=:id';
        $consulta = $this->conexion->prepare($sentencia);
        $valores = [':id'=>$id];
        if($consulta->execute($valores)){
            $respuesta = 'ELIMINADO correctamente';
            return $respuesta;
        }else{
            $respuesta = 'Error al ejecutar el ELIMINADO';
            return $respuesta;
        }

    }
}