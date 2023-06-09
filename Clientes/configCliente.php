<?php

require_once("../config/db.php");
require_once("../config/conexion.php");


class Cliente extends Conexion{


    private $id;
    private $nombre;
    private $telefono;
    private $ciudad;
    private $direccion;
     
    public function __construct($id = 0 ,$nombre="",  $telefono = "", $ciudad  ="", $direccion = "" , $dbCnx=""){
        $this->id =$id;
        $this->nombre =$nombre;
        $this->telefono =$telefono;
        $this->ciudad =$ciudad;
        $this->direccion =$direccion;
        parent::__construct($dbCnx);
    }


    public function setClienteId($id){
        $this->id = $id;
    }
    public function getClienteId(){
        return $this->id;
    }

    public function setClienteNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getClienteNombre(){
        return $this->nombre;
    }

    public function setClienteTelefono($telefono){
        $this-> telefono= $telefono;
    }
    public function getClienteTelefono(){
        return $this->telefono;
    }
    public function setClienteCiudad($ciudad){
        $this-> ciudad= $ciudad;
    }
    public function getClienteCiudad(){
        return $this->ciudad;
    }
    public function setClienteDireccion($direccion){
        $this-> direccion= $direccion;
    }
    public function getClienteDireccion(){
        return $this->direccion;
    }

    public function insertCliente(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO clientes(Nombre_cliente, Telefono, ciudad_cliente, Direccion) VALUE (?,?,?,?)");
            $stm -> execute([$this->nombre, $this->telefono,$this->ciudad,$this->direccion,]);
        } catch (Exception $e) {
            echo $e -> getMessage();
        }
    }

    public function obtenerCliente(){
        try {
            $stm = $this -> dbCnx -> prepare("SELECT * FROM clientes");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e -> getMessage();
        }

            }

            public function deleteCliente(){
                try {
                    $stm = $this -> dbCnx -> prepare("DELETE FROM clientes WHERE id_cliente = ?");
                    $stm -> execute([$this->id]);
                    return $stm -> fetchAll();
                    echo "<script>alert('CLIENTE ELIMINADO');document.location='cliente.php'</script>";
                } catch (Exception $e) {
                    return $e -> getMessage();
                }
            }


}




?>