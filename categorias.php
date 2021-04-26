<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" type="image/png" href="public/img/appLogo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "dependencias.php"; ?>
    <title>Categorias</title>
</head>
<body>
    <div class="container">
        <?php require_once "menu.php"; ?>
        <div class="jumbotron">
            <strong><h1 align="center">Gestión Categorias</h1></strong><br>

            <hr class="my-2">
            
            <p align="right">
                <button type="button" class="btn btn-primary"><span class="fas fa-user-plus"></span> Agregar
                </button>
            </p>
            
            <div id="tablaCategorias"></div>

            <hr class="my-3">

            <p align="center">CRM - 2021®</p>
        </div>
    </div>

    <script src="public/js/categorias.js"></script>
</body>
</html>