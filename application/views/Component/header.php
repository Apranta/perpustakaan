
<html >
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8">
<title>Perpustakaan Online</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/global/plugins/uniform/css/uniform.default.css') ?>" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?= base_url('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/global/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="<?=  base_url('assets/admin/pages/css/tasks.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?=  base_url('assets/admin/pages/css/profile.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?=  base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') ?>" rel="stylesheet" type="text/css"/>

<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="<?=  base_url('assets/global/css/components-rounded.css') ?>" id="style_components" rel="stylesheet" type="text/css">
<link href="<?=  base_url('assets/global/css/plugins.css') ?>" rel="stylesheet" type="text/css">
<link href="<?=  base_url('assets/admin/layout3/css/layout.css') ?>" rel="stylesheet" type="text/css">
<link href="<?=  base_url('assets/admin/layout3/css/themes/default.css') ?>" rel="stylesheet" type="text/css" id="style_color">
<link href="<?=  base_url('assets/admin/layout3/css/custom.css') ?>" rel="stylesheet" type="text/css">
<script src="<?=  base_url('assets/global/plugins/jquery.min.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/jquery-migrate.min.js') ?>" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?=  base_url('assets/global/plugins/jquery-ui/jquery-ui.min.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/jquery.blockui.min.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/jquery.cokie.min.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/uniform/jquery.uniform.min.js') ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?=  base_url('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') ?>" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="<?=  base_url('assets/global/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/morris/raphael-min.js') ?>" type="text/javascript"></script>
<script src="<?=  base_url('assets/global/plugins/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
    <link href="<?= base_url('assets/datatables/media/css/jquery.dataTables.css') ?>" rel="stylesheet">
    <script src="<?=base_url('assets/datatables/media/js/jquery.dataTables.js') ?>"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- END JAVASCRIPTS -->

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
			<h2>Perpustakaan Online</h2>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- END TODO DROPDOWN -->
					<?php 
					if ($this->session->userdata("nama")) :?>
						<li class="dropdown dropdown-user dropdown-dark">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<span class="username username-hide-mobile">Selamat Datang, <?= $this->session->userdata("nama")?></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<?php 
								if ($this->session->userdata("role")=='admin') :?>
								<li>
									<a href="<?= base_url('admin') ?>">
									<i class="icon-user"></i> Portal Admin </a>
								</li>
								<?php else : ?>
								<li>
									<a href="<?= base_url('member') ?>">
									<i class="icon-user"></i> My Profile </a>
								</li>
								<?php endif; ?>
								<li>
									<a href="<?= base_url('home/logout') ?>">
									<i class="icon-key"></i> Log Out </a>
								</li>
							</ul>
						</li>	
					<?php else : ?>
						<li class="droddown dropdown-separator">
							<span class="separator"></span>
						</li>
						<li class="droddown dropdown-separator">
							<a href="<?= base_url('home/login') ?>">
							<i class="icon-user"></i> Log In </a>
						</li>
						<li class="droddown dropdown-separator">
							<span class="separator"></span>
						</li>
						<li class="droddown dropdown-separator">
							<a href="<?= base_url('home/register') ?>">
							Register </a>
						</li>

					<?php endif; ?>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- <li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="assets/admin/layout3/img/avatar9.jpg">
						<span class="username username-hide-mobile">Nick</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="#">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="<?= base_url('member/login') ?>">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li> -->
					<!-- END USER LOGIN DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- <li class="dropdown dropdown-extended quick-sidebar-toggler">
	                    <span class="sr-only">Toggle Quick Sidebar</span>
	                    <i class="icon-logout"></i>
	                </li> -->
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li class="active">
						<a  href="<?= base_url() ?>">Dashboard</a>
					</li>
					<li class="menu-dropdown mega-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						Data Buku<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu" style="min-width: 210px">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div >
											<ul class="mega-menu-submenu">
												<li>
													<a href="<?= base_url('home/daftar_buku') ?>" class="iconify">
													<i class="fa fa-angle-right"></i>
													Lihat Semua Buku </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="menu-dropdown mega-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						Pemesanan Buku <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu" style="min-width: 210px">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div>
											<ul class="mega-menu-submenu">
												<li>
													<a href="<?= base_url('home/pemesanan') ?>">
													<i class="fa fa-angle-right"></i>
													Lihat Data </a>
												</li>
												<li>
													<a href="<?= base_url('member/pesan') ?>">
													<i class="fa fa-angle-right"></i>
													Pesan Buku </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="menu-dropdown mega-menu-dropdown">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						Peminjaman Buku <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu" style="min-width: 210px">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div>
											<ul class="mega-menu-submenu">
												<li>
													<a href="<?= base_url('home/peminjaman') ?>">
													<i class="fa fa-angle-right"></i>
													Lihat Data </a>
												</li>
												<li>
													<a href="<?= base_url('home/daftar_buku') ?>">
													<i class="fa fa-angle-right"></i>
													Pinjam Buku </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<a  href="<?= base_url('home/tamu') ?>">Buku Tamu</a>
					</li>

					<li>
						<a  href="<?= base_url('home/berita') ?>">Berita</a>
					</li>
					<li>
						<a  href="<?= base_url('home/about') ?>">Struktur Sekolah</a>
					</li>
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
