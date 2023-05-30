<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>informes produccion</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"></a>
       <button type="button" class="btn btn-success btn-lg">generar informe</button>
      </nav>
    <table class="table">
       
        <thead>
          <tr>
            
            <th scope="col">id produccion</th>
            <th scope="col">tipo de produccion</th>
            <th scope="col">fecha de inicio</th>
            <th scope="col">cantiad de empleados</th>
            
          </tr>
        </thead>
    
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>estampado de camisas</td>
            <td>19/03/2023</td>
            <td>4</td>
          
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>estampado de posillos</td>
            <td>20/05/2022</td>
            <td>5</td>
          
             
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>estampado de toallas</td>
            <td>15/09/2022</td>
            <td>12</td>
            
          </tr>
        </tbody>
      </table>
</body>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>