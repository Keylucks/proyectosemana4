<!DOCTYPE html>
<html lang="en">
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
          <th scope="col">ID_PROVEEDOR</th>
          <th scope="col">RUC</th>
          <th scope="col">ID DOCUMENTO</th>
          <th scope="col">NUMERO</th>
          <th scope="col">CELULAR</th>
          <th scope="col">DIRECCION</th>
        </tr>
      </thead>
      <tbody>
        @foreach($proveedores as $value)    
        
            <tr>
            <th scope="col">{{$value->idproveedores}}</th>
            <th scope="col">{{$value->ruc}}</th>
            <th scope="col">{{$value->iddocu}}</th>
            <th scope="col">{{$value->numero}}</th>
            <th scope="col">{{$value->celular}}</th>
            <th scope="col">{{$value->direccion}}</th>
          </tr>
        @endforeach 
      <tbody>  
    </table>
</body>
</html>