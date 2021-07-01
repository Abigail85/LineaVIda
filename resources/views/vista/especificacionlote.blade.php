@extends('vista.plantilla')
@section('linkboton')
<a href="javascript:void(0)" id="nuevaespecificacionlote" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#crearEditarModal"><i class="fas fa-download fa-sm text-white-50"></i> Nueva Especificación</a>
@endsection



@section('titulo')
Especificaciones de Lote
@endsection
@section('tabla')
<!-- Tabla con los datos de especificacionlotes -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>


                        <th>idEspecificacionLote</th>
                        <th>idLote</th>
                        <th>Color</th>
                        <th>XXS</th>
                        <th>XS</th>
                        <th>S</th>
                        <th>M</th>
                        <th>L</th>
                        <th>XL</th>
                        <th>2XL</th>
                        <th>3XL</th>
                        <th>Cantidad Total</th>
                    </tr> 
                </thead>

                <tbody>
                    @foreach($especificacionlotes as $especificacionlote)
                    <tr>
                        <td>{{ $especificacionlote-> idEspecificacionLote}}</td>
                        <td>{{ $especificacionlote-> idLote}}</td>
                        <td>{{$especificacionlote->color()->getresults()->color}}</td>
                        <td>{{$especificacionlote->cantidadxxs}}</td>
                        <td>{{$especificacionlote->cantidadxs}}</td>
                        <td>{{$especificacionlote->cantidads}}</td>
                        <td>{{$especificacionlote->cantidadm}}</td>
                        <td>{{$especificacionlote->cantidadl}}</td>
                        <td>{{$especificacionlote->cantidadxl}}</td>
                        <td>{{$especificacionlote->cantidad2xl}}</td>
                        <td>{{$especificacionlote->cantidad3xl}}</td>
                        <td>{{$especificacionlote->cantidadxxs +
$especificacionlote->cantidadxs +
$especificacionlote->cantidads +
$especificacionlote->cantidadm +
$especificacionlote->cantidadl +
$especificacionlote->cantidadxl +
$especificacionlote->cantidad2xl +
$especificacionlote->cantidad3xl}}</td>
                        <td class=" bg-gray-200" style="padding-left: 1.75rem;">
                            <div class="row">

                                <a href="#" class="btn btn-success btn-circle btn-sm editar" data-id="{{ $especificacionlote-> idEspecificacionLote}}" data-toggle="modal" data-target="#crearEditarModal">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-circle btn-sm detalle" data-id="{{ $especificacionlote-> idEspecificacionLote}}" data-toggle="modal" data-target="#detallesModal">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle btn-sm eliminar" data-id="{{ $especificacionlote-> idEspecificacionLote}}" data-toggle="modal" data-target="#eliminarModal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $especificacionlotes->links() !!}
            <!--Muestra la paginación -->
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



<!-- Modal Crear Editar Nueva Especificación-->
<!-- 
                        idEspecificacionLotetxt
                        idLoteselect
                        Colorselect
                        XXStxt
                        XStxt
                        Stxt
                        Mtxt
                        Ltxt
                        XLtxt
                        2XLtxt
                        3XLtxt
 -->


