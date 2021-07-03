@extends('vista.plantilla')
@section('linkboton')
<a href="javascript:void(0)" id="nuevolote" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#createeditModal"><i class="fas fa-download fa-sm text-white-50"></i> Nuevo Lote</a>
@endsection



@section('titulo')
Lotes
@endsection
@section('tabla')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>idLote</th>
                        <th>Nit</th>
                        <th>Proveedor</th>
                        <th>Fecha ingreso</th>
                        <th>Fecha inicio</th>
                        <th>Fecha entrega</th>
                        <th>Cantidad por color y talla (Especificaciones)</th>
                        <th>Cantidad total</th>
                        <th>Descripción</th>
                        <th>Lote en:</th>

                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($lotes as $lote)
                    <tr>
                        <td>{{ $lote->idLote }}</td>
                        <td>{{ $lote->idNitProveedor }}</td>
                        <td>{{ $lote->proveedor()->getresults()->nombreProveedor}}</td>
                        <td>{{ $lote->fechaIngresoLote}}</td>
                        <td>{{ $lote->fechaInicioLote}}</td>
                        <td>{{ $lote->fechaEntregaLote}}</td>
                        <td>

                            <?php $tot = 0 ?>
                            @foreach ($lote->especificaciones()->getresults() as $especificacion)

                            {{$especificacion->color()->getresults()->color}} &nbsp;
                            xxs:{{$especificacion->cantidadxxs}} &nbsp;
                            xs:{{$especificacion->cantidadxs}} &nbsp;
                            s:{{$especificacion->cantidads}} &nbsp;
                            m:{{$especificacion->cantidadm}} &nbsp;
                            l:{{$especificacion->cantidadl}} &nbsp;
                            xl:{{$especificacion->cantidadxl}} &nbsp;
                            2xl:{{$especificacion->cantidad2xl}} &nbsp;
                            3xl:{{$especificacion->cantidad3xl}} &nbsp;
                            <?php
                            $tot += ($especificacion->cantidadxxs +
                                $especificacion->cantidadxs +
                                $especificacion->cantidads +
                                $especificacion->cantidadm +
                                $especificacion->cantidadl +
                                $especificacion->cantidadxl +
                                $especificacion->cantidad2xl +
                                $especificacion->cantidad3xl);
                            ?>
                            <br>
                            <hr>
                            @endforeach

                        </td>
                        <td>{{ $tot}}</td>
                        <td>{{ $lote->descripcionLotes}}</td>
                        <td>{{ $lote->loteen}}</td>


                        <td>
                            <div class="row">

                                <a href="#" class="btn btn-success btn-circle btn-sm editar" data-id="{{ $lote-> idLote}}" data-toggle="modal" data-target="#createeditModal">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-circle btn-sm detalle" data-id="{{ $lote-> idLote}}" data-toggle="modal" data-target="#detallesModal">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle btn-sm eliminar" data-id="{{ $lote-> idLote}}" data-toggle="modal" data-target="#eliminarModal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach



                </tbody>
            </table>
            {!! $lotes->links() !!}
            <!-- Muestra la paginación-->
        </div>
    </div>
</div>

