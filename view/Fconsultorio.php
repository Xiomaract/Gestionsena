<!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Pagina Principal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>

<body>

<nav class="navbar navbar-expand-sm bg-info navbar-light">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="imagenes/iconoprincipal.png" alt="logo" style="width:50px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <ul class="nav navbar ml-auto">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registroC">Consultorios</button>
    </ul> 

    <li class="nav-item">
      <a class="nav-link" href="#">Medicos</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">Pacientes</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">Citas</a>
    </li>
  </ul>

  <ul class="nav navbar ml-auto">
    <button class="btn btn-danger navbar-btn" >Cerrar sesion</button>
  </ul>    
</nav>

<div id="registroC" class="modal fade" role="dialog">
    <div  class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>  
            </div>

              <div class="modal-body">
                <h3 align="center">Registrar consultorio </h3>
                <br>
                  <form action="../Control/ControladorConsul.php" method="POST">
                    <div class="form-group">
                        <label>Numero consultorio</label>
                        <input type="number" class="form-control" name="txtnuconsul">
                    </div>

                    <div class="form-group">
                        <label>Nombre consultorio</label>
                        <input type="text" class="form-control" name="txtnomconsul">
                    </div>

                   <center><button  name="registroConsul" class="btn btn-danger" type="submit">Registrar</button></center> 
                 </form>
               </div>  
         </div>
      </div>
 </div>



<div class="content" style="text-align: center;">
  <div class="justify-content-center">
    <div class="col-auto mt-5">
        <table class="table table-dark table-hover">
          <tr>
            <th width="40%">Codigo del consultorio</th>
            <th width="40%">Nombre del consultorio</th>
            <th width="10%">Editar</th>
            <th width="10%">Eliminar</th>
          </tr>

          <?php
          require_once "../model/Consultorio.php";
          $obj1 = new Consultorio();
          $datos = $obj1->Listarconsultorios();

          foreach($datos as $key)
           {
           ?>
          <tr>
              <td><?php echo $key["NumeroC"]?></td>
              <td><?php echo $key["NombreC"]?></td>
              <td><a href="" class="btn btn-danger">Actualizar</a></td>
              <td><a href="" class="btn btn-danger">Eliminar</a></td>
          </tr>


            <?php}?>

         </table>
        </div>
      </div>
    </div>                   
  </body>
</html>