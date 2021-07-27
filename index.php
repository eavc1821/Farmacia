
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>FARMACY</title>
    <!-- Google Font - Iconos -->
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
                <a class="navbar-brand" href="index.php"> Farmacy - DASHBOARD </a>
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

                            <li><a href="login.php"><i class="material-icons">input</i>Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->


            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENÚ DE NAVEGACIÓN</li>
                    <li class="active">
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
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person_pin</i>
                            <span>PERSONAL</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="RegistrarPersonal.php">Registrar</a>
                            </li>
                            <li>
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
            <div class="block-header">
               <span> <i class="material-icons">home</i> INICIO</span>
            </div>

            <!-- SubMenu1 -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">

                    	<a href="RegistrarProd.php">
                        	<div class="icon">
                            	<i class="material-icons">shopping_basket</i>
                        	</div>
                        </a>
                        	<div class="content">
                            	<div class="text">PRODUCTOS</div>
                            <div class="number count-to" data-from="0" data-to="5000" data-speed="1000" data-fresh-interval="20"></div>
                        	</div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                    	<a href="RegistrarCat.php">
                        	<div class="icon">
                            	<i class="material-icons">low_priority</i>
                        	</div>
                    	</a>
                        <div class="content">
                            <div class="text">CATEGORÍAS</div>
                            <div class="number count-to" data-from="0" data-to="50" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                    	<a href="RegistrarClientes.php">
                        <div class="icon">
                            <i class="material-icons">supervisor_account</i>
                        </div>
                        </a>
                        <div class="content">
                            <div class="text">CLIENTES</div>
                            <div class="number count-to" data-from="0" data-to="675" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                    	<a href="#">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        </a>
                        <div class="content">
                            <div class="text">FACTURACIÓN</div>
                            <div class="number count-to" data-from="0" data-to="800" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>

<!-- SubMenu2 -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                    	<a href="RegistrarProv.php">
                        <div class="icon">
                            <i class="material-icons">business</i>
                        </div>
                    	</a>
                        <div class="content">
                            <div class="text">PROVEEDORES</div>
                            <div class="number count-to" data-from="0" data-to="29" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                    	<a href="RegistrarPersonal.php">
                        <div class="icon">
                            <i class="material-icons">person_pin</i>
                        </div>
                        </a>
                        <div class="content">
                            <div class="text">PERSONAL</div>
                            <div class="number count-to" data-from="0" data-to="12" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                    	<a href="Seleccion.html">
                        <div class="icon">
                            <i class="material-icons">trending_up</i>
                        </div>
                        </a>
                        <div class="content">
                            <div class="text">REPORTES</div>
                            <div class="number count-to" data-from="0" data-to="6" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>



				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
						<a href="Configuraciones.html">
                        <div class="icon bg-purple">
                            <i class="material-icons">brightness_low</i>
                        </div>
						</a>
                        <div class="content">
                            <div class="text">MI CUENTA</div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- CPU Uso -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>USO DEL CPU (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">En Tiempo Real</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Uso -->
        </div>
    </section>
<!--=============================================================CONTENIDO DE LA PÁGINA =============================================================-->


    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Js Booststrap -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!--Js Scroll - Barra de Desplazamiento del Menú -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!--Js Efectos de Página Completa -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- JS Conteo de Números del SubMenú-->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- JS CPU % -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>


</body>

</html>
