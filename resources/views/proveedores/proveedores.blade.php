<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
</head>
<body>
    <h1>Proveedores</h1>
    <table>
    <thead>
    <th>nombreProveedor</th>
    <th>telefono</th>
    <th>direccion</th>
    <th>encargadoProveedor</th>
    <th>idNitProveedor</th>
    </thead>
    <tbody>
    @foreach($proveedores as $proveedor)
    <tr>
    <td>{{$proveedor->nombreProveedor}}</td>
    <td>{{$proveedor->telefono}}</td>
    <td>{{$proveedor->direccion}}</td>
    <td>{{$proveedor->encargadoProveedor}}</td>
    <td>{{$proveedor->idNitProveedor}}</td>
    </tr>
    
    @endforeach
    </tbody>
    </table>
    <h2>ñññññññññññññññññññññññ</h2>
    <?php

var_dump($proveedores);

?>
</body>
</html>