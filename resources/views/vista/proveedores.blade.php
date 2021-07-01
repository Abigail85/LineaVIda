@extends('vista.plantilla')
            @section('linkboton')
                        <a href="javascript:void(0)" id="nuevoproveedor" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#crearModal"><i
            class="fas fa-download fa-sm text-white-50"></i> Nuevo Proveedor</a>
            @endsection
                


               @section('titulo')
               Proveedores
               @endsection
@section('tabla')
                    <!-- Tabla con los datos de proveedores -->
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
                                            <th>Nombre</th>
                                            <th>Dirección</th>
                                            <th>Teléfono</th>
                                            <th>Encargada de Producción</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($proveedores as $proveedor)
                                        <tr>
                                            <td>{{ $proveedor-> idNitProveedor}}</td>
                                            <td>{{ $proveedor-> nombreProveedor}}</td>
                                            <td>{{$proveedor->direccion}}</td>
                                            <td>{{$proveedor->telefono}}</td>
                                            <td>{{$proveedor->encargadoProveedor}}</td>
                                            <td class=" bg-gray-200" style="padding-left: 1.75rem;">
                                                <div class="row">

                                                    <a href="#" class="btn btn-success btn-circle btn-sm editar" data-id="{{ $proveedor-> idNitProveedor}}" data-toggle="modal" data-target="#editModal">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-warning btn-circle btn-sm detalle" data-id="{{ $proveedor-> idNitProveedor}}" data-toggle="modal" data-target="#detallesModal">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm eliminar" data-id="{{ $proveedor-> idNitProveedor}}" data-toggle="modal" data-target="#eliminarModal">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                {!! $proveedores->links() !!} <!--Muestra la paginación -->
                            </div>
                        </div>
                    </div>
                    
                   
