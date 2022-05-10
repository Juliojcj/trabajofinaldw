<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Sesión</title>
</head>
<body>
    <div class="container-fluid>
        <div class="row">
            <div class="col-4 offset-4">
            <h1>Inicio de sesión</h1>

            <?php
            if(session('mensaje')){
                echo session('mensaje');
            }

            ?>
        
                <form action="<?= base_url('sesion') ?>" method="post">
                    <div class="mb-3">
                        <label for="txtUsuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Ingrese usuario">
                    </div>
                    <div class="mb-3">
                        <label for="txtContra" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="txtContra" name="txtContra" placeholder="Ingrese contraseña">
                    </div>
                    <div class="mb-3">
                        <a href="">
                            Cambiar Contraseña
                        </a>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-outline-primary" id="btnIniciar" name="btnIniciar" value="Iniciar sesión">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>