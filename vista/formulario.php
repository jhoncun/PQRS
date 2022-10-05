<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="card text-center">
        Bienvenido
    </div>
    <div class="row pt-5 justify-content-center">
        <form action="" id="form" class="form-horizontal">
            <div class="card-header">
                <input type="text" name="tipo_operacion" value="guardar" hidden="true">
                    <div>
                        <h5>FORMULARIO DE REGISTRO DE PQRS</h5>
                    </div>
                        <div class="form-group">
                            <select name="tipo_doc" id="tipo_doc" class="form-control">
                                <option value="">Seleccione el tipo de documento de identidad</option>
                                <option value="CC">Cedula de ciudadania</option>
                                <option value="TI">Tarjeta de Identidad</option>
                                <option value="CE">Cedula de Extranjeria</option>
                                <option value="RC">Registro Civil</option>
                                <option value="NIT">NIT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="documento" class="form-control" placeholder="Digite su numero de identidad">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="fecha" id="fecha">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Digite sus nombres">
                        </div>
                        <div class="form-group">
                            <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Digite sus apellidos">
                        </div>
                        <div class="form-group">
                           <select name="sexo" id="sexo" class="form-control">
                                <option value="">Elija su sexo</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                           </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-info btn-block">Aceptar</button>
                        </div>
            </div>
            <div>
                <a href="index.php" class="nav-link"><--Inicio</a>
            </div>
        </form>

    </div>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>  
    <script src="js/funciones.js"></script> 
</body>
</html>