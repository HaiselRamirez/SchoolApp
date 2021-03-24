<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<meta name="description" content=" <?= app_desc ?>">
	<meta name="author" content="<?= app_author ?>">
	<title><?=$this->layout->getTitle();?></title>
	<!-- aqui van los css -->
 
	<link rel="stylesheet" href="<?=base_url();?>https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
	<link rel="stylesheet" href="<?=base_url();?>plugins/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/icon/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/icon/icofont/css/icofont.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/pages/flag-icon/flag-icon.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/pages/menu-search/css/component.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/pages/dashboard/horizontal-timeline/css/style.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/color/color-1.css" id="color" />
	<link rel="stylesheet" href="<?=base_url();?>assets/css/linearicons.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/ionicons.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/jquery.mCustomScrollbar.css">
</head>
<body>
	<div class="theme-loader">
		<div class="ball-scale">
			<div></div>
		</div>
	</div>
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			<!-- Menu superior -->
			<nav class="navbar header-navbar pcoded-header" header-theme="theme4">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a class="mobile-menu" id="mobile-collapse" href="#!"><i class="ti-menu"></i></a>
						<a href="Inicio">
							<img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
						</a>
						<a class="mobile-options"><i class="ti-more"></i></a>
					</div>
					<div class="navbar-container container-fluid">
						<div>
							<ul class="nav-left">
								<li>
									<div class="sidebar_toggle">
										<a href="javascript:void(0)"><i class="ti-menu"></i></a>
									</div>
								</li>
							</ul>
							<ul class="nav-right">
								<li class="user-profile header-notification">
									<a href="#!">
										<img src="<?=$this->session->userdata('user_foto'); ?>" alt="Usuario activo">
										<strong class="ml-2"><?= $this->session->userdata('user_usuario'); ?></strong>
										<i class="ti-angle-down"></i>
									</a>
									<ul class="show-notification profile-notification">
										<li><a href="#!"><i class="ti-settings"></i> Configuración</a></li>
										<li>
											<a href="usuario/perfil/<?=$this->session->userdata('user_id');?>">
												<i class="ti-user"></i> Perfil
											</a>
										</li>
										<li>
											<a href="#" onclick="cerrarSesion();">
												<i class="ti-lock"></i> Cerrar Sesión
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<hr class="bg-white my-0">
			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<!-- Barra lateral hizquierda -->
					<nav class="pcoded-navbar" pcoded-header-position="relative">
						<div class="sidebar_toggle">
							<a href="#">
								<i class="icon-close icons"></i>
							</a>
						</div>
						<div class="pcoded-inner-navbar main-menu">
							<br>
							<ul class="pcoded-item pcoded-left-item">
								<li class="">
									<a href="Inicio" data-i18n="nav.sample-page.main">
										<span class="pcoded-micon">
											<i class="ti-home"></i>
										</span>
										<span class="pcoded-mtext">Inicio</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
							</ul>
							<?php if ($this->session->userdata('rol_id') > 0   && $this->session->userdata('rol_id') < 3): ?>
								<div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element"menu-title-theme="theme5">
								ADMINISTRACIÓN
							</div>
							<ul class="pcoded-item pcoded-left-item">
								 <li class="">
									<a href="Config" data-i18n="nav.sample-page.main">
										<span class="pcoded-micon">
											<i class="ti-cogs"></i>
										</span>
										<span class="pcoded-mtext">Configuración</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li class="">
									<a href="Usuarios" data-i18n="nav.sample-page.main">
										<span class="pcoded-micon">
											<i class="ti-user"></i>
										</span>
										<span class="pcoded-mtext">Usuarios</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
							</ul>
						<?php endif ?>
							
						</div>
					</nav>
						<!-- Contenedor de la pagina -->
						<div class="pcoded-content">
							<div class="pcoded-inner-content">
								<div class="main-body ">
									<div class="page-wrapper">
										<div class="page-header my-0">
											<div class="page-header-title">
												<h3><?= $this->uri->segment(1)?></h3>
												<span><?= app_desc;?></span>
											</div> 
											 <hr>
										</div>
										<div class="page-body">
											<?= $content_for_layout; ?>
										</div>
									</div>
								</div>
								<div id="styleSelector">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- aqui van los JS -->
	<script src="plugins/jquery/dist/jquery.min.js"></script>
	<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="plugins/tether/dist/js/tether.min.js"></script>
	<script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="plugins/modernizr/modernizr.js"></script>
	<script src="plugins/modernizr/feature-detects/css-scrollbars.js"></script>
	<script src="plugins/classie/classie.js"></script>
	<script src="plugins/raphael/raphael.min.js"></script>
	<script src="plugins/morris.js/morris.js"></script>
	<script src="assets/pages/todo/todo.js"></script>
	<script src="assets/pages/dashboard/horizontal-timeline/js/main.js"></script>
	<script src="plugins/i18next/i18next.min.js"></script>
	<script src="plugins/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
	<script src="plugins/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
	<script src="plugins/jquery-i18next/jquery-i18next.min.js"></script>
	<script src="assets/pages/dashboard/project-dashboard.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/demo-12.js"></script>
	<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/js/jquery.mousewheel.min.js"></script>
</body>
</html>