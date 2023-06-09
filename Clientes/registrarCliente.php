<?php
ini_set("display_errors" , 1);
ini_set("display_starup_errors" , 1);

error_reporting(E_ALL);   
if(isset($_POST['guardarCliente'])){
    require_once("configCliente.php");    
   
    $config = new Cliente();
    $config-> setClienteNombre($_POST['nombre']);
    $config-> setClienteTelefono($_POST['telefono']);
    $config-> setClienteCiudad($_POST['ciudad']);
    $config-> setClienteDireccion($_POST['direccion']);
    $config-> insertCliente();
   
    echo "<script> alert('CLIENTE INSERTADO CORRECTAMENTE');document.location ='cliente.php'</script>";
   
   }



?>