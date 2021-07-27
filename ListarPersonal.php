<?php


$conn= mysqli_connect("localhost","root","","farmacia") or trigger_error(mysqli_error($conn), E_USER_ERROR);
mysqli_query($conn,"SET NAMES 'UTF8'" ) ;
 
$sql = "SELECT * FROM personal";
$resultado = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>FARMACY</title>

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <!-- Bootstrap DatePicker Css -->
    <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <!-- Wait Me Css -->
    <link href="plugins/waitme/waitMe.css" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/themes/all-themes.css" rel="stylesheet" />


</head>

<body class="theme-red">
     <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Cargando...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- LUPA -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons"></i>
        </div>
        <input type="text" placeholder="Buscar...">
        <div class="close-search">
            <i class="material-icons">X</i>
        </div>
    </div>
    <!-- //LUPA -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html"> Farmacy - DASHBOARD </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->

    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/Usuario11.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Walter Benitez</div>
                    <div class="email">willbloodgames@gmail.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="Configuraciones.html"><i class="material-icons">brightness_low</i>Mi Cuenta</a></li>
                            <li role="separator" class="divider"></li>
                            <li role="separator" class="divider"></li>

                            <li><a href="Login.html"><i class="material-icons">input</i>Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->


            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENÚ DE NAVEGACIÓN</li>
                    <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>INICIO</span>
                        </a>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">shopping_basket</i>
                            <span>PRODUCTOS</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="RegistrarProd.php">Registrar</a>
                            </li>
                            <li>
                                <a href="ListarProd.php">Listar / Modificar</a>
                            </li>
                        </ul>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">low_priority</i>
                            <span>CATEGORÍAS</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="RegistrarCat.php">Registrar</a>
                            </li>
                            <li>
                                <a href="ListarCat.php">Listar / Modificar</a>
                            </li>
                        </ul>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>CLIENTES</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="RegistrarClientes.php">Registrar</a>
                            </li>
                            <li>
                                <a href="ListarClientes.php">Listar / Modificar</a>
                            </li>
                        </ul>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">monetization_on</i>
                            <span>FACTURACIÓN</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Crear Factura</a>
                            </li>
                        </ul>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">business</i>
                            <span>PROVEEDORES</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="RegistrarProv.php">Registrar</a>
                            </li>
                            <li>
                                <a href="ListarProv.php">Listar / Modificar</a>
                            </li>
                        </ul>
                    </li>
<!--======================================================================================================-->
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person_pin</i>
                            <span>PERSONAL</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="RegistrarPersonal.php">Registrar</a>
                            </li>
                            <li class="active">
                                <a href="ListarPersonal.php">Listar / Modificar</a>
                            </li>
                        </ul>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="Seleccion.html">
                            <i class="material-icons">trending_up</i>
                            <span>REPORTES</span>
                        </a>
                    </li>
<!--======================================================================================================-->
        <aside id="rightsidebar" class="right-sidebar">
        </aside>
    </section>



<!--=============================================================CONTENIDO DE LA PÁGINA =============================================================-->
     <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listado de Clientes
                                <!--<small>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</small>-->
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>CÉDULA</th>
                                        <th>TELÉFONO</th>
                                        <th>NOMBRES</th>
                                        <th>APELLIDOS</th>
                                        <th>DIRECCIÓN</th>
                                        <th>E-MAIL</th>
                                        <th>ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        while ($filas=mysqli_fetch_array($resultado)){
                                            ?>

                                        <td><?php echo $filas['IdPer'] ?></td>
                                        <td><?php echo $filas['TelPer'] ?></td>
                                        <td><?php echo $filas['NomPer'] ?></td>
                                        <td><?php echo $filas['ApePer'] ?></td>
                                        <td><?php echo $filas['DirPer'] ?></td>
                                        <td><?php echo $filas['Email'] ?></td>
                                        <td>
                                            <a type="button" href="ActualizarPersonal.php" class="btn bg-blue btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">autorenew</i>
                                            </a>
                                            <a type="button" href="#" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                        ?>

                                    <!--<tr>
                                        <td>0712352130</td>
                                        <td>Carla  Andrea</td>
                                        <td>Cevallos Durán</td>
                                        <td>0991231231</td>
                                        <td>Machala</td>
                                        <td>Muy Guapa</td>
                                        <td>
                                            <a type="button" href="ActualizarPersonal.html" class="btn bg-blue btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">autorenew</i>
                                            </a>
                                            <a type="button" href="#" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=============================================================FIN DE LA PÁGINA =============================================================-->


    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>
    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>
    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/basic-form-elements.js"></script>
    <!-- Demo Js -->
    <script src="js/demo.js"></script>

</body>
</html>