<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Portal Admin</h1>
			</div>
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="<?=  base_url('Member')?>">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					Portal Admin
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				<div class="col-md-12">
					<!-- BEGIN PROFILE SIDEBAR -->
					<div class="profile-sidebar" style="width: 250px;">
						<!-- PORTLET MAIN -->
						<div class="portlet light profile-sidebar-portlet">
							<div class="profile-usermenu">
								<ul class="nav">
									<li>
										<a href="<?=  base_url('admin')?>">
										<i class="icon-home"></i>
										Home </a>
									</li>
									<li>
										<a href="<?=  base_url('admin/update_pw')?>">
										<i class="icon-settings"></i>
										Account Settings </a>
									</li>
									<li class=" dropdown-submenu">
										<a href=":;">
										<i class="icon-briefcase"></i>
										Data Buku </a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="<?=  base_url('admin/buku')?>">
												Lihat Semua Buku </a>
											</li>
											<li class=" ">
												<a href="<?= base_url('admin/tambah_buku') ?>">
												Tambah Buku </a>
											</li>
											<li class=" ">
												<a href="<?= base_url('admin/tambah_kategori') ?>">
												Tambah Kategori Buku</a>
											</li>
										</ul>
									</li>
									<li class=" dropdown-submenu">
										<a href=":;">
										<i class="icon-pencil"></i>
										Artikel / News </a>
										<ul class="dropdown-menu">
											<li>
												<a href="<?=  base_url('admin/artikel')?>">
												
												Post Artikel </a>
											</li>
											<li class=" ">
												<a href="<?= base_url('admin/list_artikel') ?>">
												List Artikel </a>
											</li>
										</ul>
									</li>
									<li >
										<a href="<?=  base_url('admin/peminjaman')?>">
										<i class="icon-drawer"></i>
										Data Peminjaman </a>
									</li>
									<li >
										<a href="<?=  base_url('admin/pemesanan')?>">
										<i class="icon-book-open"></i>
										Data Pemesanan </a>
									</li>
									<li>
										<a href="<?=  base_url('admin/user')?>">
										<i class="icon-user"></i>
										Data User </a>
									</li>
								</ul>
							</div>
							<!-- END MENU -->
						</div>
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Data Peminjaman Buku</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
						<div class="row">
								<div class="col-md-3">
									<a href="<?= base_url('admin/laporan_peminjaman') ?>" class="btn btn-primary">Cetak Laporan</a>
								</div>
							</div>
							<div class="table-scrollable table-scrollable-borderless">
								<table class="table table-hover table-light" id="table_id">
								<thead>
								<tr class="uppercase">
									<th>
										#
									</th>
									<th>
										 Nama Lengkap
									</th>
									<th>
										 Denda
									</th>
									<th>
										 Tanggal Pinjam
									</th>
									<th>
										 Tanggal Kembali
									</th>
									<th>
										 Judul Buku
									</th>
									<th>
										Action
									</th>
								</tr>
								</thead>
								<tbody>
								<?php $index=1;
								foreach ($peminjaman_data as $data) : ?>
								<tr>
									<td>
										<?= $index ?>
									</td>
									<td>
										 <?= $this->anggota_model->get_data_byId_anggota($data->id_anggota)->nama ?>
									</td>
									<td>
										<?php
											if (date("Y-m-d") >= $data->tanggal_kembali) {
												$denda = (strtotime(date("Y-m-d"))-strtotime($data->tanggal_kembali))/(60*60*24) * 500;
												echo "Rp. ".$denda;
											}
											else{
												echo "Rp. 0";
											}
															// echo((strtotime(date("Y-m-d"))-strtotime($data->tanggal_kembali))/(60*60*24));
										?>
									</td>
									<td>
										 <?= $data->tanggal_pinjam ?>
									</td>
									<td>
										 <?= $data->tanggal_kembali ?>
									</td>
									<td>
										 <?= $this->buku_model->get_data_byId_buku($data->no_buku)->judul ?>
									</td>
									<td>
										<a href="<?= base_url('admin/kembali/'.$data->no_peminjaman.'/'.$data->no_buku) ?>" class="btn btn-mini btn-success">Konfirmasi</a>
									</td>
								</tr>
								<?php $index++; endforeach; ?>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
							
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>