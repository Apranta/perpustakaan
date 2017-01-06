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
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-12">
							<?php if($this->session->flashdata('berhasil')): ?>
										                    <div class="alert alert-success display-show">
																<button class="close" data-close="alert"></button>
										                      <?php echo $this->session->flashdata('berhasil');?>
															</div>
										                  <?php endif; ?>
										                  <?php if($this->session->flashdata('gagal')): ?>
										                    <div class="alert alert-danger display-show">
																<button class="close" data-close="alert"></button>
										                      <?php echo $this->session->flashdata('gagal');?>
															</div>
										                  <?php endif; ?>
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Data Pemesanan Buku</span>
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
									<a href="<?= base_url('admin/laporan_pemesanan') ?>" class="btn btn-primary">Cetak Laporan</a>
								</div>
							</div>
							<div class="table-scrollable table-scrollable-borderless">
								<table class="table table-hover table-light" id="table_id">
								<thead>
								<tr class="uppercase">
									<th>
										 Nama Pemesanan
									</th>
									<th>
										 Judul Buku
									</th>
									<th>
										 Penerbit
									</th>
									<th>
										 Action
									</th>
								</tr>
								</thead>
								<tbody>
							<?php foreach ($pemesanan_data as $data) : ?>
								<tr>
									<td>
										<?= $this->anggota_model->get_data_byId_anggota($data->id_anggota)->nama ?>
									</td>
									<td>
										 <?= $data->judul ?>
									</td>
									<td>
										 <?= $data->penulis ?>
									</td>
									<td>
										 <a href="#konfirm" class="btn default btn-xs green-stripe" data-toggle="modal" onclick="getData('<?= $data->id_pemesanan ?>')">
												Konfirm Telah ada </a>
										<a href="#" class="btn default btn-xs red-stripe">
												Delete </a>
									</td>
								</tr>
							<?php endforeach; ?>
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

<div class="modal fade" id="konfirm" tabindex="-1" role="basic" aria-hidden="true">
					<?= form_open_multipart('admin/konfirm', ['class' => 'form-horizontal']) ?>
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Tambah Data Buku</h4>
							</div>
							<div class="modal-body">
								
									<div class="form-body">
										<div class="form-group">
													<label class="control-label col-md-3">Judul Buku<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="judul" id="judul" required="" class="form-control"/>
														<input type="hidden" name="id_pem" id="id_pem" value="">
													</div>
												</div>
											<div class="form-group">
													<label class="control-label col-md-3">Penulis<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="penulis" id="penulis" required="" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Penerbit <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="penerbit" data-required="1" class="form-control"/>
													</div>
												</div>
											<div class="form-group">
													<label class="control-label col-md-3">Kategori<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<select class="form-control select2me" name="kategori" id="kategori">
															<option value="">Select...</option>
															<?php 
																foreach ($kategori as $data) :?>
																	<option value="<?= $data->id_kategori ?>"><?= $data->nama ?></option>
																<?php endforeach;
															?>
															
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">ISBN <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="isbn" data-required="1" class="form-control"/>
													</div>
												</div><div class="form-group">
													<label class="control-label col-md-3">Tahun Terbit <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="tahun" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Jumlah halaman <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="number" name="jumlah_hal" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Stok <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="number" name="stok" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Sinopsis <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<textarea name="sinopsis" data-required="1" class="form-control"/></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Foto <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="file" name="foto" data-required="1" class="form-control"/>
													</div>
												</div>
									</div>
							</div>
						<div class="modal-footer">
							<button type="button" class="btn default" data-dismiss="modal">	Cancel</button>
							<input type="submit" name="tambah" value="Tambah User" class="btn blue">
						</div>
					</div>
										<!-- /.modal-content -->
				</div>
				<?= form_close() ?>
		</div>

		<script type="text/javascript">
			function getData(id) {
				$.get('<?= base_url('admin/pemesanan/') ?>' + id, function(data) {
					data = JSON.parse(data);
					$('#judul').val(data.judul);
					$('#penulis').val(data.penulis);
					$('#id_pem').val(data.id_pemesanan);
				});
			}
		</script>