@endsection


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Modal Crear Editar-->
<div class="modal fade" id="createeditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">lote</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!--         campos              -->
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Datos del Lote</h1>
                    </div>
                    <form class="user" action="{{ route('lotes.store') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                                <input type="hidden" name="operacion" id="operacion">
                        <div class="form-group">
                            <div class="">
                                <label for="txtidlote">Id Lote</label>
                                <input type="text" class="form-control form-control-user" id="txtidlote" name="txtidlote" placeholder="Id Lote" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtnit">Nit</label>
                                <input type="text" class="form-control form-control-user" id="txtnit" name="txtnit" placeholder="Nit" readonly>
                            </div>
                        </div>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">
                                <label class="input-group-text" for="selectproveedor">Proveedor</label>
                            </div>
                            <select name="selectproveedor" id="selectproveedor" class="form-control form control-user custom-select">
                                <option value="">Seleccione el proveedor</option>

                                @foreach($proveedores as $proveedor)
                                <option label="{{ $proveedor->nombreProveedor }}" value=" {{ $proveedor->idNitProveedor }} ">{{$proveedor->nombreProveedor}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="txtfechaingreso">Fecha de Ingreso</label>
                            <input type="date" class="form-control form-control-user" id="txtfechaingreso" name="txtfechaingreso"  placeholder="20/04/2021">
                            <label for="txtfechainicio">Fecha de Inicio</label>
                            <input type="date" class="form-control form-control-user" id="txtfechainicio"  name="txtfechainicio" placeholder="20/04/2021">
                            <label for="txtfechaentrega">Fecha de Entrega</label>
                            <input type="date" class="form-control form-control-user" id="txtfechaentrega" name="txtfechaentrega"  placeholder="20/04/2021">
                        </div>
                        <div class="form-group">
                            <label for="txtdescripcion">Descripción</label>
                            <input type="text" class="form-control form-control-user" id="txtdescripcion" name="txtdescripcion" placeholder="Descripción del lote">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="selectloteen">Lote en:</label>
                            </div>
                            <select class="custom-select  " id="selectloteen" name="selectloteen">

                                <option value="Bodega">Bodega</option>
                                <option value="Produccion">Producción</option>
                                <option value="Terminacion">Terminación</option>
                                <option value="Entregado">Entregado</option>
                            </select>
                        </div>


                        <button type="submmit" class="btn btn-primary btn-user btn-block">Guardar</button>

                        <button class="btn btn-secondary btn-user btn-block" type="button" data-dismiss="modal">Cancelar</button>

                    </form>
                </div>
                <!--         campos              -->
            </div>
            <!--<div class="modal-footer">
                </div>-->
        </div>
    </div>
</div>



<!-- Modal Detalles-->
<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ver Detalles del lote</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!--         campos              -->
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Datos del Lote</h1>
                    </div>
                    <form class="user">
                        <div class="form-group">
                            <div class="">
                                <label for="idLote">Id Lote</label>
                                <input type="text" class="form-control form-control-user" id="txtidlote" placeholder="Id Lote" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtnit">Nit</label>
                                <input type="text" class="form-control form-control-user" id="txtnit" placeholder="Nit" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtproveedor">Proveedor</label>
                                <input type="text" class="form-control form-control-user" id="txtproveedor" placeholder="Proveedor" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtvalor">Valor</label>
                            <input type="text" class="form-control form-control-user" id="txtvalor" placeholder="0.0" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="txtfechaingreso">Fecha de Ingreso</label>
                            <input type="date" class="form-control form-control-user" id="txtfechaingreso" placeholder="20/04/2021" readonly="readonly">
                            <label for="txtfechaingreso">Fecha de Inicio</label>
                            <input type="date" class="form-control form-control-user" id="txtfechainicio" placeholder="20/04/2021" readonly="readonly">
                            <label for="txtfechaingreso">Fecha de Entrega</label>
                            <input type="date" class="form-control form-control-user" id="txtfechaentrega" placeholder="20/04/2021" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="txtcantidadcolortalla">Cantidad por color y talla</label>
                            <input type="text" class="form-control form-control-user" id="txtcantidadcolortalla" placeholder="0" readonly="readonly">
                            <label for="txtcantidadtotal">Cantidad total</label>
                            <input type="text" class="form-control form-control-user" id="txtcantidadtotal" placeholder="0" readonly="readonly">
                            <label for="txtdescripcion">Descripción</label>
                            <input type="text" class="form-control form-control-user" id="txtdescripcion" placeholder="N/A" readonly="readonly">

                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="txtloteen">Lote en:</label>
                                <input type="text" id="txtloteen" readonly>
                            </div>

                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="txttalla">Talla:</label>
                                <input type="text" name="" id="txttalla" readonly>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="text" name="color" id="color" readonly="readonly">
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="button" data-dismiss="modal">Cerrar Detalles</button>

                    </form>
                </div>
                <!--         campos              -->
            </div>
            <!--<div class="modal-footer">
                </div>-->
        </div>
    </div>
</div>





<!-- Modal Eliminar Lote-->
<div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Realmente quieres eliminar el lote?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecciona "Eliminar Lote" a continuación si deseas borrar el lote.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="#" data-dismiss="modal">Eliminar Lote</a>
            </div>
        </div>
    </div>
</div>



@section('scripting')
<script>
    $(document).ready(function() {


        /*actualiza valor de nit del modal al cambiar el select*/
        $('#selectproveedor').on('change', function() {
            $('#txtnit').val($('#selectproveedor').val());
        });


        /* cuando se presiona el botón de nuevo lote */
        $('#nuevolote').click(function() {
            $('#btnguardar').val("crear-lote");
            $('#proveedor').trigger("reset");
            $('#operacion').val("crear");
            $('#crud-modal').modal('show');
            $('#txtidlote').prop('readonly', '');
            $('#txtnit').prop('readonly', 'readonly');
        });

        /* Editar lote */
        $('body').on('click', '.editar', function() {
            //alert("editar lote");
            var lote_id = $(this).data('id');
            //alert("idLote: "+lote_id);

            $.get('lotes/' + lote_id + '/edit', function(data) {
//                alert(data.idNitProveedor);
                $('#operacion').val("editar");
                $('#btn-update').val("Update");
                $('#btn-save').prop('disabled', false);
                $('#btn-save').prop('hidden', false);
                $('#txtidlote').val(data.idLote);
                $('#txtnit').val(data.idNitProveedor);


opciones=$("#selectproveedor option").each(function(){

if(this.value==data.idNitProveedor)
this.setAttribute("selected","true");
});



                // $('#txtfechaingreso').attr('value',data.fechaIngresoLote);
                $('#txtfechaingreso').val(data.fechaIngresoLote);
                $('#txtfechainicio').val(data.fechaInicioLote);
                $('#txtfechaentrega').val(data.fechaEntregaLote);
                $('#txtdescripcion').val(data.descripcionLotes);


opciones=$("#selectloteen option").each(function(){
console.log(this.value);
if(this.value==data.loteen)
this.setAttribute("selected","true");
});
                $('#crud-modal').modal('show');
            })

        });
        /* Mostrar proveedor*/
        $('body').on('click', '.detalle', function() {
            var proveedor_id = $(this).data('id');
            $.get('proveedores/' + proveedor_id + '/show', function(data) {
                $('#detallesModal').modal('show');
                $('#txtnitdetalles').val(data.idNitProveedor);
                $('#txtNombredetalles').val(data.nombreProveedor);
                $('#txtDirecciondetalles').val(data.direccion);
                $('#txtTelefonodetalles').val(data.telefono);
                $('#txtNombrePersonaCargodetalles').val(data.encargadoProveedor);
                $('#txtnitdetalles').prop('readonly', 'readonly');
                $('#txtNombredetalles').prop('readonly', 'readonly');
                $('#txtDirecciondetalles').prop('readonly', 'readonly');
                $('#txtTelefonodetalles').prop('readonly', 'readonly');
                $('#txtNombrePersonaCargodetalles').prop('readonly', 'readonly');
            })
        });

        /* Elinimar proveedor */
        $('body').on('click', '.eliminar', function() {
            var proveedor_id = $(this).data("id");

            $('#txtniteliminar').val(proveedor_id);


        });
    });
</script>

@endsection