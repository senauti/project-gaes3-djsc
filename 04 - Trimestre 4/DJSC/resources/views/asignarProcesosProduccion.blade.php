<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/Style.css')}}">
    <title>Asignar Procesos de Producción</title>
</head>
<body>
    <div class="formulario">
    <div class="container">
        <center><h1>Asignar Procesos de Producción</h1></center>
        <form action="" class="row g-3 needs-validation" novalidate>
            <div >
                <label for="tipo">Tipo de Producción</label>
                <input type="text" class="form-control" id="tipo" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div >
                <label for="fecha">Fecha del Proceso</label>
                <input type="date" class="form-control" id="tipo" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Asignar Proceso de Producción</button>
            </div>
        </form>
    </div>
    </div>
    <script src="{{ asset('JS/validacion.js')}}"></script>
</body>
</html>