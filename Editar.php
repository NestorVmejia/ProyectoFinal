<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--scripts de font awesome-->
	<script src="https://kit.fontawesome.com/378d6c7b46.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!--scripts bootstrap-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<!--scripts css-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/maquinawrite.css">
	<link href="../css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
	<link rel="stylesheet" href="css/styleInicio.css">
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/all.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<link href="js/jquery-ui.css" type="text/css" rel="stylesheet" />
	<link rel="icon" href="src/icono.ico">
	<title>Gestor de datos | Agregar</title>

	<?php

	require('sets/VigenciaWS.php');
	if ($_POST['nss'] != "") {
		$vig = new VigenciaWS();
		$nss1 = $_POST['nss'];  //
		'5186660432';
		$respData = $vig->verificaVigencia($nss1);
		//$respData[0]['Nombre']
	}
	function lista($nombre, $respData)
	{
		$array = $respData;
		$asegN = "";
		for ($i = 0; $i < (sizeof($array) + 1); $i++) {
			if ($i == 0) {
				$asegN = "Seleccione un Agregado...";
				$txt .= "<option value='$i'>" . $asegN . '</option>';
			} else {
				$asegN = $array[$i - 1]['Nombre'] . " " . $array[$i - 1]['Paterno'] . " " . $array[$i - 1]['Materno'];
				$txt .= "<option value='$i'>" . $asegN . '</option>';
			}
		}
		$txt .= '</select>';
		return $txt;
	}
	?>
	<script>
		$(function() {
			$("#busca").on('click', function() {
				//        alert ("Que pinche vato se va abrir");
				document.forma1.submit()
			})
		});
	</script>
	<script>
		$(function() {
			$("#Asegurados").on('change', function() {
				//  alert ('no mames no entra');
				idr = document.forma2.Asegurados.selectedIndex;
				//alert (idr);
				switch (idr) {
					case 1:
						$("#nss1").val("<?php echo $respData[0]['Nss']; ?>");
						$("#agre").val("<?php echo $respData[0]['AgregadoMedico']; ?>");
						$("#nom").val("<?php echo $respData[0]['Nombre']; ?>");
						$("#ap").val("<?php echo $respData[0]['Paterno']; ?>");
						$("#am").val("<?php echo $respData[0]['Materno']; ?>");
						$("#curp").val("<?php echo $respData[0]['Curp']; ?>");
						$("#dhu").val("<?php echo $respData[0]['DhUMF']; ?>");
						$("#con").val("<?php echo $respData[0]['Consultorio']; ?>");
						$("#tur").val("<?php echo $respData[0]['Turno']; ?>");
						$("#dire").val("<?php echo $respData[0]['Direccion']; ?>");
						$("#col").val("<?php echo $respData[0]['Colonia']; ?>");
						$("#tel").val("<?php echo $respData[0]['Telefono']; ?>");
						$("#reg").val("<?php echo $respData[0]['RegistroPatronal']; ?>");
						$("#cond").val("<?php echo $respData[0]['ConDerechoSm']; ?>");
						//alert ('estoy en el 0');
						break;
					case 2:
						$("#nss1").val("<?php echo $respData[1]['Nss']; ?>");
						$("#agre").val("<?php echo $respData[1]['AgregadoMedico']; ?>");
						$("#nom").val("<?php echo $respData[1]['Nombre']; ?>");
						$("#ap").val("<?php echo $respData[1]['Paterno']; ?>");
						$("#am").val("<?php echo $respData[1]['Materno']; ?>");
						$("#curp").val("<?php echo $respData[1]['Curp']; ?>");
						$("#dhu").val("<?php echo $respData[1]['DhUMF']; ?>");
						$("#con").val("<?php echo $respData[1]['Consultorio']; ?>");
						$("#tur").val("<?php echo $respData[1]['Turno']; ?>");
						$("#dire").val("<?php echo $respData[1]['Direccion']; ?>");
						$("#col").val("<?php echo $respData[1]['Colonia']; ?>");
						$("#tel").val("<?php echo $respData[1]['Telefono']; ?>");
						$("#reg").val("<?php echo $respData[1]['RegistroPatronal']; ?>");
						$("#cond").val("<?php echo $respData[1]['ConDerechoSm']; ?>");
						//alert ('estoy en el 0');
						break;
					case 3:
						$("#nss1").val("<?php echo $respData[2]['Nss']; ?>");
						$("#agre").val("<?php echo $respData[2]['AgregadoMedico']; ?>");
						$("#nom").val("<?php echo $respData[2]['Nombre']; ?>");
						$("#ap").val("<?php echo $respData[2]['Paterno']; ?>");
						$("#am").val("<?php echo $respData[2]['Materno']; ?>");
						$("#curp").val("<?php echo $respData[2]['Curp']; ?>");
						$("#dhu").val("<?php echo $respData[2]['DhUMF']; ?>");
						$("#con").val("<?php echo $respData[2]['Consultorio']; ?>");
						$("#tur").val("<?php echo $respData[2]['Turno']; ?>");
						$("#dire").val("<?php echo $respData[2]['Direccion']; ?>");
						$("#col").val("<?php echo $respData[2]['Colonia']; ?>");
						$("#tel").val("<?php echo $respData[2]['Telefono']; ?>");
						$("#reg").val("<?php echo $respData[2]['RegistroPatronal']; ?>");
						$("#cond").val("<?php echo $respData[2]['ConDerechoSm']; ?>");
						//alert ('estoy en el 0');
						break;
					case 4:
						$("#nss1").val("<?php echo $respData[3]['Nss']; ?>");
						$("#agre").val("<?php echo $respData[3]['AgregadoMedico']; ?>");
						$("#nom").val("<?php echo $respData[3]['Nombre']; ?>");
						$("#ap").val("<?php echo $respData[3]['Paterno']; ?>");
						$("#am").val("<?php echo $respData[3]['Materno']; ?>");
						$("#curp").val("<?php echo $respData[3]['Curp']; ?>");
						$("#dhu").val("<?php echo $respData[3]['DhUMF']; ?>");
						$("#con").val("<?php echo $respData[3]['Consultorio']; ?>");
						$("#tur").val("<?php echo $respData[3]['Turno']; ?>");
						$("#dire").val("<?php echo $respData[3]['Direccion']; ?>");
						$("#col").val("<?php echo $respData[3]['Colonia']; ?>");
						$("#tel").val("<?php echo $respData[3]['Telefono']; ?>");
						$("#reg").val("<?php echo $respData[3]['RegistroPatronal']; ?>");
						$("#cond").val("<?php echo $respData[3]['ConDerechoSm']; ?>");
						//alert ('estoy en el 0');
						break;
					case 5:
						$("#nss1").val("<?php echo $respData[4]['Nss']; ?>");
						$("#agre").val("<?php echo $respData[4]['AgregadoMedico']; ?>");
						$("#nom").val("<?php echo $respData[4]['Nombre']; ?>");
						$("#ap").val("<?php echo $respData[4]['Paterno']; ?>");
						$("#am").val("<?php echo $respData[4]['Materno']; ?>");
						$("#curp").val("<?php echo $respData[4]['Curp']; ?>");
						$("#dhu").val("<?php echo $respData[4]['DhUMF']; ?>");
						$("#con").val("<?php echo $respData[4]['Consultorio']; ?>");
						$("#tur").val("<?php echo $respData[4]['Turno']; ?>");
						$("#dire").val("<?php echo $respData[4]['Direccion']; ?>");
						$("#col").val("<?php echo $respData[4]['Colonia']; ?>");
						$("#tel").val("<?php echo $respData[4]['Telefono']; ?>");
						$("#reg").val("<?php echo $respData[4]['RegistroPatronal']; ?>");
						$("#cond").val("<?php echo $respData[4]['ConDerechoSm']; ?>");
						//alert ('estoy en el 0');
						break;
					case 6:
						$("#nss1").val("<?php echo $respData[5]['Nss']; ?>");
						$("#agre").val("<?php echo $respData[5]['AgregadoMedico']; ?>");
						$("#nom").val("<?php echo $respData[5]['Nombre']; ?>");
						$("#ap").val("<?php echo $respData[5]['Paterno']; ?>");
						$("#am").val("<?php echo $respData[5]['Materno']; ?>");
						$("#curp").val("<?php echo $respData[5]['Curp']; ?>");
						$("#dhu").val("<?php echo $respData[5]['DhUMF']; ?>");
						$("#con").val("<?php echo $respData[5]['Consultorio']; ?>");
						$("#tur").val("<?php echo $respData[5]['Turno']; ?>");
						$("#dire").val("<?php echo $respData[5]['Direccion']; ?>");
						$("#col").val("<?php echo $respData[5]['Colonia']; ?>");
						$("#tel").val("<?php echo $respData[5]['Telefono']; ?>");
						$("#reg").val("<?php echo $respData[5]['RegistroPatronal']; ?>");
						$("#cond").val("<?php echo $respData[5]['ConDerechoSm']; ?>");
						//alert ('estoy en el 0');
						break;
					case 7:
						$("#nss1").val("<?php echo $respData[6]['Nss']; ?>");
						$("#agre").val("<?php echo $respData[6]['AgregadoMedico']; ?>");
						$("#nom").val("<?php echo $respData[6]['Nombre']; ?>");
						$("#ap").val("<?php echo $respData[6]['Paterno']; ?>");
						$("#am").val("<?php echo $respData[6]['Materno']; ?>");
						$("#curp").val("<?php echo $respData[6]['Curp']; ?>");
						$("#dhu").val("<?php echo $respData[6]['DhUMF']; ?>");
						$("#con").val("<?php echo $respData[6]['Consultorio']; ?>");
						$("#tur").val("<?php echo $respData[6]['Turno']; ?>");
						$("#dire").val("<?php echo $respData[6]['Direccion']; ?>");
						$("#col").val("<?php echo $respData[6]['Colonia']; ?>");
						$("#tel").val("<?php echo $respData[6]['Telefono']; ?>");
						$("#reg").val("<?php echo $respData[6]['RegistroPatronal']; ?>");
						$("#cond").val("<?php echo $respData[6]['ConDerechoSm']; ?>");
						//alert ('estoy en el 0');
						break;
					case 8:
						$("#nss1").val("<?php echo $respData[7]['Nss']; ?>");
						$("#agre").val("<?php echo $respData[7]['AgregadoMedico']; ?>");
						$("#nom").val("<?php echo $respData[7]['Nombre']; ?>");
						$("#ap").val("<?php echo $respData[7]['Paterno']; ?>");
						$("#am").val("<?php echo $respData[7]['Materno']; ?>");
						$("#curp").val("<?php echo $respData[7]['Curp']; ?>");
						$("#dhu").val("<?php echo $respData[7]['DhUMF']; ?>");
						$("#con").val("<?php echo $respData[7]['Consultorio']; ?>");
						$("#tur").val("<?php echo $respData[7]['Turno']; ?>");
						$("#dire").val("<?php echo $respData[7]['Direccion']; ?>");
						$("#col").val("<?php echo $respData[7]['Colonia']; ?>");
						$("#tel").val("<?php echo $respData[7]['Telefono']; ?>");
						$("#reg").val("<?php echo $respData[7]['RegistroPatronal']; ?>");
						$("#cond").val("<?php echo $respData[7]['ConDerechoSm']; ?>");
						//alert ('estoy en el 0');
						break;
					case 9:
						$("#nss1").val("<?php echo $respData[8]['Nss']; ?>");
						$("#agre").val("<?php echo $respData[8]['AgregadoMedico']; ?>");
						$("#nom").val("<?php echo $respData[8]['Nombre']; ?>");
						$("#ap").val("<?php echo $respData[8]['Paterno']; ?>");
						$("#am").val("<?php echo $respData[8]['Materno']; ?>");
						$("#curp").val("<?php echo $respData[8]['Curp']; ?>");
						$("#dhu").val("<?php echo $respData[8]['DhUMF']; ?>");
						$("#con").val("<?php echo $respData[8]['Consultorio']; ?>");
						$("#tur").val("<?php echo $respData[8]['Turno']; ?>");
						$("#dire").val("<?php echo $respData[8]['Direccion']; ?>");
						$("#col").val("<?php echo $respData[8]['Colonia']; ?>");
						$("#tel").val("<?php echo $respData[8]['Telefono']; ?>");
						$("#reg").val("<?php echo $respData[8]['RegistroPatronal']; ?>");
						$("#cond").val("<?php echo $respData[8]['ConDerechoSm']; ?>");
						//alert ('estoy en el 0');
						break;
					default:
						alert('Seleccione un Derecho habiente...');
				}
				//alert ("ya fui y vine");				
			})
		});
	</script>
