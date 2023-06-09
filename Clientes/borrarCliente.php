<?php


require_once("configCliente.php");
$record = new Cliente();

if (isset($_GET['id_cliente']) && isset($_GET['req'])){
    if ($_GET['req'] == "delete"){
            $record-> setClienteId($_GET['id_cliente']);
            $record-> deleteCliente();
            echo "<script>alert('CLIENTE BORRADO DE LA BASE DE DATOS');document.location='cliente.php'</script>";
    }
}





?>