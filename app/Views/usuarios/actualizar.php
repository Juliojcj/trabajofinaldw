<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
   <link rel="stylesheet" href="<?=base_url('css/estilos.css')?>">
    <title>Actualizar</title>
</head>
<body>
        <div class="container">
        <form class="login-from" action="<?=base_url('aguardarciudadano')?>" method="get">
        <h1>Actualizar Ciudadanos</h1>
        <div class="input-group span-2">
        <div class="input-group span-2">
        <label for="txtContraseña">Contraseña:</label>
                <input type="text" name="txtContraseña" value="<?=$personas['contra']?>">
        </div>
        <div class="input-group span-2">
        <input type="submit" name="btnEnviar" value="Guardar datos">
        </div>
    </form>
        </div>
       
</body>
</html>