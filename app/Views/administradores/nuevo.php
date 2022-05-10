<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?=base_url('css/estilos.css') ?>">

    <title>Agregar Usuario</title>
</head>
<body>
        

    <form class="login-from" action="<?=base_url('aguardarnuevo')?>" method="get">
        <h1>Agregar Usuario</h1>
        <div class="input-group span-2">
        <label for="txtDpi">DPI:</label>
                <input type="text" name="txtDpi" placeholder="Ingrese DPI">
        </div>
        <div class="input-group span-2">
        <label for="txtUsuario">Nombre:</label>
                <input type="text" name="txtUsuario" placeholder="Ingrese Usuario">
        </div>
        <div class="input-group span-2">
        <label for="txtContra">Contraseña:</label>
                <input type="text" name="txtContra" placeholder="Ingrese Contraseña">
        </div>
        <div class="input-group span-2">
        <label for="txtTipousuario_id">Telefono:</label>
                <input type="text" name="txtTipousuario_id" placeholder="Ingrese Tipousuario_id">
        </div>
       
        <div class="input-group span-2">
        <input type="submit" name="btnEnviar" value="Guardar datos">
        </div>
    </form>
</body>
</html>