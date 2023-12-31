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
<nav id="header" class="navbar navbar-expand-lg sticky-top" style="background: #FFA7A7 !important;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Grupo de Teatro de la Comunidad Pleasnatville</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn" style="background-color: #4D0007; color: white;" data-bs-toggle="" href="header.php"><strong>
                            Iniciar Sesión
                        </strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="display-6"> Registrar Usuario </h1>
    <div class="mb-3 row">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="nombre">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="contraseña" class="col-sm-2 col-form-label">Contraseña</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="contraseña">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>

    <footer class="text-center text-white fixed-bottom" style="background-color: #FFA7A7;">
        <div class="container p-4"></div>
      </footer>
</body>
</html>