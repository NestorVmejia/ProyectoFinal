<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--scripts de font awesome-->
    <script src="https://kit.fontawesome.com/378d6c7b46.js" crossorigin="anonymous"></script>
    <!--scripts bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--scripts css-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/maquinawrite.css">
    <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/datatables-1.10.25.min.css" />
    <link rel="stylesheet" href="../css/styleInicio.css">
    <!--Scripts datatables-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link type="text/css" rel="shortcut icon" href="../src/logo.png" />
    <title>Gestor de datos | Tabla</title>
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
                    <a href="" data-toggle="modal" data-target="#exampleModal">
                        <div class="icon"> <img src="../src/editar.png" alt=""></div>
                        <div class="title"> Ingresar datos</div>

                    </a>
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
                    <h4>Información de todos los derechohabientes</h4>
                </div>
                <div class=" container col-sm-2 py-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="bi bi-house-door-fill"></i> Inicio</li>
                        <li class="breadcrumb-item"> Tabla</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('../sets/config.php');
    $sql   = ("SELECT * FROM Pacientes ORDER BY id DESC ");
    $query = mysqli_query($con, $sql);
    $cantidad     = mysqli_num_rows($query);
    ?>
    <!--Datatable para mostrar los datos-->
    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="row text-center" style="background-color: #cecece">
                <div class="col-md-6">
                    <strong>Registro de Pacientes</strong>
                </div>
                <div class="col-md-6">
                    <strong>Lista de Pacientes <span style="color: crimson"> ( <?php echo $cantidad; ?> )</span> </strong>
                </div>
            </div>
            <br>
            <table id="myTable" class=" table-responsive table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Estatus</th>
                        <th class="col-sm">fecha de cita </th>
                        <th>NSS y Agregado</th>
                        <th class="col-sm">Vigente</th>
                        <th>Nombre Completo</th>
                        <th class="col-sm">DHU</th>
                        <th class="col-sm">consultorio</th>
                        <th class="col-sm">turno</th>
                        <th>Enfermedad</th>
                        <th>Riesgo</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td>
                                <?php
                                if ($data['estatus'] == 1) {
                                    echo '<p style= "color:green;"><i class="fa-solid fa-circle fa-xs"></i> Si, Asistió</p>';
                                } elseif ($data['estatus'] == 2) {
                                    echo '<p style= "color:red;"><i class="fa-solid fa-circle fa-xs"></i> No, Asistió</p>';
                                } else {
                                    echo '<p style= "color:grey;"><i class="fa-solid fa-circle fa-xs"></i> Pendiente</p>';
                                }
                                ?>
                            </td>
                            <td>
                                <?php echo $data['fecha']; ?>
                            </td>
                            <td><?php echo $data['nss'] . ' / ' . $data['Agregado']; ?></td>
                            <td><?php echo $data['Vigencia']; ?></td>
                            <td><?php echo $data['nombre'] . ' ' . $data['Apaterno'] . ' ' . $data['Amaterno']; ?></td>
                            <td><?php echo $data['dhu']; ?></td>
                            <td><?php echo $data['consultorio']; ?></td>
                            <td><?php echo $data['turno']; ?></td>
                            <td><?php echo $data['Enfermedad']; ?></td>
                            <td>
                                <?php
                                if ($data['Riesgo'] == 'Alto') {
                                    echo '<p  class="text-white text-center" style= "background-color:red;"> Alto </p>';
                                } elseif ($data['Riesgo'] == 'Medio') {
                                    echo '<p  class=" text-center" style= "background-color:yellow;"> Medio </p>';
                                } elseif ($data['Riesgo'] == 'Bajo') {
                                    echo '<p  class="text-white text-center" style= "background-color:green;"> Bajo</p>';
                                }
                                ?>
                            </td>
                            <td><?php echo $data['telefono']; ?></td>
                            <td><?php echo $data['Direccion']; ?></td>

                        </tr>
                    <?php } ?>
            </table>
        </div>
    </div> 

    <!--Ventana Modal para Actualizar--->
    <?php include('ModalEditarTS.php'); ?>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.btnBorra').click(function(e) {
            e.preventDefault();
            var id = $(this).attr("id");
            var dataString = 'id=' + id;
            url = "sets/recib_Delete.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data) {
                    window.location.href = "Inicio.php";
                    $('#respuesta').html(data);
                }
            });
            return false;
        });
    </script>
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

    <!--Scripts datatables-->
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> <!-- Scripts Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Script para el formato de datatable-->
    <script>
        $(document).ready(function() {
            $.noConflict();
            $('#myTable').DataTable({
                "language": {
                    "processing": "Procesando...",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados",
                    "emptyTable": "Ningún dato disponible en esta tabla",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "search": "Buscar:",
                    "infoThousands": ",",
                    "loadingRecords": "Cargando...",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "aria": {
                        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad",
                        "collection": "Colección",
                        "colvisRestore": "Restaurar visibilidad",
                        "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                        "copySuccess": {
                            "1": "Copiada 1 fila al portapapeles",
                            "_": "Copiadas %d fila al portapapeles"
                        },
                        "copyTitle": "Copiar al portapapeles",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Mostrar todas las filas",
                            "1": "Mostrar 1 fila",
                            "_": "Mostrar %d filas"
                        },
                        "pdf": "PDF",
                        "print": "Imprimir"
                    },
                    "autoFill": {
                        "cancel": "Cancelar",
                        "fill": "Rellene todas las celdas con <i>%d<\/i>",
                        "fillHorizontal": "Rellenar celdas horizontalmente",
                        "fillVertical": "Rellenar celdas verticalmentemente"
                    },
                    "decimal": ",",
                    "searchBuilder": {
                        "add": "Añadir condición",
                        "button": {
                            "0": "Constructor de búsqueda",
                            "_": "Constructor de búsqueda (%d)"
                        },
                        "clearAll": "Borrar todo",
                        "condition": "Condición",
                        "conditions": {
                            "date": {
                                "after": "Despues",
                                "before": "Antes",
                                "between": "Entre",
                                "empty": "Vacío",
                                "equals": "Igual a",
                                "notBetween": "No entre",
                                "notEmpty": "No Vacio",
                                "not": "Diferente de"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vacio",
                                "equals": "Igual a",
                                "gt": "Mayor a",
                                "gte": "Mayor o igual a",
                                "lt": "Menor que",
                                "lte": "Menor o igual que",
                                "notBetween": "No entre",
                                "notEmpty": "No vacío",
                                "not": "Diferente de"
                            },
                            "string": {
                                "contains": "Contiene",
                                "empty": "Vacío",
                                "endsWith": "Termina en",
                                "equals": "Igual a",
                                "notEmpty": "No Vacio",
                                "startsWith": "Empieza con",
                                "not": "Diferente de"
                            },
                            "array": {
                                "not": "Diferente de",
                                "equals": "Igual",
                                "empty": "Vacío",
                                "contains": "Contiene",
                                "notEmpty": "No Vacío",
                                "without": "Sin"
                            }
                        },
                        "data": "Data",
                        "deleteTitle": "Eliminar regla de filtrado",
                        "leftTitle": "Criterios anulados",
                        "logicAnd": "Y",
                        "logicOr": "O",
                        "rightTitle": "Criterios de sangría",
                        "title": {
                            "0": "Constructor de búsqueda",
                            "_": "Constructor de búsqueda (%d)"
                        },
                        "value": "Valor"
                    },
                    "searchPanes": {
                        "clearMessage": "Borrar todo",
                        "collapse": {
                            "0": "Paneles de búsqueda",
                            "_": "Paneles de búsqueda (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Sin paneles de búsqueda",
                        "loadMessage": "Cargando paneles de búsqueda",
                        "title": "Filtros Activos - %d"
                    },
                    "select": {
                        "1": "%d fila seleccionada",
                        "_": "%d filas seleccionadas",
                        "cells": {
                            "1": "1 celda seleccionada",
                            "_": "$d celdas seleccionadas"
                        },
                        "columns": {
                            "1": "1 columna seleccionada",
                            "_": "%d columnas seleccionadas"
                        }
                    },
                    "thousands": ".",
                    "datetime": {
                        "previous": "Anterior",
                        "next": "Proximo",
                        "hours": "Horas",
                        "minutes": "Minutos",
                        "seconds": "Segundos",
                        "unknown": "-",
                        "amPm": [
                            "am",
                            "pm"
                        ]
                    },
                    "editor": {
                        "close": "Cerrar",
                        "create": {
                            "button": "Nuevo",
                            "title": "Crear Nuevo Registro",
                            "submit": "Crear"
                        },
                        "edit": {
                            "button": "Editar",
                            "title": "Editar Registro",
                            "submit": "Actualizar"
                        },
                        "remove": {
                            "button": "Eliminar",
                            "title": "Eliminar Registro",
                            "submit": "Eliminar",
                            "confirm": {
                                "_": "¿Está seguro que desea eliminar %d filas?",
                                "1": "¿Está seguro que desea eliminar 1 fila?"
                            }
                        },
                        "error": {
                            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                        },
                        "multi": {
                            "title": "Múltiples Valores",
                            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                            "restore": "Deshacer Cambios",
                            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                        }
                    },
                    "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
                }
            });

        });
    </script>
</body>

</html>