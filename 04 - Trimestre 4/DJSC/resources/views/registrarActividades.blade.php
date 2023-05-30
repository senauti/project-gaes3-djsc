<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Style.css')}}">
    <title>Registrar Actividades</title>
</head>
<body>
    <div class="formulario">
    <div class="container">
        <center><h1>Registrar Actividades</h1></center>
        <form action="" class="row g-3 needs-validation" novalidate>
            <div >
                <label for="name">Nombre de la Actividad</label>
                <input type="text" class="form-control" id="name" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div >
                <label for="fecha">Fecha de la Actividad</label>
                <input type="date" class="form-control" id="fecha" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div >
                <label for="det">Detalles</label>
                <input type="text" class="form-control" id="det">
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div class="col-6"></div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary">registrar actividad</button>
            </div>
        </form>
    </div>
    </div>
</body>
<script src="{{ asset('JS/validacion.js')}}"></script>
</html>