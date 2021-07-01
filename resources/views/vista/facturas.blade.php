@extends('vista.plantilla')
            @section('linkboton')
                        <a href="javascript:void(0)" id="nuevofactura" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#editCreateModal"><i
            class="fas fa-download fa-sm text-white-50"></i> Nueva Factura</a>
            @endsection
                


               @section('titulo')
               Facturas
               @endsection
@section('tabla')
                    <!-- Tabla con los datos de facturas -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>nroFactura</th>
                                            <th>idLote</th>
                                            <th>Valor</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($facturas as $factura)
                                        <tr>
                                            <td>{{ $factura-> nroFactura}}</td>
                                            <td>{{ $factura-> idLote}}</td>
                                            <td>{{$factura->valor}}</td>
 
                                            <td class=" bg-gray-200" style="padding-left: 1.75rem;">
                                                <div class="row">

                                                    <a href="#" class="btn btn-success btn-circle btn-sm editar" data-id="{{ $factura-> nroFactura}}" data-toggle="modal" data-target="#editCreateModal">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-warning btn-circle btn-sm detalle" data-id="{{ $factura-> nroFactura}}" data-toggle="modal" data-target="#detallesModal">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm eliminar" data-id="{{ $factura-> nroFactura}}" data-toggle="modal" data-target="#eliminarModal">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                {!! $facturas->links() !!} <!--Muestra la paginación -->
                            </div>
                        </div>
                    </div>
                    
                   
@endsection
        

    <!-- Botón ir arriba de la página -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!--  Modal Logout-->
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
                    <a class="btn btn-primary" href="{{ route('login') }}">Salir</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Crear Editar-->
    <div class="modal fade" id="editCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Factura</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--         campos              -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Datos de la Factura</h1>
                        </div>
                        <form class="user" action="{{ route('facturas.store') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        <input type="hidden" name="operacion" value=""></input>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtnrofactura">Número Factura</label>
                                    <input type="number" class="form-control form-control-user"  id="txtnrofactura" maxlength="15" name="txtnrofactura" placeholder="Número Factura" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtidLote">Id Lote</label>
                                    <input type="text" class="form-control form-control-user"  id="txtidLote"  name="txtidLote" placeholder="Id Lote">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtValor">Valor</label>
                                <input type="text" class="form-control form-control-user"  id="txtValor"  name="txtValor" placeholder="Valor FActura" >
                            </div>

                            <button type="submit" id="btnguardar" class="btn btn-primary btn-user btn-block" >
                            Guardar
                            </button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ver Detalles del factura</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--         campos              -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Datos de la Factura</h1>
                        </div>
                        <form class="user">
                            <div class="form-group">
                                <div class="">
                                    <label for="txtnrofacturadetalles">Número de Factura</label>
                                    <input type="text" class="form-control form-control-user"  id="txtnrofacturadetalles"  name="txtnrofacturadetalles" placeholder="Número de Factura" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtidLotedetalles">Id Lote</label>
                                    <input type="text" class="form-control form-control-user"  id="txtidLotedetalles"  name="txtidLotedetalles" placeholder="Id Lote" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtcolordetalles">Color</label>
                                    <input type="text" class="form-control form-control-user"  id="txtcolordetalles"  name="txtcolordetalles" placeholder="Color" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtcantidadxxsdetalles">XXS</label>
                                    <input type="text" class="form-control form-control-user"  id="txtcantidadxxsdetalles"  name="txtcantidadxxsdetalles" placeholder="0" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtcantidadxsdetalles">XS</label>
                                    <input type="text" class="form-control form-control-user"  id="txtcantidadxsdetalles"  name="txtcantidadxsdetalles" placeholder="0" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtcantidadsdetalles">S</label>
                                    <input type="text" class="form-control form-control-user"  id="txtcantidadsdetalles"  name="txtcantidadsdetalles" placeholder="0" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtcantidadmdetalles">M</label>
                                    <input type="text" class="form-control form-control-user"  id="txtcantidadmdetalles"  name="txtcantidadmdetalles" placeholder="0" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtcantidadldetalles">L</label>
                                    <input type="text" class="form-control form-control-user"  id="txtcantidadldetalles"  name="txtcantidadldetalles" placeholder="0" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtcantidadxldetalles">XL</label>
                                    <input type="text" class="form-control form-control-user"  id="txtcantidadxldetalles"  name="txtcantidadxldetalles" placeholder="0" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtcantidad2xldetalles">2XL</label>
                                    <input type="text" class="form-control form-control-user"  id="txtcantidad2xldetalles"  name="txtcantidad2xldetalles" placeholder="0" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtcantidad3xldetalles">3XL</label>
                                    <input type="text" class="form-control form-control-user"  id="txtcantidad3xldetalles"  name="txtcantidad3xldetalles" placeholder="0" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txttotaldetalles">Total</label>
                                <input type="text" class="form-control form-control-user"  id="txttotaldetalles"  name="txttotaldetalles" placeholder="Total Prendas" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label for="txtValordetalles">Valor</label>
                                <input type="text" class="form-control form-control-user"  id="txtValordetalles"  name="txtValordetalles" placeholder="Valor Factura" readonly="readonly">
                            </div>

                            

                            <button class="btn btn-primary btn-user btn-block" id="btn-cerrar" type="button" data-dismiss="modal">Cerrar Detalles</button>

                        </form>
                    </div>
                    <!--         campos              -->
                </div>
                <!--<div class="modal-footer">
                </div>-->
            </div>
        </div>
    </div>


    <!-- Modal Eliminar Factura-->
    <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Realmente quieres eliminar el factura?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Eliminar Factura" a continuación si deseas borrar el factura.</div>
                <div class="modal-footer">
                <form class="user" action="{{ route('facturas.eliminar') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        
                        <input type="hidden" class="form-control form-control-user"  id="txtnrofacturaeliminar"  name="txtnrofacturaeliminar" placeholder="Nit" value="89456156788-2" readonly="readonly">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="botoneliminar"  >Eliminar Factura</button>
                </form>
                </div>
            </div>
        </div>
    </div>


