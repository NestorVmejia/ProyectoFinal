<?php
include('config.php');
$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM Pacientes WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);
?>