<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
</head>

<body>
    <style>
        .tablas {
            display: block;
            position: relative;
            font-size: small;
            width: 900px;
            margin-top: 100px;
            margin-right: auto;
            margin-left: auto;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        table {
            width: 800px;
            margin: 20px auto;
        }

        div {
            display: inline-block;
            border: 2px solid black;

        }

        .derecha {
            text-align: right;
        }

        .izquierda {
            text-align: left;
        }
    </style>

    <div class="tablas">

        <table>

            <tr>
                <td class="izquierda"> PRODUCCION - BODEGA DE MATERIAS PRIMAS - SALIDA PLANTAS
                    2021-01-28 8:24 a.m. Teléfono 574 5120514 </td>
                <td class="derecha"> Nº SALIDA 00000000</td>
            </tr>
            <tr>
                <td class="izquierda"></td>
                <td class="derecha">Nº Lote {{$lote->idLote}}</td>
            </tr>
            <tr>
                <td class="izquierda">NOMBRE PLANTA: JARAMILLO OSORIO MIRIAM DEL SOCORRO Nit o CC 22167445-7 </td>
                <td class="derecha">Referencia: {{$lote->idLote}}</td>
            </tr>
            <tr>
                <td class="izquierda">Dirección CL 94D 79A 121 Ciudad: MEDELLIN </td>
                <td class="derecha">{{$lote->descripcionLotes}}</td>
            </tr>
            <tr>
                <td class="izquierda">Valor Confección: 7300 CAMISA MIC CONFORT ESTAMPADO </td>
                <td class="derecha">fecha: {{$lote->fechaIngresoLote}}</td>
            </tr>
            <tr>
                <td class="izquierda">Valor Terminación: 0 </td>
                <td class="derecha">Para entregar en {{$lote->fechaEntregaLote}}</td>
            </tr>
            <tr>
                <td class="izquierda">Valor Total: 1430800 Ref Ext: Nº Muestras: 0 </td>
                <td class="derecha">Encargado: Teléfono: 2673014</td>
            </tr>


        </table>
        <hr>
        <table>
<tbody>
<tr>

    <td class="izquierda">PRODUCTO EN PROCES</td>
    <td> Tallas: S-M-L-XL-2XL </td>
    
    <td>Comp: 100% ALGODON</td>
</tr>
    
    <td class="izquierda">Línea: MASCULINO Col: S1T21
    
    <br/>Cuenta: LIBRE 
    
    <br/>TALLAS</td>
    
</tbody>
</table>
<hr>

    <table>
        <thead>
            <tr>
                <th>Ref</th>
                <!-- <th></th> -->
                <th>Pinta</th>
                <th>XXS</th>
                <th>XS</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>2XL</th>
                <th>3XL</th>
                <th>TOTAL: </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalxxs = 0;
            $totalxs = 0;
            $totals = 0;
            $totalm = 0;
            $totall = 0;
            $totalxl = 0;
            $total2xl = 0;
            $total3xl = 0;
            $total = 0;
            ?>
            @foreach($especificaciones as $especificacion)
            <tr>
                <td>{{$especificacion->idLote}}</td>
                <td>{{$especificacion->color()->getresults()->color}}</td>
                <td>{{$especificacion->cantidadxxs}}</td>
                <td>{{$especificacion->cantidadxs}}</td>
                <td>{{$especificacion->cantidads}}</td>
                <td>{{$especificacion->cantidadm}}</td>
                <td>{{$especificacion->cantidadl}}</td>
                <td>{{$especificacion->cantidadxl}}</td>
                <td>{{$especificacion->cantidad2xl}}</td>
                <td>{{$especificacion->cantidad3xl}}</td>
                <td>{{$especificacion->cantidadxxs +
$especificacion->cantidadxs +
$especificacion->cantidads +
$especificacion->cantidadm +
$especificacion->cantidadl +
$especificacion->cantidadxl +
$especificacion->cantidad2xl +
$especificacion->cantidad3xl}}</td>
            </tr>
            <?php
            $totalxxs += $especificacion->cantidadxxs;
            $totalxs += $especificacion->cantidadxs;
            $totals += $especificacion->cantidads;
            $totalm += $especificacion->cantidadm;
            $totall += $especificacion->cantidadl;
            $totalxl += $especificacion->cantidadxl;
            $total2xl += $especificacion->cantidad2xl;
            $total3xl += $especificacion->cantidad3xl;
            ?>
            @endforeach
            <?php
            $total =
                $totalxxs +
                $totalxs +
                $totals +
                $totalm +
                $totall +
                $totalxl +
                $total2xl +
                $total3xl;

            ?>
            <tr>
                <td></td>
                <td>TOTAL</td>
                <td>{{$totalxxs}}</td>
                <td>{{$totalxs}}</td>
                <td>{{$totals}}</td>
                <td>{{$totalm}}</td>
                <td>{{$totall}}</td>
                <td>{{$totalxl}}</td>
                <td>{{$total2xl}}</td>
                <td>{{$total3xl}}</td>
                <td>{{$total}}</td>

            </tr>
        </tbody>
        <TFoot></TFoot>
    </table>


    <hr>
    <table>
        <thead>
            <tr>
                <th>Insumos</th>
                <th>Observación</th>
                <th>Cantidad</th>
                <th>Unidad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>861- BOLSA SUPERIOR SLOVA CAMISA SURTIDO</td>
                <td></td>
                <td>198</td>
                <td>Und</td>
            </tr>
            <tr>
                <td>1805 - ENTRETELA 1025 CAMISA 3 CM BLANCO</td>
                <td></td>
                <td>140</td>
                <td>m</td>
            </tr>
        </tbody>
        <tfoot></tfoot>
    </table>
    </div>
    <a href="../facturapdf/{{$especificacion->idLote}}" class="btn btn-primary btn-circle btn-sm vistaprevia" target="_blank">
                                                    <abbr title="Descargar pdf"><i class=" fas fa-pdf"></i></abbr>
                                                    PDF</a>
</body>

</html>