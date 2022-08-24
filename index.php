<html>
    <head>
        <meta charset="UTF-8">
<title>Inicio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/estilo.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title></title>
    </head>
    <body style="background: #9dd8f5;">
    <div class="login-formulario" >
        <center><h2>Iniciar sesion</h2></center>
        <form method="POST" action="" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-6 tect-left">Email</label>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" name="txtemail" class="form-control" placeholder="Ingresar su usuario">
                        
                    </div>
                </div>
                
            </div>    
            <div class="form-group">
                <label class="col-sm-6 tect-left">Contraseña</label>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="password" name="txtcontrasena" class="form-control" placeholder="Ingresar su contraseña">
                    </div>
                </div>
                
            </div>
            
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="submit" name="btn_login" class="btn btn-danger d-block mx-auto" value="Iniciar sesion">
                </div>
            </div>
            <div class="form-group" >
                <div class="col-sm-12">
                    
                    ¿No tienes una cuenta?<a href="Fregistro.php"><p class="text-info">Registrar cuenta</p></a>
                </div>
            </div>
        </form>
    </div> 
        </body>
</html>