<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/STYLEJF.CSS')}}">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>CREACION DE ORDEN DE SERVICIO</title>
</head>
<body>
    <section class="form-register">
        <center style="background: black;">
            <h4 style="color: white; background: none;">CREACION DE ORDEN DE SERVICIO</h4>
        </center>
        <div style="color:black; background: none;">
            INFORMACION REQUERIDA
        </div>
        <form action="{{route('almacenarordenservicio')}}" method="post">
            @csrf
            <input class="controlsj4" type="number" placeholder="Ingrese Cantidad" required id="CantidaddeProductos" name="cantidad" value="{{ old('cantidad') }}" required>
            @error('cantidad')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input class="controlsj5" type="text" placeholder="Ingrese detalles" required id="detallesdelServicio" name="descripcion" value="{{ old('descripcion') }}" required>
            @error('descripcion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div style="background: none;">
                <input class="botons1" type="submit" value="Guardar Orden">
            </div>
        </form>
        @if ($errors->any())
            <div class="modal show" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="{{url('/servicios')}}">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </a>
                        </div>
                        <div class="modal-body">
                            <div style="display: flex;">
                                <center>
                                    <div style="display: inline-block; margin-left: 5%;">
                                        <center><img class="check" src="img/check.png" alt=""></center>
                                        <center>
                                            <p>CONFIRMADO</p>
                                        </center>
                                        <p>Su solicitud se guardó en el sistema de información con éxito.</p>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('JS/bootstrap.min.js')}}"></script>
    <script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
