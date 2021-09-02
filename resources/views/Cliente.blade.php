<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <table class="table table-dark table-striped">
    <thead>
        <tr>
          <th scope="col">ID_ACCESO</th>
          <th scope="col">APELLIDO Y NOMBRE</th>
          <th scope="col">ID DOCUMENTO</th>
          <th scope="col">NUMERO</th>
          <th scope="col">SEXO</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cliente as $value)    
        
            <tr>
            <th scope="col">{{$value->idcliente}}</th>
            <th scope="col">{{$value->ape_nom}}</th>
            <th scope="col">{{$value->iddocu}}</th>
            <th scope="col">{{$value->numero}}</th>
            <th scope="col">{{$value->sexo}}</th>
          </tr>
        @endforeach 
      <tbody>  
    </table>
</body>
</html>