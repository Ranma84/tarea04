<?php 
    $this->load->view('partes/head'); ?> 
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">estudiantes</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">estudiantes</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= site_url('asset/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= site_url('asset/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?= site_url('asset/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?= site_url();?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Asignatura</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?= site_url('asignatura/add');?>"><i class="fa fa-plus"></i> Añadir</a>
                                </li>
								<li>
                                    <a href="<?= site_url('asignatura/index');?>"><i class="fa fa-list-ul"></i> Lista</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Asignaturas Estudiante</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?= site_url('asignaturas_estudiante/add');?>"><i class="fa fa-plus"></i> Añadir</a>
                                </li>
								<li>
                                    <a href="<?= site_url('asignaturas_estudiante/index');?>"><i class="fa fa-list-ul"></i> Lista</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Lugare</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?= site_url('lugare/add');?>"><i class="fa fa-plus"></i> Añadir</a>
                                </li>
								<li>
                                    <a href="<?= site_url('lugare/index');?>"><i class="fa fa-list-ul"></i> Lista</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Nota</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?= site_url('nota/add');?>"><i class="fa fa-plus"></i> Añadir</a>
                                </li>
								<li>
                                    <a href="<?= site_url('nota/index');?>"><i class="fa fa-list-ul"></i> Lista</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Usuario</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?= site_url('usuario/add');?>"><i class="fa fa-plus"></i> Añadir</a>
                                </li>
								<li>
                                    <a href="<?= site_url('usuario/index');?>"><i class="fa fa-list-ul"></i> Lista</a>
                                </li>
							</ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Login</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?= site_url('login');?>"><i class="fa fa-plus"></i> Login</a>
                                </li>
							</ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Generador por <a href="#">Grupo 5</a> UB</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
<?php 
        $this->load->view('partes/footer');