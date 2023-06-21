
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$fecha      = $_REQUEST['fecha'];
$enfermedad 	 = $_REQUEST['Enfermedad'];
$celular 	 = $_REQUEST['tel'];

$update = ("UPDATE Pacientes 
	SET 
	fecha  ='" .$fecha. "',
	Enfermedad  ='" .$enfermedad. "',
	telefono ='" .$celular. "'

WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='../InicioAsist.php';
    </script>";

?>