<!DOCTYPE html>
<html lang="en">

<head>
	<title>

	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet">
	<style>
		/* Estilos para la barra de navegación */
		nav {
			background-color: #333;
			height: 50px;
		}
		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
			position: relative;
		}
		nav ul li {
			display: inline-block;
			background-color: #333;
			position: relative;
			z-index: 1;
		}
		nav a {
			display: block;
			padding: 0 10px;
			color: #fff;
			font-size: 16px;
			line-height: 50px;
			text-decoration: none;
			font-weight: bold;
		}
		nav ul ul {
			display: none;
			position: absolute;
			top: 50px;
			z-index: 2;
		}
		nav ul li:hover > ul {
			display:inherit;
		}
		nav ul ul li {
			width: 200px;
			float: none;
			display: list-item;
			position: relative;
		}
		nav ul ul ul li {
			position: relative;
			top:-60px;
			left:200px;
		}
		/* Estilos para el menú desplegable */
		.menu {
			position: relative;
			display: inline-block;
		}
		.menu ul {
			margin: 0;
			padding: 0;
			list-style: none;
			position: absolute;
			top: 100%;
			left: 0;
			background-color: #fff;
			border: 1px solid #ccc;
			box-shadow: 0 1px 2px rgba(0,0,0,.1);
			display: none;
		}
		.menu ul li {
			display: block;
			padding: 10px;
			text-align: left;
		}
		.menu ul li:hover {
			background-color: #f6f6f6;
		}
		.menu:hover ul {
			display: block;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
<div class="contenedor">
		<!-- Barra de navegación y menú desplegable -->
        <nav>
		<ul>
			<li><a href="<?php echo site_url('agregar');?>">Agendar cita medica</a></li>
			<li>
				<a href="<?php echo site_url('welcome_message');?>">Consultar citas medicas</a></li>
	</nav>
	<div class="container"><br> <br>
		<div class="container-fluid">
			<div>
				<a href="<?php echo base_url('agregar'); ?>"> <button type="button" class="btn btn-primary">agregar</button></a>


			</div><br>
			<table class="table table-success table-striped">
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">nombre</th>
						<th scope="col">apellido</th>
						<th scope="col">documento</th>
						<th scope="col">tipoDocumento</th>
						<th scope="col">Usuario</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($usuario as $per) :
						# code...
					?>
						<tr>
							<th scope="row"> <?= $per['id'] ?></th>
							<td><?= $per['Nombre'] ?></td>
							<td><?= $per['Apellido'] ?></td>
							<td><?= $per['Documento'] ?></td>
							<td><?= $per['TipoDocumento'] ?></td>
							<td><?= $per['Usuario'] ?></td>
							<td><?= $per['Contraseña'] ?></td>
							<td><a href="<?php echo base_url('editar/' . $per['id']) ?>"><button type="button" class="btn btn-primary">Editar</button></a> <a href="<?php echo base_url('eliminar/' . $per['id']) ?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>

						</tr>
					<?php endforeach;

					?>
				</tbody>
			</table>

		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>