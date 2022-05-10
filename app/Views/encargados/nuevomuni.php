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
        

<form class="login-from" action="<?=base_url('guardarmuni')?>" method="get">
        <h1>Agregar Region</h1>
        <div class="input-group span-2">
        <label for="txtCod">Código Region:</label>
                <input type="text" name="txtCod" placeholder="Ingrese Código region">
        </div>
        <div class="input-group span-2">
        <label for="txtNombre">Nombre:</label>
                <input type="text" name="txtNombre" placeholder="Ingrese Nombre">
        </div>
        <div class="input-group span-2">
        <label for="txtDes">Descripcion:</label>
                <input type="text" name="txtDes" placeholder="Ingrese Descripcion">
        </div>
       
        <div class="input-group span-2">
        <input type="submit" name="btnEnviar" value="Guardar datos">
        </div>
    </form>
</body>
</html>