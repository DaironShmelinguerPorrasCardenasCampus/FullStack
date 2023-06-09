
<?php

require_once("configCliente.php");
$data = new Cliente();

$allCliente = $data-> obtenerCliente(); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/Artemis.css">
    
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm colornav navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../css/constructor.png" alt="" width="280px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3 ">
                        <a class="nav-link " href="#home">HOME</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="../Clientes/cliente.php">CLIENTES</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="../Empleados/empleado.php">EMPLEADOS</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#videu">COTIZACIÓN</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#videu">DETALLE COTIZACIÓN</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#videu">PRODUCTO</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#videu">SALIR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<div class="contenedor">
    

    <div class="parte-izquierda">
    <div class="perfil">
        <!-- poner imagenes -->
    </div>
   
    </div>

    <div class="parte-media">
      <div style="display: flex; justify-content: space-between;">
      
        <h2>CLIENTES</h2>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarCliente" data-bs-whatever="@mdo">AGREGAR DATOS</button>    
      </div>
      <div class="menuTabla mt-5">
        <table class="table table-custom ">
          <thead>
            <tr>
              <th scope="col">ID </th>
              <th scope="col">NOMBRE</th>
              <th scope="col">TELEFONO</th>
              <th scope="col">CIUDAD</th>
              <th scope="col">DIRECCION</th>
              <th scope="col">ELIMINAR</th>
              <th scope="col">MODIFICRAR</th>
            </tr>
          </thead>
          <tbody class="" id="tabla">

            <?php
            foreach ($allCliente as $key => $val) {
            ?>
            <tr>
              <td> <?php echo $val['id_cliente']?></td>
              <td> <?php echo $val['Nombre_cliente']?></td>
              <td> <?php echo $val['Telefono']?></td>
              <td> <?php echo $val['ciudad_cliente']?></td>
              <td> <?php echo $val['Direccion']?></td>
              <td> <a  class="btn btn-danger" href="borrarCliente.php?id_cliente=<?= $val['id_cliente']?>&&req=delete">BORRAR </a></td>
              <td> <a  class="btn btn-primary" href="editarCliente.php?id_cliente">MODIFICAR </a></td>
             
            </tr>
            <?php } ?>

          </tbody>
        
        </table>

      </div>


    </div>


    <div class="parte-derecho " id="detalles">
   
    </div>
            


    <div class="modal fade" id="registrarCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px)">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content" >
          <div class="modal-header" >
            <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVO CLIENTE</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background-color: rgb(231, 253, 246);">
          <form class="col d-flex flex-wrap" action="registrarCliente.php" method="post">
                        <div class="mb-1 col-12">
                        <label for="nombre" class="form-label">NOMBRE</label>
                        <input 
                        type="text"
                        id="nombre"
                        name="nombre"
                        class="form-control"  
                        />
                    </div>

                    <div class="mb-1 col-12">
                        <label for="telefono" class="form-label">TELEFONO</label>
                        <input 
                        type="text"
                        id="telefono"
                        name="telefono"
                        class="form-control"  
                        />
                    </div>

                    <div class="mb-1 col-12">
                        <label for="ciudad" class="form-label">CIUDAD</label>
                        <input 
                        type="text"
                        id="ciudad"
                        name="ciudad"
                        class="form-control"  
                        />
                    </div>


                    <div class="mb-1 col-12">
                        <label for="direccion" class="form-label">DIRECCIÓN</label>
                        <input 
                        type="text"
                        id="direccion"
                        name="direccion"
                        class="form-control"  
                        />
                    </div>
                    <div class=" col-12 m-2">
                <input type="submit" class="btn btn-primary" value="ADD CLIENTE" name="guardarCliente"/>
              </div>
                    </form>
         </div>       
        </div>
      </div>
    </div>
    
            

</div>

</body>
</html>