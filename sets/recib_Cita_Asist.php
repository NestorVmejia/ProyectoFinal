
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$estatus 	 = $_REQUEST['Estatus'];

$update = ("UPDATE Pacientes 
	SET 
	estatus  ='" .$estatus. "'

WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='../InicioAsist.php';
    </script>";

?>