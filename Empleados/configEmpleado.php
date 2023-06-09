<?php

require_once("../config/db.php");
require_once("../config/conexion.php");


class Empleado extends Conexion{


    private $id;
    private $nombre;
    private $celular;
    private $direccion;
     
    public function __construct($id = 0 ,$nombre="",  $celular = "",  $direccion = "" , $dbCnx=""){
        $this->id =$id;
        $this->nombre =$nombre;
        $this->celular =$celular;
        $this->direccion =$direccion;
        parent::__construct($dbCnx);
    }


    public function setEmpleadoId($id){
        $this->id = $id;
    }
    public function getEmpleadoId(){
        return $this->id;
    }

    public function setEmpleadoNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getEmpleadoNombre(){
        return $this->nombre;
    }

    public function setEmpeladoCelular($celular){
        $this-> celular= $celular;
    }
    public function getEmpeladoCelular(){
        return $this->celular;
    }
   
    public function setEmpleadoDireccion($direccion){
        $this-> direccion= $direccion;
    }
    public function getEmpleadoDireccion(){
        return $this->direccion;
    }

    public function insertEmpleado(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO empleados(Nombre_empleado,Celular_empleado,Direccion) VALUE (?,?,?)");
            $stm -> execute([$this->nombre, $this->celular,$this->direccion,]);
        } catch (Exception $e) {
            echo $e -> getMessage();
        }
    }

    public function obtenerEmpleados(){
        try {
            $stm = $this -> dbCnx -> prepare("SELECT * FROM empleados");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e -> getMessage();
        }

            }

            public function deleteEmpleado(){
                try {
                    $stm = $this -> dbCnx -> prepare("DELETE FROM empleados WHERE id_empleado = ?");
                    $stm -> execute([$this->id]);
                    return $stm -> fetchAll();
                    echo "<script>alert('CLIENTE ELIMINADO');document.location='empleado.php'</script>";
                } catch (Exception $e) {
                    return $e -> getMessage();
                }
            }


}




?>