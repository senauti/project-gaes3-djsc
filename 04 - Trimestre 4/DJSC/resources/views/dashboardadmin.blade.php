<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/Style.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    
    <title>dashboard</title>
</head>
<body>
    
      <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
          <div class="header-box ">
            <a class="navbar-brand" href="#">
              <img src="img/logo.png" alt="Logo" width="240" height="100">
            </a>
            <h1 class="fs-4"><span class="text-dark rounded shadow px-2 me-2"></span>bienvenido</h1>
           <h4>aministrador</h4>
           <br>
           <br>
          </div>
          <ul class="list-unstyled px-2">
            <li class="active"><a class="text-decoration-none px-3 py-2 d-block" href="{{url('/home')}}"target="pedidos"><i class="fas fa-home"></i>dashboard</a></li>
            <li class=""><a class="text-decoration-none px-3 py-2 d-block" href="{{url('/consultarcontratos')}}"target="pedidos"><i class="fas fa-search"></i></i>consultar contratos con sub empresas</a></li>
            <li class=""><a class="text-decoration-none px-3 py-2 d-block" href="{{url('/RegistroContrato')}}"target="pedidos"><i class="fas fa-file-contract"></i>registrar contrato sub empresa</a></li>
            <li class=""><a class="text-decoration-none px-3 py-2 d-block" href="{{url('/Registro de Servicio')}}"target="pedidos"><i class="fas fa-cart-plus"></i>registrar servicios disponibles</a></li>
            <li class=""><a class="text-decoration-none px-3 py-2 d-block" href="{{route('listaSolicitudes')}}"target="pedidos"><i class="fas fa-search"></i></i>consultar ordenes de servicio</a></li>
            <li class=""><a class="text-decoration-none px-3 py-2 d-block" href="{{url('/generarinformesS')}}"target="pedidos"><i class="far fa-file-edit"></i>generar informes de solicitudes</a></li>
          </ul>
          <hr class="h-color mx-3">
         
           </div>
           
         <div class="content">
          <nav class="navbar navbar-expand-lg bg-rgb">
            <div class="container-fluid">
               
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mt-5 ms-auto ">
                  <li class="nav-item me-3">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">inicio</a>
                  </li>
                  <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Sobre nosotros
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">mision</a></li>
                      <li><a class="dropdown-item" href="#">vision</a></li>
                     
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle me-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
                  <div style="width: 200px;">
                    <img class="img-fluid rounded-circle" style="width:30%;position: relative;left:70%;" src="https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_640.png" alt="">
                
                  </div>
              </div>
            </div>
          </nav>
          <div class="dashboard-content ratio ratio-16x9">
            <iframe name="pedidos" class="h-100 " src="" frameborder="0" allowfullscreen></iframe>   
              
        </div>
         </div>
         
        </div>


<script src="{{ asset('JS/jquery-3.6.4.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>

<script > 
  $(".sidebar ul li").on('click' , function(){
   $(".sidebar ul li.active").removeClass('active');
   $(this).addClass('active');
  })
</script>
      
      
</body>

</html>