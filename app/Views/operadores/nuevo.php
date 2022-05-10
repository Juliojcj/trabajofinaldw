<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?=base_url('css/estilos.css') ?>">

    <title>Agregar Ciudadano</title>
</head>
<body>
        

    <form class="login-from" action="<?=base_url('aguargarciudadano')?>" method="get">
        <h1>Agregar Ciudadanos</h1>
        <div class="input-group span-2">
        <label for="txtDpi">DPI:</label>
                <input type="text" name="txtDpi" placeholder="Ingrese DPI">
        </div>
        <div class="input-group span-2">
        <label for="txtApellido">Apellido:</label>
                <input type="text" name="txtApellido" placeholder="Ingrese Apellido">
        </div>
        <div class="input-group span-2">
        <label for="txtNombre">Nombre:</label>
                <input type="text" name="txtNombre" placeholder="Ingrese Nombre">
        </div>
        <div class="input-group span-2">
        <label for="txtDireccion">Dirección:</label>
                <input type="text" name="txtDireccion" placeholder="Ingrese Tipousuario_id">
        </div>
        <div class="input-group span-2">
        <label for="txtTelcasa">Telefono Casa:</label>
                <input type="text" name="txtTelcasa" placeholder="Ingrese Telefono Casa">
        </div>
        <div class="input-group span-2">
        <label for="txtTelmovil">Telefono movil:</label>
                <input type="text" name="txtTelmovil" placeholder="Ingrese Telefono movil">
        </div>
        <div class="input-group span-2">
        <label for="txtEmail">Email:</label>
                <input type="text" name="txtEmail" placeholder="Ingrese Email">
        </div>
        <div class="input-group span-2">
        <label for="txtFecha">Fecha Nacimiento:</label>
                <input type="text" name="txtFecha" placeholder="Ingrese Fecha nacimiento">
        </div>
        <div class="input-group span-2">
        <label for="txtCodnivel">Codigo Nivel:</label>
                <input type="text" name="txtCodnivel" placeholder="Ingrese Código nivel">
        </div>
        <div class="input-group span-2">
        <label for="txtLugar">Lugar de nacimiento:</label>
                <input type="text" name="txtLugar" placeholder="Ingrese Lugar de nacimiento">
        </div>
        <div class="input-group span-2">
        <input type="submit" name="btnEnviar" value="Guardar datos">
        </div>
    </form>
</body>
</html>