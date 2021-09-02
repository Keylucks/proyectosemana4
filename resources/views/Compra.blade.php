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
          <th scope="col">ID_ACCESO</th>
          <th scope="col">SERIE</th>
          <th scope="col">NUM CORRE</th>
          <th scope="col">FECHA</th>
          <th scope="col">IGV</th>
          <th scope="col">SUB TOTAL</th>
          <th scope="col">TOTAL</th>
        </tr>
      </thead>
      <tbody>
        @foreach($compra as $value)    
        
            <tr>
            <th scope="col">{{$value->idcompra}}</th>
            <th scope="col">{{$value->serie}}</th>
            <th scope="col">{{$value->num_corre}}</th>
            <th scope="col">{{$value->fec_rec}}</th>
            <th scope="col">{{$value->igv_total}}</th>
            <th scope="col">{{$value->sub_total}}</th>
            <th scope="col">{{$value->total}}</th>
          </tr>
        @endforeach 
      <tbody>  
    </table>
</body>
</html>