</head>

<body>
	<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="js/bootstrap-3.3.4.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<?php session_start();
	include 'sets/config.php';
	?>
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
			</div>
		</div>
		<!--Perfil-->
		<div id="perfil">
			<a href="Perfil.php">
				<div id="foto"> <img src="src/user.png" alt="Foto User"></div>
				<div id="name">
					<span>Matricula: <?php echo $_SESSION['usuario'] . ' ' ?> </span>
					<br>
					<span>Administrador </span>
				</div>
			</a>
		</div>
		<!--Items Bar-->
		<div>
			<div id="menu-items">
				<div class="item">
					<a href="Inicio.php">
						<div class="icon"> <img src="src/tablas.png" alt=""></div>
						<div class="title"> Tablas Pacientes</div>
					</a>
				</div>
				<div class="item">
					<a href="Editar.php">
						<div class="icon"> <img src="src/editar.png" alt=""></div>
						<div class="title"> Ingresar datos</div>
					</a>
					<div class="separator"></div>
				</div>
				<div class="item-Log">
					<div class="separator"></div>
					<a href="sets/LogOut.php">
						<div class="icon"> <img src="src/CerrarSesion.png" alt=""></div>
						<div class="title"> Cerrar sesión</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<header>

		<nav class="navbar navbar-expand-lg navbar-light navbar-dark " style="background-color:rgb(52,52,52);">
			<ul class="navbar-nav mr-auto collapse navbar-collapse">
				<li class="nav-item active">
					<a href="Inicio.php">
						<img src="src/logo.png" alt="IMSS" width="60">
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
					<h4>Agregar paciente</h4>
				</div>
				<div class=" container col-sm-2 py-4">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><i class="bi bi-house-door-fill"></i> Inicio</li>
						<li class="breadcrumb-item"> Agregar</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!--Container Main start-->
	<div class="height-100" style=" position:sticky">
		<br>

		<?php
		if ($_POST['nss'] == "") { ?>
			<form name="forma1" id="forma1" class="form-horizontal" role="form" method="post" action="Editar.php">
				<div class="panel-body">
					<div class="form-group">
						<br>
						<br>
						<br>
						<center>
							<h4> Ingrese el número de seguro social a 10 digitos que quiere buscar</h4>
						</center>
						<div class="input-group mx-auto w-75 p-3">
							<input type="text" class="form-control" id="nss" name="nss" placeholder="¡Teclea el Numero de Seguridad Social a 10 digitos!">
						</div>
						<center>
							<div class="d-grid gap-6 col-6 mx-auto"><button class="btn btn-dark " name="busca" id="busca"> Buscar datos <i class="bi bi-search"></i></button></div>
						</center>
						<p>&nbsp;</p>

					</div>
				</div>
	</div>
	</div>
	</form>
<?php } else {

?>
	<!-- *************************************** -->
	<div class="height-100">
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-5">
					<div class="card border">
						<div class="card-header bg-success text-white text-center">
							<h4 class="card-title text-uppercase">Datos del derechohabiente</h4>
						</div>
						<br>
						<center>
							<form name="forma2" id="forma2" class="form-horizontal" role="form" method="post" action="sets/registroAd.php">
								<?php
								if ($respData['codigoError'] > 0) {
									echo '<script type="text/javascript">
                alert("Ocurrio un error intente de nuevo");
                window.location.href="Editar.php";
                </script>';
								} else {
									echo "<select name='Asegurados' id='Asegurados' >";
									$nombre = 'Asegurados';
									$resultado = lista($nombre, $respData);
									echo $resultado;
								}
								echo '</form>';
								?>
						</center>
						<div class="card-body">
							<form name="forma3" id="forma3" class="form-horizontal" role="form" method="POST" action="sets/registroAd.php">

								<div class="row">
									<div class="col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<div class="input-group mb-2">
												<span class="input-group-text" id="basic-addon3">NSS:</span>
												<input type="text" class="form-control" id="nss1" name="nss1" aria-describedby="basic-addon3" readonly required>

											</div>
										</div>
									</div>
									<div class="col-sm-4 col-md-6 col-xs-12">
										<div class="form-group">
											<div class="input-group mb-2">
												<span class="input-group-text" id="basic-addon3">Agregado:</span>
												<input type="text" class="form-control" id="agre" name="agre" aria-describedby="basic-addon3" readonly required>

											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-12 col-xs-12">
										<div class="form-group mb-2">
											<div class="input-group">
												<span class="input-group-text">Nombre (s):</span>
												<input type="text" aria-label="NSS" id="nom" name="nom" class="form-control" readonly required>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<div class="input-group mb-2">
												<span class="input-group-text" id="basic-addon3">A Paterno:</span>
												<input type="text" class="form-control" id="ap" name="ap" aria-describedby="basic-addon3" readonly required>
											</div>
										</div>
									</div>
									<div class="col-sm-4 col-md-6 col-xs-12">
										<div class="form-group">
											<div class="input-group mb-2">
												<span class="input-group-text" id="basic-addon3">A Materno:</span>
												<input type="text" class="form-control" id="am" name="am" aria-describedby="basic-addon3" readonly required>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<div class="input-group mb-2">
												<span class="input-group-text" id="basic-addon3">Vigente:</span>
												<input type="text" class="form-control" id="cond" name="cond" aria-describedby="basic-addon3" readonly required>
											</div>
										</div>
									</div>
									<div class="col-sm-4 col-md-6 col-xs-12">
										<div class="form-group">
											<div class="input-group mb-2">
												<span class="input-group-text" id="basic-addon3">Registro P:</span>
												<input type="text" class="form-control" id="reg" name="reg" aria-describedby="basic-addon3" readonly required>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-12 col-xs-12">
										<div class="form-group mb-2">
											<div class="input-group">
												<span class="input-group-text">Dirección:</span>
												<input type="text" aria-label="NSS" id="dire" name="dire" class="form-control" required>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<div class="input-group mb-2">
												<span class="input-group-text" id="basic-addon3">Tel:</span>
												<input type="text" class="form-control" id="tel" name="tel" aria-describedby="basic-addon3" required>
											</div>
										</div>
									</div>
									<div class="col-sm-4 col-md-6 col-xs-12">
										<div class="form-group">
											<div class="input-group mb-2">
												<span class="input-group-text" id="basic-addon3">Turno:</span>
												<input type="text" class="form-control" id="tur" name="tur" aria-describedby="basic-addon3" readonly required>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<div class="input-group mb-2">
												<span class="input-group-text" id="basic-addon3">Consultorio:</span>
												<input type="text" class="form-control" id="con" name="con" aria-describedby="basic-addon3" readonly required>
											</div>
										</div>
									</div>
									<div class="col-sm-4 col-md-6 col-xs-12">
										<div class="form-group">
											<div class="input-group mb-2">
												<span class="input-group-text" id="basic-addon3">DhUMF:</span>
												<input type="text" class="form-control" id="dhu" name="dhu" aria-describedby="basic-addon3" readonly required>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-12 col-xs-12">
										<div class="form-group mb-2">
											<div class="input-group">
												<label class="input-group-text" for="inputGroupSelect01">Enfermedad:</label>
												<select class="form-select" id="Enfermedad" name="Enfermedad" required>
													<option selected disabled value="">seleccionar</option>
													<option value="Diabetes">Diabetes</option>
													<option value="Embarazo">Embarazo</option>
													<option value="NUTRIMSS">NUTRIMSS</option>
													<option value="Salud Mental">Salud Mental</option>
												</select>
												<div class="invalid-feedback">
													Ingresar NSS.
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-12 col-xs-12">
										<div class="form-group mb-2">
											<div class="input-group">
												<label class="input-group-text" for="inputGroupSelect01">Riesgo:</label>
												<select class="form-select" id="Riesgo" name="Riesgo" required>
													<option selected disabled value="">seleccionar</option>
													<option value="Alto">Alto</option>
													<option value="Medio">Medio</option>
													<option value="Bajo">Bajo</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<hr>
								<div class="row mb-3">
									<div class="col-sm-12 col-md-12 col-xs-12">

										<div class="row mb-2">
											<div class="col-sm-12 col-md-12 col-xs-12">
												<div class="form-group">
													<label>Asigne la fecha:</label>
													<input class="controls col-sm-12 col-md-12 col-xs-12" type="datetime-local" name="fecha" id="fecha" required>
													<div class="invalid-feedback">Agregue la fecha de la cita</div>
												</div>
											</div>
										</div>

										<hr>
										<div class="row">
											<div class="col-sm-12 col-md-12 col-xs-12 text-center">
												<div class="float-right">
													<input type="button" value="Regresar" onClick="history.go(-1);" class="btn btn-warning">
													<input type="submit" name="Insertar" id="Insertar" value=" Insertar" class="btn btn-success">
												</div>
											</div>
										</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
			echo $$respData;
		}
?>
</div>
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
<!--Container Main end-->
<script src="scripts.js"></script>
<script src="scriptInput.js"></script>
</body>

</html>