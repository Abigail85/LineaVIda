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
                        <th>Nit</th>
                        <th>Proveedor</th>
                        <th>Valor</th>
                        <th>Fecha ingreso</th>
                        <th>Fecha inicio</th>
                        <th>Fecha entrega</th>
                        <th>Cantidad por color y talla</th>
                        <th>Cantidad total</th>
                        <th>Descripción</th>
                        <th>Lote en:</th>
                        <th>Talla</th>
                        <th>Color</th>

                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($lotes as $lote)
                    <tr>
                        <td>{{ $lote->idNitProveedor }}</td>
                        <td>{{ $lote->proveedor()->getresults()->nombreProveedor}}</td>
                        <td>{{ $lote->valor}}</td>
                        <td>{{ $lote->fechaIngresoLote}}</td>
                        <td>{{ $lote->fechaIngresoLote}}</td>
                        <td>{{ $lote->fechaIngresoLote}}</td>
                        <td>61 89 45</td>
                        <td>{{ $lote->cantidadTotalLotes}}</td>
                        <td>{{ $lote->descripcionLotes}}</td>
                        <td>Bodega</td>
                        <td>L</td>
                        <td class="muestracolor">
                            <div class="muestra bg-gradient-primary">

                            </div>
                        </td>

                        <td>
                            <div class="row">

                                <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#createeditModal">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#detallesModal">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#eliminarModal">
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

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Realmente quieres cerrar sesión?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecciona "Salir" a continuación si deseas cerrar la sesión.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="login.html">Salir</a>
            </div>
        </div>
    </div>
</div>


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
                    <form class="user">
                        <div class="form-group">
                            <div class="">
                            <input type="hidden" name="operacion" id="operacion">
                                <label for="txtnit">Nit</label>
                                <input type="text" class="form-control form-control-user" id="txtnit" placeholder="Nit" readonly>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="selectproveedor">Proveedor</label>
                            </div>
                                <select name="selectproveedor" id="selectproveedor" class="form-control form control-user custom-select">
                                    <option value="">Seleccione el proveedor</option>

                                    @foreach($proveedores as $proveedor)
                                    <option value=" {{ $proveedor->idNitProveedor }} ">{{$proveedor->nombreProveedor}}</option>
                                    @endforeach
                                </select>
                            
                        </div>
                        <div class="form-group">
                            <label for="txtvalor">Valor</label>
                            <input type="number" class="form-control form-control-user" id="txtvalor" placeholder="0.0" >
                        </div>
                        <div class="form-group">
                            <label for="txtfechaingreso">Fecha de Ingreso</label>
                            <input type="date" class="form-control form-control-user" id="txtfechaingreso" placeholder="20/04/2021" >
                            <label for="txtfechaingreso">Fecha de Inicio</label>
                            <input type="date" class="form-control form-control-user" id="txtfechainicio" placeholder="20/04/2021" >
                            <label for="txtfechaingreso">Fecha de Entrega</label>
                            <input type="date" class="form-control form-control-user" id="txtfechaentrega" placeholder="20/04/2021" >
                        </div>
                        <div class="form-group">
                            <label for="txtcantidadcolortalla">Cantidad por color y talla</label>
                            <input type="text" class="form-control form-control-user" id="txtcantidadcolortalla" placeholder="0" >
                            <label for="txtcantidadtotal">Cantidad total</label>
                            <input type="text" class="form-control form-control-user" id="txtcantidadtotal" placeholder="0" >
                            <label for="txtdescripcion">Descripción</label>
                            <input type="text" class="form-control form-control-user" id="txtdescripcion" placeholder="N/A" >

                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputgruopselect01">Lote en:</label>
                            </div>
                            <select class="custom-select  " id="txtloteen">

                                <option value="0">Bodega</option>
                                <option value="1">Producción</option>
                                <option value="2">Terminación</option>
                                <option value="3">Entregado</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="txttalla">Talla:</label>
                            </div>
                            <select class="custom-select  " id="txttalla">

                            <option value="XXS">XXS</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="2XL">2XL</option>
                                <option value="3XL">3XL</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <label class="input-group-text" for="color" >Color</label>
                            </div>
                            <input type="text" name="color" id="color" class="form-control form-control-user">
                        </div>
                        <input type="submmit" class="btn btn-primary btn-user btn-block" value='Guardar'>
                        
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
                                <label for="txtnit">Nit</label>
                                <input type="text" class="form-control form-control-user" id="txtnit" placeholder="Nit"  readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtproveedor">Proveedor</label>
                                <input type="text" class="form-control form-control-user" id="txtproveedor" placeholder="Proveedor"  readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtvalor">Valor</label>
                            <input type="number" class="form-control form-control-user" id="txtvalor" placeholder="0.0" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="txtfechaingreso">Fecha de Ingreso</label>
                            <input type="date" class="form-control form-control-user" id="txtfechaingreso" placeholder="20/04/2021"  readonly="readonly">
                            <label for="txtfechaingreso">Fecha de Inicio</label>
                            <input type="date" class="form-control form-control-user" id="txtfechainicio" placeholder="20/04/2021"  readonly="readonly">
                            <label for="txtfechaingreso">Fecha de Entrega</label>
                            <input type="date" class="form-control form-control-user" id="txtfechaentrega" placeholder="20/04/2021"  readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="txtcantidadcolortalla">Cantidad por color y talla</label>
                            <input type="text" class="form-control form-control-user" id="txtcantidadcolortalla" placeholder="0" readonly="readonly">
                            <label for="txtcantidadtotal">Cantidad total</label>
                            <input type="text" class="form-control form-control-user" id="txtcantidadtotal" placeholder="0"  readonly="readonly">
                            <label for="txtdescripcion">Descripción</label>
                            <input type="text" class="form-control form-control-user" id="txtdescripcion" placeholder="N/A"  readonly="readonly">

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



        $('#selectproveedor').on('change', function() {
            $('#txtnit').val($('#selectproveedor').val());
        });


        /* cuando se presiona el botón de nuevo lote */
        $('#nuevolote').click(function() {
            $('#btnguardar').val("crear-lote");
            $('#proveedor').trigger("reset");
            $('#operacion').val("crear");
            $('#crud-modal').modal('show');
            $('#txtnit').prop('readonly', 'readonly');
        });

        /* Editar proveedor */
        $('body').on('click', '.editar', function() {
            var proveedor_id = $(this).data('id');
            $.get('proveedores/' + proveedor_id + '/edit', function(data) {
                $('#operacion').val("editar");
                $('#btn-update').val("Update");
                $('#btn-save').prop('disabled', false);
                $('#btn-save').prop('hidden', false);
                $('#crud-modal').modal('show');
                $('#txtnit').val(data.idNitProveedor);
                $('#txtNombre').val(data.nombreProveedor);
                $('#txtDireccion').val(data.direccion);
                $('#txtTelefono').val(data.telefono);
                $('#txtNombrePersonaCargo').val(data.encargadoProveedor);
                //$('#txtnit').prop('readonly', 'readonly');
                $('#txtNombre').prop('readonly', '');
                $('#txtDireccion').prop('readonly', '');
                $('#txtTelofono').prop('readonly', '');
                $('#txtNombrePersonaCargo').prop('readonly', '');
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