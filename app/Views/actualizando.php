<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Actualizar</h1>
            <form action="<?= base_url('factualizar'); ?>" method="POST">
                <div class="form-group">
                    <input type="number" hidden name="id" value="<?= $usuario['id'] ?>">
                    <label for="exampleInputEmail1">nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?= $usuario['Nombre'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">apellido</label>
                    <input type="text" class="form-control" id="Apellido" name="Apellido" value="<?= $usuario['Apellido'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Documento</label>
                    <input type="text" class="form-control" id="Documento" name="Documento" value="<?= $usuario['Documento'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tipo de documento</label>
                    <select name="TipoDocumento" id="TipoDocumento">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="<?= $usuario['TipoDocumento'] ?>">CC</option>
                    <option value="<?= $usuario['TipoDocumento'] ?>">TI</option>
                    <option value="<?= $usuario['TipoDocumento'] ?>">CE</option>
                 </select>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tipo de cita medica</label>
                    <select name="Usuario" id="Usuario">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="<?= $usuario['Usuario'] ?>">Medicina general</option>
                    <option value="<?= $usuario['Usuario'] ?>">Odontologia</option>
                    <option value="<?= $usuario['Usuario'] ?>">Epecialidades</option>
                 </select>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña</label>
                    <input type="text" class="form-control" id="Contraseña" name="Contraseña" value="<?= $usuario['Contraseña'] ?>" required aria-describedby="emailHelp">

                </div>
                <br>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>

</body>

</html>