<div class="modal fade" id="crearEditarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Especificación</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!--         campos              -->
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Ingresa La Especificación</h1>
                    </div>
                    <form class="user" id="crearespecificacionlote" action="{{ route('especificacionlotes.store') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        <input type="hidden" id='operacion' name="operacion" value=""></input>
                        <div class="form-group">
                            <div class="">
                                <label for="idEspecificacionLotetxt">Id Especificación</label>
                                <input type="text" class="form-control form-control-user" id="idEspecificacionLotetxt" maxlength="15" name="idEspecificacionLotetxt" placeholder="Id Especificación" readonly>
                            </div>
                        </div>


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="idLoteselect">Id Lote:</label>
                            </div>
                            <select class="custom-select  " id="idLoteselect" name="idLoteselect">
                                @foreach($lotes as $lote)
                                <option value="{{$lote->idLote}}">{{$lote->idLote}}</option>
                                @endforeach
                            </select>
                        </div>
                        

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Colorselect">Color:</label>
                            </div>
                            <select class="custom-select  " id="Colorselect" name="Colorselect">
                                @foreach($colores as $color)
                                <option value="{{$color->idColor}}">{{$color->color}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <label for="cantidadXXStxt">Cantidad XXS:</label>
                                <input type="number" class="form-control form-control-user" id="cantidadXXStxt" name="cantidadXXStxt" placeholder="Cantidad XXS" value="0" min="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <label for="cantidadXStxt">Cantidad XS:</label>
                                <input type="number" class="form-control form-control-user" id="cantidadXStxt" name="cantidadXStxt" placeholder="Cantidad XS" value="0" min="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <label for="cantidadStxt">Cantidad S:</label>
                                <input type="number" class="form-control form-control-user" id="cantidadStxt" name="cantidadStxt" placeholder="Cantidad S" value="0" min="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <label for="cantidadMtxt">Cantidad M:</label>
                                <input type="number" class="form-control form-control-user" id="cantidadMtxt" name="cantidadMtxt" placeholder="Cantidad M" value="0" min="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <label for="cantidadLtxt">Cantidad L:</label>
                                <input type="number" class="form-control form-control-user" id="cantidadLtxt" name="cantidadLtxt" placeholder="Cantidad L" value="0" min="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <label for="cantidadXLtxt">Cantidad XL:</label>
                                <input type="number" class="form-control form-control-user" id="cantidadXLtxt" name="cantidadXLtxt" placeholder="Cantidad XL" value="0" min="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <label for="cantidad2XLtxt">Cantidad 2XL:</label>
                                <input type="number" class="form-control form-control-user" id="cantidad2XLtxt" name="cantidad2XLtxt" placeholder="Cantidad 2XL" value="0" min="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <label for="cantidad3XLtxt">Cantidad 3XL:</label>
                                <input type="number" class="form-control form-control-user" id="cantidad3XLtxt" name="cantidad3XLtxt" placeholder="Cantidad 3XL" value="0" min="0">
                            </div>
                        </div>
                        

                        <button type="submit" id="btnguardar" class="btn btn-primary btn-user btn-block">
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
                <h5 class="modal-title" id="exampleModalLabel">Ver Detalles del especificacionlote</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!--         campos              -->
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Datos del Especificación</h1>
                    </div>
                    <form class="user">
                        <div class="form-group">
                            <div class="">
                                <label for="txtdetalleidEspecificacionLote">Id Especificación:</label>
                                <input type="text" class="form-control form-control-user" id="txtdetalleidEspecificacionLote" name="txtdetalleidEspecificacionLote" placeholder="Id especificación lote" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtdetalleidLote">Id Lote:</label>
                                <input type="text" class="form-control form-control-user" id="txtdetalleidLote" name="txtdetalleidLote" placeholder="Id lote" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtdetalleColor">Id Color:</label>
                                <input type="text" class="form-control form-control-user" id="txtdetalleColor" name="txtdetalleColor" placeholder="Color" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtdetallecantidadxxs">Cantidad XXS:</label>
                                <input type="text" class="form-control form-control-user" id="txtdetallecantidadxxs" name="txtdetallecantidadxxs" placeholder="" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtdetallecantidadxs">Cantidad XS:</label>
                                <input type="text" class="form-control form-control-user" id="txtdetallecantidadxs" name="txtdetallecantidadxs" placeholder="" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtdetallecantidads">Cantidad S:</label>
                                <input type="text" class="form-control form-control-user" id="txtdetallecantidads" name="txtdetallecantidads" placeholder="" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtdetallecantidadm">Cantidad M:</label>
                                <input type="text" class="form-control form-control-user" id="txtdetallecantidadm" name="txtdetallecantidadm" placeholder="" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtdetallecantidadl">Cantidad L:</label>
                                <input type="text" class="form-control form-control-user" id="txtdetallecantidadl" name="txtdetallecantidadl" placeholder="" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtdetallecantidadxl">Cantidad XL:</label>
                                <input type="text" class="form-control form-control-user" id="txtdetallecantidadxl" name="txtdetallecantidadxl" placeholder="" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtdetallecantidad2xl">Cantidad 2XL:</label>
                                <input type="text" class="form-control form-control-user" id="txtdetallecantidad2xl" name="txtdetallecantidad2xl" placeholder="" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="txtdetallecantidad3xl">Cantidad 3XL:</label>
                                <input type="text" class="form-control form-control-user" id="txtdetallecantidad3xl" name="txtdetallecantidad3xl" placeholder="" value="" readonly="readonly">
                            </div>
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


<!-- Modal Eliminar Especificación-->
<div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Realmente quieres eliminar la especificacion de lote?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecciona "Eliminar Especificación" a continuación si deseas borrar la especificacion.</div>
            <div class="modal-footer">
                <form class="user" action="{{ route('especificacionlotes.eliminar') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>

                    <input type="hidden" class="form-control form-control-user" id="txtidespecificacioneliminar" name="txtidespecificacioneliminar" readonly="readonly">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="botoneliminar">Eliminar Especificación</button>
                </form>
            </div>
        </div>
    </div>
</div>


@section('scripting')
<script>
    $(document).ready(function() {


      /*actualiza valor de idLote del modal al cambiar el select idLoteSelect
      $('#idLoteselect').on('change', function() {
            $('').val($('#selectproveedor').val());
        });*/

        /* cuando se presiona el botón de nueva especificacionlote */
        $('#nuevaespecificacionlote').click(function() {
            $('#btnguardar').val("crear-especificacionlote");
            $('#especificacionlote').trigger("reset");
            $('#operacion').val("crear");
            $('#crud-modal').modal('show');
            $('#idEspecificacionLotetxt').prop('readonly', '');
        });

        /* Editar especificacionlote */
        $('body').on('click', '.editar', function() {
            var especificacionlote_id = $(this).data('id');
            $.get('especificacionlotes/' + especificacionlote_id + '/edit', function(data) {
                $('#operacion').val("editar");
                $('#btn-update').val("Update");
                $('#btn-save').prop('disabled', false);
                $('#btn-save').prop('hidden', false);
                $('#crud-modal').modal('show');


                $('#idEspecificacionLotetxt').val(data.idEspecificacionLote);
                $('#idLoteselect').val(data.idLote);
                $('#Colorselect').val(data.idColor);
                
                $('#cantidadXXStxt').val(data.cantidadxxs);
                $('#cantidadXStxt').val(data.cantidadxs);
                $('#cantidadStxt').val(data.cantidads);
                $('#cantidadMtxt').val(data.cantidadm);
                $('#cantidadLtxt').val(data.cantidadl);
                $('#cantidadXLtxt').val(data.cantidadxl);
                $('#cantidad2XLtxt').val(data.cantidad2xl);
                $('#cantidad3XLtxt').val(data.cantidad3xl);
                
                $('#idEspecificacionLotetxt').prop('readonly', 'readonly');
    
            })
        });
        /* Mostrar especificacionlote*/
        $('body').on('click', '.detalle', function() {
            var especificacionlote_id = $(this).data('id');
            $.get('especificacionlotes/' + especificacionlote_id + '/show', function(data) {
                $('#detallesModal').modal('show');
                $('#txtdetalleidEspecificacionLote').val(data.idEspecificacionLote);
                $('#txtdetalleidLote').val(data.idLote);
                $('#txtdetalleColor').val(data.idColor);
                $('#txtdetallecantidadxxs').val(data.cantidadxxs);
                $('#txtdetallecantidadxs').val(data.cantidadxs);
                $('#txtdetallecantidads').val(data.cantidads);
                $('#txtdetallecantidadm').val(data.cantidadm);
                $('#txtdetallecantidadl').val(data.cantidadl);
                $('#txtdetallecantidadxl').val(data.cantidadxl);
                $('#txtdetallecantidad2xl').val(data.cantidad2xl);
                $('#txtdetallecantidad3xl').val(data.cantidad3xl);

                /*
idEspecificacionLote
idLote
idColor
cantidadxxs
cantidadxs
cantidads
cantidadm
cantidadl
cantidadxl
cantidad2xl
cantidad3xl
*/

            })
        });

        /* Elinimar especificacionlote */
        $('body').on('click', '.eliminar', function() {
            var especificacionlote_id = $(this).data("id");

            $('#txtidespecificacioneliminar').val(especificacionlote_id);


        });
    });
</script>

@endsection