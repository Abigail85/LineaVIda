<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Confecciones Línea de Vida</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.html">
                <div class="sidebar-brand-icon rotate-n-10">
                    <!--<i class="fas fa-laugh-wink"></i>-->
                    <img src="../img/logo.png" alt="" height="40px">
                </div>
                <div class="sidebar-brand-text mx-3">Confecciones Línea de Vida <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="lotes.html" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Lotes</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Entrada de lote:</h6>
                        <a class="collapse-item" href="lotes.html">Gestionar Ingreso de Lotes</a>

                    </div>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Salida de lote:</h6>
                        <a class="collapse-item" href="salidalotes.html">Gestionar Salida de Lotes</a>

                    </div>
                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Facturas</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Facturas:</h6>
                        <a class="collapse-item" href="facturas.html">Gestionar Facturas</a>

                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Proveedores</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Proveedores:</h6>
                        <a class="collapse-item" href="proveedores.html">Gestionar Proveedores</a>

                    </div>
                </div>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Usuario</span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile_3.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Mi Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Configuración
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#crearModal"><i
            class="fas fa-download fa-sm text-white-50"></i> Nuevo Lote Saliente</a>
                    </div>


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Salida de Lotes</h1>

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
                                            <th>Referencia</th>
                                            <th>Descripción</th>
                                            <th>Cantidad por talla</th>
                                            <th>Cantidad total</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>E858848Z</td>
                                            <td>Manga larga</td>
                                            <td>120</td>
                                            <td>120</td>
                                            <td>120</td>
                                            <td>2400000</td>
                                            <td>
                                                <div class="row">

                                                    <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#editModal">
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

                                        <tr>
                                            <td>E858848Z</td>
                                            <td>Manga larga</td>
                                            <td>120</td>
                                            <td>120</td>
                                            <td>120</td>
                                            <td>2400000</td>
                                            <td>
                                                <div class="row">

                                                    <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#editModal">
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

                                        <tr>
                                            <td>E858848Z</td>
                                            <td>Manga larga</td>
                                            <td>120</td>
                                            <td>120</td>
                                            <td>120</td>
                                            <td>2400000</td>
                                            <td>
                                                <div class="row">

                                                    <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#editModal">
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

                                        <tr>
                                            <td>E858848Z</td>
                                            <td>Manga larga</td>
                                            <td>120</td>
                                            <td>120</td>
                                            <td>120</td>
                                            <td>2400000</td>
                                            <td>
                                                <div class="row">

                                                    <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#editModal">
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



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Confecciones Línea de Vida S.A. 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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


    <!-- Modal Editar-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar lote</h5>
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
                                    <label for="txtReferencia">Referencia</label>
                                    <input type="text" class="form-control form-control-user" id="txtReferencia" placeholder="Referencia" value="E858848Z">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtDescripcion">Descripcion</label>
                                    <input type="text" class="form-control form-control-user" id="txtDescripcion" placeholder="Descripcion" value="Manga larga">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtcantidadporcolor">Cantidad por color</label>
                                <input type="number" class="form-control form-control-user" id="txtcantidadporcolor" placeholder="0.0" value="120">
                            </div>
                            <div class="form-group">
                                <label for="txtcantidadportalla">Cantidad por talla</label>
                                <input type="number" class="form-control form-control-user" id="txtcantidadportalla" placeholder="0.0" value="120">
                                <label for="txttotal">Total</label>
                                <input type="number" class="form-control form-control-user" id="txttotal" placeholder="0" value="120">
                                <label for="txtvalor">Valor</label>
                                <input type="number" class="form-control form-control-user" id="txttotal" placeholder="0.0" value="2400000">
                            </div>


                            <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Actualizar
                            </a>
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

    <!-- Modal Crear Nuevo Lote-->
    <div class="modal fade" id="crearModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo lote</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--         campos              -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Ingresa el Lote</h1>
                        </div>
                        <form class="user">
                            <div class="form-group">
                                <div class="">
                                    <label for="txtReferencia">Referencia</label>
                                    <input type="text" class="form-control form-control-user" id="txtReferencia" placeholder="Referencia">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtDescripcion">Descripcion</label>
                                    <input type="text" class="form-control form-control-user" id="txtDescripcion" placeholder="Descripcion">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtcantidadporcolor">Cantidad por color</label>
                                <input type="number" class="form-control form-control-user" id="txtcantidadporcolor" placeholder="120">
                            </div>
                            <div class="form-group">
                                <label for="txtcantidadportalla">Cantidad por talla</label>
                                <input type="number" class="form-control form-control-user" id="txtcantidadportalla" placeholder="120">
                                <label for="txttotal">Total</label>
                                <input type="number" class="form-control form-control-user" id="txttotal" placeholder="120">
                                <label for="txtvalor">Valor</label>
                                <input type="number" class="form-control form-control-user" id="txtvalor" placeholder="2400000">
                            </div>

                            <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Guardar
                            </a>
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
                                    <label for="txtReferencia">Referencia</label>
                                    <input type="text" class="form-control form-control-user" id="txtReferencia" placeholder="Referencia" value="E858848Z" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="txtDescripcion">Descripcion</label>
                                    <input type="text" class="form-control form-control-user" id="txtDescripcion" placeholder="Descripcion" value="Manga larga" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtcantidadporcolor">Cantidad por color</label>
                                <input type="number" class="form-control form-control-user" id="txtcantidadporcolor" placeholder="0.0" value="120" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label for="txtcantidadportalla">Cantidad por talla</label>
                                <input type="number" class="form-control form-control-user" id="txtcantidadportalla" placeholder="0.0" value="120" readonly="readonly">
                                <label for="txttotal">Total</label>
                                <input type="number" class="form-control form-control-user" id="txttotal" placeholder="0.0" value="120" readonly="readonly">
                                <label for="txtvalor">Valor</label>
                                <input type="number" class="form-control form-control-user" id="txtvalor" placeholder="0.0" value="2400000" readonly="readonly">
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





    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>