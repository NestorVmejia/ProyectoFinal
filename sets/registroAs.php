<?php
    session_start();
    include('config.php');
    date_default_timezone_set("America/Mazatlan");

    if (isset($_POST['Insertar'])) {
        $id = [Null];
        $registro =date('Y-m-d H:i:s');
        $estatus=[Null];
        $nss = $_POST["nss1"];
        $Agregado = $_POST["agre"];
        $Vigente =  $_POST["cond"];

        $nombre_paciente =  $_POST["nom"];
        $Apellido_Paterno = $_POST["ap"];
        $Apellido_Materno = $_POST ["am"];

        $UMF = $_POST["dhu"];
        $consultorio = $_POST["con"];
        $turno = $_POST ["tur"];

        $telefono = $_POST ["tel"];
        $RegistroPatronal = $_POST ["reg"];
        $direccion = $_POST ["dire"];

        $enfermedad = $_POST ["Enfermedad"];
        $riesgo = $_POST ["Riesgo"];
        $fecha = $_POST ["fecha"];

        $sql_insertDatos = "INSERT  INTO Pacientes 
                            Values ('$id','$estatus','$nss','$Agregado','$Vigente','$nombre_paciente','$Apellido_Paterno','$Apellido_Materno','$UMF','$consultorio','$turno','$telefono','$RegistroPatronal','$direccion','$enfermedad','$riesgo','$fecha','$registro')";
        $ejecucion_Insertar = mysqli_query($con,$sql_insertDatos);

        if (!$ejecucion_Insertar) {
            echo '<script type="text/javascript">
            alert("Ocurrio un error en la conexion, intente de nuevo");
            window.location.href="../EditarAsist.php";
            </script>';
        }
        else {

            echo '<script type="text/javascript">
            alert("Se registro correctamente el usuario en la tabla ");
            window.location.href="../InicioAsist.php";
            </script>';
        }

        

    }
