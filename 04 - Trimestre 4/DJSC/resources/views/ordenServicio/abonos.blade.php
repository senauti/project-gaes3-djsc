<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/style.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('CSS/STYLEabonos.CSS')}}">
    <title>abonos</title>
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"></a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>
  
  @if ($solicitudes->isEmpty())
  <div class="centered-message">
  <div class="my-5">
    <h1 style="font-size: 3rem;">No existen compras aún</h1>
    </div>
    
  </div>
    @else
  
  <div class="row">
  @foreach ($solicitudes as $solicitud)
  <div class="col-sm-3">
    <div class="anun m-5">
        <div class="card" style="width: 18rem;">
      
        <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">nombre del servicio</h5>
          <p class="card-text">detalles del servicio</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#abono">
              realizar abono
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{ $solicitud->id }}">
            abrir
          </button>
          
        </div>
          <!-- The Modal -->
          <div class="modal " id="myModal{{ $solicitud->id }}">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                  
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                  <div style="display: flex;">
                  <div class="card" style="width: 50rem;height: 100%;">
                      <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" alt="...">
                      
                    </div>
                    <div style="display: inline-block; margin-left: 5%;">
                      <div style="display: flex;">
                    <p style="color: red;">cantidad:</p>
                    <p style="margin-left: 5%;">{{ $solicitud->cantidad}}</p>
                  </div>
                  <p style="color: red;">estado: </p>
                  <p>{{ $solicitud->estadosolicitud->estadoSolicitud}}</p>  
                    <p style="color: red;">Detalles: </p>
                    <p>{{ $solicitud->descripcion}}</p>               
                    <p style="color: red;">Total: </p>
                    
                    <p>13.500$</p>
                    <ul class="list-group list-group-horizontal-sm">
                      <li class="list-group-item">1.abono</li>
                      <li class="list-group-item">fecha abono</li>
                      <li class="list-group-item">cantidad abono</li>
                    </ul>
                    
                  </div>
                  </div>
                </div>
          
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">generar recibo</button>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
      @endforeach
    </div>
    @endif

    <div class="modal" id="abono">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
    
          <!-- Modal Header -->
          <div class="modal-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
    
          <!-- Modal body -->
          <div class="modal-body">
            @include('ordenServicio.RealizarAbono')
          </div>
    
          <!-- Modal footer -->
          <div class="modal-footer">
          
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          </div>
        
        </div>
      </div>
    </div>
      
    
    
    
</body>
<script src="{{asset('JS/bootstrap.min.js')}}"></script>
<script src="{{asset('JS/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('JS/validacionJ')}}"></script>
<script src="{{asset('JS/jquery-3.6.4.min.js')}}"></script>
</html>