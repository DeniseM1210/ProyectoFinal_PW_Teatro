<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/dae357c832.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
        require_once('header.php')
    ?>
    <h1 class="display-6"> Miembros </h1>
    <br>
    <div class="mb-3 row">
        <label for="id_miembro" class="col-sm-2 col-form-label">Id Miembro</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="id_miembro">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="nombre">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="apeMat" class="col-sm-2 col-form-label">Apellido Materno</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="apeMat">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="apePat" class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="apePat">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="correoEle" class="col-sm-2 col-form-label">Correo Electrónico</label>
        <div class="col-sm-5">
            <input type="email" class="form-control" id="correoEle">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="numTel" class="col-sm-2 col-form-label">Num. Telefónico</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="numTel">
        </div>
    </div>
</body>
</html>