@section('scripting')
    <script>
    $(document).ready(function() {

        /* cuando se presiona el botón de nuevo factura */
        $('#nuevofactura').click(function() {
            $('#btnguardar').val("crear-factura");
            $('#factura').trigger("reset");
           $('operacion').val("crear");
            $('#crud-modal').modal('show');
            $('#txtnrofactura').prop('readonly', '');
        });

        /* Editar factura */
        $('body').on('click', '.editar', function() {
            var factura_id = $(this).data('id');
            
            $.get('facturas/' + factura_id + '/edit', function(data) {
                $('#operacion').val("editar");
                $('#btn-update').val("Update");
                $('#btn-save').prop('disabled', false);
                $('#btn-save').prop('hidden', false);
                $('#txtnrofactura').val(data.nroFactura);	
                $('#txtidLote').val(data.nombreFactura);	
                $('#txtValor').val(data.direccion);
                $('#txtTelefono').val(data.telefono);
                $('#txtidLotePersonaCargo').val(data.encargadoFactura);
                $('#txtnrofactura').prop('readonly', 'readonly');
                $('#txtidLote').prop('readonly', '');
                $('#txtValor').prop('readonly', '');
                $('#txtTelofono').prop('readonly', '');
                $('#txtidLotePersonaCargo').prop('readonly', '');
                $('#crud-modal').modal('show');
            })
        });
        /* Mostrar factura*/
        $('body').on('click', '.detalle', function() {
            var factura_id = $(this).data('id');
            $.get('facturas/' + factura_id + '/show', function(data) {
                $('#detallesModal').modal('show');
                $('#txtnrofacturadetalles').val(data.nroFactura);	
                $('#txtidLotedetalles').val(data.nombreFactura);	
                $('#txtValordetalles').val(data.direccion);
                $('#txtTelefonodetalles').val(data.telefono);
                $('#txtidLotePersonaCargodetalles').val(data.encargadoFactura);
                $('#txtnrofacturadetalles').prop('readonly', 'readonly');
                $('#txtidLotedetalles').prop('readonly', 'readonly');
                $('#txtValordetalles').prop('readonly', 'readonly');
                $('#txtTelefonodetalles').prop('readonly', 'readonly');
                $('#txtidLotePersonaCargodetalles').prop('readonly', 'readonly');
            })
        });

        /* Elinimar factura */
        $('body').on('click', '.eliminar', function() {
            var factura_id = $(this).data("id");
 
            $('#txtnrofacturaeliminar').val(factura_id);


        });
    });
</script>

@endsection