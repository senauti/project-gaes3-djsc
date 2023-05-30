<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/Style.css')}}">

    <title>Registrar Orden de Producción</title>
</head>
<body>
    <div class="container">
        <center><h1>Registrar Orden de Producción</h1></center>
        <div class="formulario">
        <form action="" class="row g-3 needs-validation" novalidate>
            <div >
                <label for="time">Tiempo para Culminar la Actividad</label>
                <input type="date" class="form-control" id="time" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div >
                <label for="mpr">Materia Prima Requerida</label>
                <input type="text" class="form-control" id="mpr" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Registrar Orden de Producción</button>
            </div>
        </form>
    </div>
    </div>
</body>
<script src="{{ asset('JS/validacion.js')}}"></script>
</html>