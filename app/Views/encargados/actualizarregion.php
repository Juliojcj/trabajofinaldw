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
        
        <form class="login-from" action="<?=base_url('aguardar_region')?>" method="get">
        <h1>Actualizar Ciudadanos</h1>
        <div class="input-group span-2">
        <label for="txtCod">Código Region:</label>
                <input type="text" name="txtCod" value="<?=$regiones['cod_region']?>" readonly>
        </div>
        <div class="input-group span-2">
        <label for="txtNombre">Nombre:</label>
                <input type="text" name="txtNombre" value="<?=$regiones['nombre']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtDes">Descripcion:</label>
                <input type="text" name="txtDes" value="<?=$regiones['descripcion']?>">
        </div>
       
        <div class="input-group span-2">
        <input type="submit" name="btnEnviar" value="Guardar datos">
        </div>
    </form>
        
       
</body>
</html>