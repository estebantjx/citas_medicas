<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agregar</title>
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
            <h1>Agregar</h1>
            <form action="insertar" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">apellido</label>
                    <input type="text" class="form-control" id="Apellido" name="Apellido" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">documento</label>
                    <input type="number" class="form-control" id="Documeto" name="Documento" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">tipo documento</label>
                    <br>
                    <select name="TipoDocumento" id="TipoDocumento">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="CC">CC</option>
                    <option value="TI">TI</option>
                    <option value="CE">CE</option>
                    </select>

                </div>
                <br>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Tipo de cita medica</label>
                    <br>
                    <select name="Usuario" id="Usuario">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="Medicina general">Medicina general </option>
                    <option value="Odontología">Odontología</option>
                    <option value="Especialidad">Especialidad</option>
                    </select> 

                </div>
                <br>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion</label>
                    <input type="textbox" class="form-control" id="Contraseña" name="Contraseña" required aria-describedby="emailHelp">

                </div>
                <br>

                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>

</body>

</html>