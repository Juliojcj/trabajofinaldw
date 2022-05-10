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
        <label for="txtDpi">DPI:</label>
                <input type="text" name="txtDpi" value="<?=$personas['dpi']?>" readonly>
        </div>
        <div class="input-group span-2">
        <label for="txtApellido">Apellido:</label>
                <input type="text" name="txtApellido" value="<?=$personas['apellido']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtNombre">Nombre:</label>
                <input type="text" name="txtNombre" value="<?=$personas['nombre']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtDireccion">Dirección:</label>
                <input type="text" name="txtDireccion" value="<?=$personas['direccion']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtTelcasa">Telefono Casa:</label>
                <input type="text" name="txtTelcasa" value="<?=$personas['tel_casa']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtTelmovil">Telefono movil:</label>
                <input type="text" name="txtTelmovil" value="<?=$personas['tel_movil']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtEmail">Email:</label>
                <input type="text" name="txtEmail" value="<?=$personas['email']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtFecha">Fecha Nacimiento:</label>
                <input type="text" name="txtFecha" value="<?=$personas['fechanac']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtCodnivel">Codigo Nivel:</label>
                <input type="text" name="txtCodnivel" value="<?=$personas['cod_nivel_acad']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtLugar">Lugar de nacimiento:</label>
                <input type="text" name="txtLugar" value="<?=$personas['lugar_nacimiento']?>">
        </div>
        <div class="input-group span-2">
        <input type="submit" name="btnEnviar" value="Guardar datos">
        </div>
    </form>
        </div>
       
</body>
</html>