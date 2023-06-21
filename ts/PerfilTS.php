<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--scripts bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--scripts css-->
    <link rel="stylesheet" type="text/css" href="../css/maquinawrite.css">
    <link href="../css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/datatables-1.10.25.min.css" />
    <link rel="stylesheet" href="../css/styleInicio.css">
    <!--Scripts datatables-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!--Jquery CDN-->

    <title>Gestor de datos| Perfil</title>
</head>

<body>
    <!--side bar-->
    <div id="sidemenu" class="menu-collapsed">
        <!--header-->
        <div id="header">
            <div id="title">
                <span>Analisis de datos</span>
            </div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <br>
            </div>
        </div>
        <!--Perfil-->
        <div id="perfil">
            <a href="PerfilTS.php">
                <div id="foto"> <img src="../src/user.png" alt="Foto User"></div>
                <div id="name">
                    <span>Matricula: <?php echo $_SESSION['usuario'] . ' ' ?> </span>
                    <br>
                    <span>Trabjador Social </span>
                </div>
            </a>
        </div>
        <!--Items Bar-->
        <div>
            <div id="menu-items">
                <div class="item">
                    <a href="InicioTS.php">
                        <div class="icon"> <img src="../src/tablas.png" alt=""></div>
                        <div class="title"> Tablas Pacientes</div>
                    </a>
                </div>
                <div class="item">
                    <div class="separator"></div>
                </div>
                <div class="item-Log">
                    <div class="separator"></div>
                    <a href="../sets/LogOut.php">
                        <div class="icon"> <img src="../src/CerrarSesion.png" alt=""></div>
                        <div class="title"> Cerrar sesión</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light navbar-dark " style="background-color: rgb(52,52,52);">
            <ul class="navbar-nav mr-auto collapse navbar-collapse">
                <li class="nav-item active">
                    <a href="InicioTS.php">
                        <img src="../src/logo.png" alt="IMSS" width="60">
                    </a>
                </li>
            </ul>
            <div class="my-2 my-lg-0" id="maquinaescribir">
                <h5 class="navbar-brand">Instituto Mexicano del Seguro Social <span>&#160;</span></h5>
            </div>
        </nav>

    </header>

    <!--Cabecera de titulo y breadcrumb-->
    <div class="Cabecera">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-9 py-4">
                    <h4>Perfil del usuario</h4>
                </div>
                <div class=" container col-sm-2 py-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="bi bi-house-door-fill"></i> Inicio</li>
                        <li class="breadcrumb-item"> Perfil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!--Container Main start-->
    <div class="height-100">
        <section class="vh-100">
            <div class="container py-5 h-250">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;  background: linear-gradient(to right, #11998e, #38ef7d);">
                                    <img src="../src/user.png" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                    <h5>Nombre: <?php echo $_SESSION['Nombre'] ?></h5>
                                    <br>
                                    <p>Rol: <?php echo $_SESSION['rol'] ?></p>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h6>Datos del perfil</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-15 mb-4">
                                                <h6>Correo</h6>
                                                <p class="text-muted"><?php echo $_SESSION['correo'] ?></p>
                                            </div>
                                            <div class="col-8 mb-4">
                                                <h6>Matricula</h6>
                                                <p class="text-muted"><?php echo $_SESSION['usuario'] ?></p>
                                            </div>
                                        </div>
                                        <h6>Datos extras</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Turno</h6>
                                                <p class="text-muted"><?php echo $_SESSION['Turno'] ?></p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>DhUMF</h6>
                                                <p class="text-muted"><?php echo $_SESSION['UMF'] ?></p>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-warning w-100 p-3" type="button" data-bs-toggle="modal" data-bs-target="#CambiarContraseña">Cambiar Contraseña</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <?php
    include 'ModalChPass.php';
    ?>
    <!--Container Main end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!--Script del movimiento de el side Bar-->
    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');

        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            document.querySelector('body').classList.toggle('body-expanded');
        });
    </script>
    <!--Script BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!--Scripts Js-->
    <script src="../js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/dt-1.10.25datatables.min.js"></script>
</body>

</html>