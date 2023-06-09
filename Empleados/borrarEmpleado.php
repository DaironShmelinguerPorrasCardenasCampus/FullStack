<?php


require_once("configEmpleado.php");
$record = new Empleado();

if (isset($_GET['id_empleado']) && isset($_GET['req'])){
    if ($_GET['req'] == "delete"){
            $record-> setEmpleadoId($_GET['id_empleado']);
            $record-> deleteEmpleado();
            echo "<script>alert('EMPLEADO BORRADO DE LA BASE DE DATOS');document.location='empleado.php'</script>";
    }
}





?>