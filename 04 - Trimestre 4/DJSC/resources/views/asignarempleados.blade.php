<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/style.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">

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
  <div class="anun p-5">
    <div class="card " style="width: 18rem;">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            abrir
        </button>
        
        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                <div style="display: flex;">
                
                  <div style="display: inline-block; margin-left: 5%;">
                    <div style="display: flex;">
                  <p style="color: red;">cantidad:</p>
                  <p style="margin-left: 5%;">10</p>
                </div>
               
                  <p style="color: red;">Detalles: </p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deleniti eligendi illum? Sit non cupiditate consectetur error dolorem facilis, quas voluptate reiciendis dolore unde aut laborum, labore mollitia iste saepe!</p>
                  <p style="color: red;">Tiempo para culminar la actividad: </p>
              
            
                    <li style="color: red;" class="list-group-item">hasta:</li>
                    <li class="list-group-item">3/04/2023</li>
            
                </div>
                </div>
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <a href="{{url('/asignarEmpleadoActividad')}}"><button type="button" class="btn btn-primary">
                    asignar empleados
                 </button></a>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
              </div>
        
            </div>
          </div>
           
    
        </div>
      </div>
    </div>
 
  

    <div class="card" style="width: 18rem;margin-left: 5%;">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
            abrir
        </button>
        
        <!-- The Modal -->
        <div class="modal" id="myModal1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                <div style="display: flex;">
                
                  <div style="display: inline-block; margin-left: 5%;">
                    <div style="display: flex;">
                  <p style="color: red;">cantidad:</p>
                  <p style="margin-left: 5%;">10</p>
                </div>
               
                  <p style="color: red;">Detalles: </p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deleniti eligendi illum? Sit non cupiditate consectetur error dolorem facilis, quas voluptate reiciendis dolore unde aut laborum, labore mollitia iste saepe!</p>
                  <p style="color: red;">Tiempo para culminar la actividad: </p>
              
            
                    <li style="color: red;" class="list-group-item">hasta:</li>
                    <li class="list-group-item">3/04/2023</li>
            
                </div>
                </div>
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <a href="{{url('/asignarEmpleadoActividad')}}"><button type="button" class="btn btn-primary">
                    asignar empleados
                 </button></a>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>
  

    <div class="card" style="width: 18rem;margin-left: 5%;">
     
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
           abrir
        </button>
        
        <!-- The Modal -->
        <div class="modal" id="myModal2">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                <div style="display: flex;">
                
                  <div style="display: inline-block; margin-left: 5%;">
                    <div style="display: flex;">
                  <p style="color: red;">cantidad:</p>
                  <p style="margin-left: 5%;">10</p>
                </div>
               
                  <p style="color: red;">Detalles: </p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deleniti eligendi illum? Sit non cupiditate consectetur error dolorem facilis, quas voluptate reiciendis dolore unde aut laborum, labore mollitia iste saepe!</p>
                  <p style="color: red;">Tiempo para culminar la actividad: </p>
              
            
                    <li style="color: red;" class="list-group-item">hasta:</li>
                    <li class="list-group-item">3/04/2023</li>
            
                </div>
                </div>
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <a href="{{url('/asignarEmpleadoActividad')}}"><button type="button" class="btn btn-primary">
                    asignar empleados
                 </button></a>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>
 

    <div class="card" style="width: 18rem;margin-left: 5%;">
     
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal3">
            abrir
        </button>
        
        <!-- The Modal -->
        <div class="modal" id="myModal3">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                <div style="display: flex;">
                
                  <div style="display: inline-block; margin-left: 5%;">
                    <div style="display: flex;">
                  <p style="color: red;">cantidad:</p>
                  <p style="margin-left: 5%;">10</p>
                </div>
               
                  <p style="color: red;">Detalles: </p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deleniti eligendi illum? Sit non cupiditate consectetur error dolorem facilis, quas voluptate reiciendis dolore unde aut laborum, labore mollitia iste saepe!</p>
                  <p style="color: red;">Tiempo para culminar la actividad: </p>
              
            
                    <li style="color: red;" class="list-group-item">hasta:</li>
                    <li class="list-group-item">3/04/2023</li>
            
                </div>
                </div>
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <a href="{{url('/asignarEmpleadoActividad')}}"><button type="button" class="btn btn-primary">
                    asignar empleados
                 </button></a>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>
  
