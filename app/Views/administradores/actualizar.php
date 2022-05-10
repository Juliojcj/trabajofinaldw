<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?=base_url('css/estilos.css') ?>">

    <title>Actualizar</title>
</head>
<body>
<form class="login-from" action="<?=base_url('aguardaractualizado')?>" method="get">
        <h1>Actualizar datos</h1>
        <div class="input-group span-2">
        <label for="txtDpi">DPI:</label>
                <input type="text" name="txtDpi"  value="<?=$usuario['dpi']?>"readonly>
        </div>
        <div class="input-group span-2">
        <label for="txtUsuario">Nombre:</label>
                <input type="text" name="txtUsuario" value="<?=$usuario['usuario']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtContra">Contraseña:</label>
                <input type="text" name="txtContra" value="<?=$usuario['contra']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtTipousuario_id">Telefono:</label>
                <input type="text" name="txtTipousuario_id" value="<?=$usuario['tipousuario_id']?>">
        </div>
       
        <div class="input-group span-2">
        <input type="submit" name="btnEnviar" value="Guardar datos">
        </div>
    </form>


</body>
</html>