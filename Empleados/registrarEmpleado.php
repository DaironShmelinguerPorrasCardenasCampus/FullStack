<?php

if(isset($_POST['guardarEmpleado'])){
    require_once("configEmpleado.php");    
   
    $config = new Empleado();
    $config-> setEmpleadoNombre($_POST['nombre']);
    $config-> setEmpeladoCelular($_POST['celular']);
    $config-> setEmpleadoDireccion($_POST['direccion']);
    $config-> insertEmpleado();
   
    echo "<script> alert('EMPLEADO INSERTADO CORRECTAMENTE');document.location ='empleado.php'</script>";
   
   }



?>