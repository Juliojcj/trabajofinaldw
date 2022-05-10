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
        
<form class="login-from" action="<?=base_url('aguardartipos')?>" method="get">
        <h1>Agregar Usuario</h1>
        <div class="input-group span-2">
        <label for="txtTipousuario_id">Tipo Usuario:</label>
                <input type="text" name="txtTipousuario_id" placeholder="Ingrese Tipousuario_id">
        </div>
        <div class="input-group span-2">
        <label for="txtNombre">Nombre:</label>
                <input type="text" name="txtNombre" placeholder="Ingrese Nombre">
        </div>
        <div class="input-group span-2">
        <input type="submit" name="btnEnviar" value="Guardar datos">
        </div>
    </form>

</body>
</html>