</div>
    <div class="anun p-5">
        <div class="card " style="width: 18rem;">
         
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal4">
                abrir
            </button>
            
            <!-- The Modal -->
            <div class="modal" id="myModal4">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div style="display: flex;">
                    
                      <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">cantidad:</p>
                      <p style="margin-left: 5%;">10</p>
                    </div>
                   
                      <p style="color: red;">Detalles: </p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deleniti eligendi illum? Sit non cupiditate consectetur error dolorem facilis, quas voluptate reiciendis dolore unde aut laborum, labore mollitia iste saepe!</p>
                      <p style="color: red;">Tiempo para culminar la actividad: </p>
                  
                
                        <li style="color: red;" class="list-group-item">hasta:</li>
                        <li class="list-group-item">3/04/2023</li>
                
                    </div>
                    </div>
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <a href="{{url('/asignarEmpleadoActividad')}}"><button type="button" class="btn btn-primary">
                        asignar empleados
                     </button></a>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  </div>
            
                </div>
              </div>
        
            </div>
          </div>
        </div>
     
      
    
        <div class="card" style="width: 18rem;margin-left: 5%;">
          
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal5">
                abrir
            </button>
            
            <!-- The Modal -->
            <div class="modal" id="myModal5">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
              
                    <!-- Modal Header -->
                    <div class="modal-header">
                      
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
              
                    <!-- Modal body -->
                    <div class="modal-body">
                      <div style="display: flex;">
                      
                        <div style="display: inline-block; margin-left: 5%;">
                          <div style="display: flex;">
                        <p style="color: red;">cantidad:</p>
                        <p style="margin-left: 5%;">10</p>
                      </div>
                     
                        <p style="color: red;">Detalles: </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deleniti eligendi illum? Sit non cupiditate consectetur error dolorem facilis, quas voluptate reiciendis dolore unde aut laborum, labore mollitia iste saepe!</p>
                        <p style="color: red;">Tiempo para culminar la actividad: </p>
                    
                  
                          <li style="color: red;" class="list-group-item">hasta:</li>
                          <li class="list-group-item">3/04/2023</li>
                  
                      </div>
                      </div>
                    </div>
              
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="{{url('/asignarEmpleadoActividad')}}"><button type="button" class="btn btn-primary">
                            asignar empleados
                         </button></a>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
              
                  </div>
                </div>
            </div>
          </div>
        </div>
      
    
        <div class="card" style="width: 18rem;margin-left: 5%;">
         
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal6">
               abrir
            </button>
            
            <!-- The Modal -->
            <div class="modal" id="myModal6">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div style="display: flex;">
                    
                      <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">cantidad:</p>
                      <p style="margin-left: 5%;">10</p>
                    </div>
                   
                      <p style="color: red;">Detalles: </p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deleniti eligendi illum? Sit non cupiditate consectetur error dolorem facilis, quas voluptate reiciendis dolore unde aut laborum, labore mollitia iste saepe!</p>
                      <p style="color: red;">Tiempo para culminar la actividad: </p>
                  
                
                        <li style="color: red;" class="list-group-item">hasta:</li>
                        <li class="list-group-item">3/04/2023</li>
                
                    </div>
                    </div>
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <a href="{{url('/asignarEmpleadoActividad')}}"><button type="button" class="btn btn-primary">
                        asignar empleados
                     </button></a>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  </div>
            
                </div>
              </div>
            </div>
          </div>
        </div>
     
    
        <div class="card" style="width: 18rem;margin-left: 5%;">
        
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal7">
                abrir
            </button>
            
            <!-- The Modal -->
            <div class="modal" id="myModal7">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                
                      <!-- Modal Header -->
                      <div class="modal-header">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                
                      <!-- Modal body -->
                      <div class="modal-body">
                        <div style="display: flex;">
                        
                          <div style="display: inline-block; margin-left: 5%;">
                            <div style="display: flex;">
                          <p style="color: red;">cantidad:</p>
                          <p style="margin-left: 5%;">10</p>
                        </div>
                       
                          <p style="color: red;">Detalles: </p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deleniti eligendi illum? Sit non cupiditate consectetur error dolorem facilis, quas voluptate reiciendis dolore unde aut laborum, labore mollitia iste saepe!</p>
                          <p style="color: red;">Tiempo para culminar la actividad: </p>
                      
                    
                            <li style="color: red;" class="list-group-item">hasta:</li>
                            <li class="list-group-item">3/04/2023</li>
                    
                        </div>
                        </div>
                      </div>
                
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <a href="{{url('/asignarEmpleadoActividad')}}"><button type="button" class="btn btn-primary">
                            asignar empleados
                         </button></a>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                      </div>
                
                    </div>
                  </div>
            </div>
          </div>
        </div>
      
    </div>

   
    
    
</body>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('JS/validacionJ')}}"></script>
<script src="{{ asset('JS/jquery-3.6.4.min.js')}}"></script>
</html>