@endsection
        

    <!-- Botón ir arriba de la página -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>




    <!-- Modal Editar-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Proveedor</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--         campos              -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Datos del Proveedor</h1>
                        </div>
                        <form class="user" action="{{ route('proveedores.store') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        <input type="hidden" name="operacion" value="editar"></input>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtnit">Nit</label>
                                    <input type="number" class="form-control form-control-user"  id="txtnit" maxlength="15" name="txtnit" placeholder="Nit" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtNombre">Nombre</label>
                                    <input type="text" class="form-control form-control-user"  id="txtNombre"  name="txtNombre" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDireccion">Direccion</label>
                                <input type="text" class="form-control form-control-user"  id="txtDireccion"  name="txtDireccion" placeholder="Dirección" >
                            </div>

                            <div class="form-group">

                                <label for="txtTelefono">Teléfono</label>
                                <input type="number" class="form-control form-control-user"  id="txtTelefono"  name="txtTelefono" placeholder="Teléfono" >

                            </div>
                            <div class="form-group">

                                <label for="txtNombrePersonaCargo">Encargada de Producción</label>
                                <input type="text" class="form-control form-control-user"  id="txtNombrePersonaCargo"  name="txtNombrePersonaCargo" placeholder="Nombre" >

                            </div>

                            <button type="submit" id="btnguardar" class="btn btn-primary btn-user btn-block" >
                            Actualizar
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

    <!-- Modal Crear Nuevo Proveedor-->

    <div class="modal fade" id="crearModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--         campos              -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Ingresa el Proveedor</h1>
                        </div>
                        <form class="user" id="crearproveedor" action="{{ route('proveedores.store') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        <input type="hidden" name="operacion" value="crear"></input>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtnit">Nit</label>
                                    <input type="number" class="form-control form-control-user"  id="txtnit" maxlength="15" name="txtnit" placeholder="Nit">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtNombre">Nombre</label>
                                    <input type="text" class="form-control form-control-user"  id="txtNombre"  name="txtNombre" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDireccion">Direccion</label>
                                <input type="text" class="form-control form-control-user"  id="txtDireccion"  name="txtDireccion" placeholder="Dirección">
                            </div>

                            <div class="form-group">

                                <label for="txtTelefono">Teléfono</label>
                                <input type="number" class="form-control form-control-user"  id="txtTelefono"  name="txtTelefono" placeholder="Teléfono">

                            </div>
                            <div class="form-group">

                                <label for="txtNombrePersonaCargo">Nombre encargada de producción</label>
                                <input type="text" class="form-control form-control-user"  id="txtNombrePersonaCargo"  name="txtNombrePersonaCargo" placeholder="Nombre">

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
                    <h5 class="modal-title" id="exampleModalLabel">Ver Detalles del proveedor</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--         campos              -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Datos del Proveedor</h1>
                        </div>
                        <form class="user">
                            <div class="form-group">
                                <div class="">
                                    <label for="txtnitdetalles">Nit</label>
                                    <input type="text" class="form-control form-control-user"  id="txtnitdetalles"  name="txtnitdetalles" placeholder="Nit" value="89456156788-2" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtNombredetalles">Nombre</label>
                                    <input type="text" class="form-control form-control-user"  id="txtNombredetalles"  name="txtNombredetalles" placeholder="Nombre" value="Coltejer" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDirecciondetalles">Direccion</label>
                                <input type="text" class="form-control form-control-user"  id="txtDirecciondetalles"  name="txtDirecciondetalles" placeholder="Dirección" value="Cl. 52 #42, Medellín, Antioquia" readonly="readonly">
                            </div>

                            <div class="form-group">

                                <label for="txtTelefonodetalles">Teléfono</label>
                                <input type="text" class="form-control form-control-user"  id="txtTelefonodetalles"  name="txtTelefonodetalles" placeholder="Teléfono" value="(574) 375 75 00" readonly="readonly">

                            </div>
                            <div class="form-group">

                                <label for="txtNombrePersonaCargodetalles">Nombre de la encargada de producción</label>
                                <input type="text" class="form-control form-control-user"  id="txtNombrePersonaCargodetalles"  name="txtNombrePersonaCargodetalles" placeholder="Nombre" value="Isabel" readonly="readonly">

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


    <!-- Modal Eliminar Proveedor-->
    <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Realmente quieres eliminar el proveedor?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Eliminar Proveedor" a continuación si deseas borrar el proveedor.</div>
                <div class="modal-footer">
                <form class="user" action="{{ route('proveedores.eliminar') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        
                        <input type="hidden" class="form-control form-control-user"  id="txtniteliminar"  name="txtniteliminar" placeholder="Nit" value="89456156788-2" readonly="readonly">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="botoneliminar"  >Eliminar Proveedor</button>
                </form>
                </div>
            </div>
        </div>
    </div>


@section('scripting')
    <script>
    $(document).ready(function() {

        /* cuando se presiona el botón de nuevo proveedor */
        $('#nuevoproveedor').click(function() {
            $('#btnguardar').val("crear-proveedor");
            $('#proveedor').trigger("reset");
           $('operacion').val("crear");
            $('#crud-modal').modal('show');
            $('#txtnit').prop('readonly', '');
        });

        /* Editar proveedor */
        $('body').on('click', '.editar', function() {
            var proveedor_id = $(this).data('id');
            
            $.get('proveedores/' + proveedor_id + '/edit', function(data) {
                $('#operacion').val("editar");
                $('#btn-update').val("Update");
                $('#btn-save').prop('disabled', false);
                $('#btn-save').prop('hidden', false);
                $('#txtnit').val(data.idNitProveedor);	
                $('#txtNombre').val(data.nombreProveedor);	
                $('#txtDireccion').val(data.direccion);
                $('#txtTelefono').val(data.telefono);
                $('#txtNombrePersonaCargo').val(data.encargadoProveedor);
                $('#txtnit').prop('readonly', 'readonly');
                $('#txtNombre').prop('readonly', '');
                $('#txtDireccion').prop('readonly', '');
                $('#txtTelofono').prop('readonly', '');
                $('#txtNombrePersonaCargo').prop('readonly', '');
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