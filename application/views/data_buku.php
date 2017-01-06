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
											<span class="caption-subject font-green-sharp bold uppercase">Data Buku</span>
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
											<a href="<?= base_url('admin/laporan_buku') ?>" class="btn btn-primary">Cetak Laporan</a>
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
															 Nama Buku
														</th>
														<th>
															 Kategori
														</th>
														<th>
															 Penulis
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
												<?php 
												$i = 0;
												foreach ($buku_data as $data) : ?>
													<tr>
														<td>
															<?= ++$i; ?>
														</td>
														<td>
															<a href="#lihat" onclick="lihat('<?= $data->id_buku ?>')" data-toggle="modal">
																	
															<?= $data->judul ?></a>
														</td>
														<td>
															<?= $this->kategori_model->get_data_byId_kategori($data->id_kategori)->nama ?>
														</td>
														<td>
															 <?= $data->penulis ?>
														</td>
														<td>
															 <?= $data->penerbit ?>
														</td>
														<td>
															<a href="#edit" class="btn default btn-xs green-stripe" onclick="editData('<?= $data->id_buku ?>')" data-toggle="modal" href="#edit">
																	Edit </a>
															<a href="<?= base_url('admin/delete_buku/'.$data->id_buku )?>" class="btn default btn-xs red-stripe">
																	Delete </a>
														</td>
													</tr>
												<?php endforeach; ?>
													</tbody>
											</table>
										</div>
									</div>
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
</div>

		<div class="modal fade" id="edit" tabindex="-1" role="basic" aria-hidden="true">
					<?= form_open('admin/buku', ['class' => 'form-horizontal']) ?>
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Edit Data Buku</h4>
							</div>
							<div class="modal-body">
								
									<div class="form-body">
										<div class="form-group">
													<label class="control-label col-md-3">Judul Buku <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="judul" id="judul" required="" class="form-control"/>
														<input type="hidden" name="id_buku" id="id_buku">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Kategori <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<select class="form-control select2me" name="kategori" id="kategori">
															<?php 
																foreach ($kategori as $data) :?>
																	<option value="<?= $data->id_kategori ?>"><?= $data->nama ?></option>
																<?php endforeach;
															?>
															
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Penerbit <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="penerbit" id="penerbit" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Penulis <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="penulis" id="penulis" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">ISBN <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="isbn" id="isbn" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Tahun Terbit <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="tahun" id="tahun" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Jumlah halaman <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="number" name="jumlah_hal" id="jumlah_hal" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Stok <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="number" name="stok" id="stok" data-required="1" class="form-control"/>
														<input type="hidden" name="tanggal" id="tanggal">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Sinopsis <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<textarea name="sinopsis" id="sinopsis" data-required="1" class="form-control"/></textarea>
													</div>
												</div>
									</div>
							</div>
						<div class="modal-footer">
							<button type="button" class="btn default" data-dismiss="modal">	Cancel</button>
							<input type="submit" name="edit" value="Edit Buku" class="btn blue">
						</div>
					</div>
										<!-- /.modal-content -->
				</div>
				<?= form_close() ?>
		</div>

		<div class="modal fade" id="lihat" tabindex="-1" role="basic" aria-hidden="true">
					<?= form_open('#', ['class' => 'form-horizontal']) ?>
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Edit Data Buku</h4>
							</div>
							<div class="modal-body">
								
									<div class="form-body">
										<div class="form-group">
													<label class="control-label col-md-3">Judul Buku <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="judul" id="judula" required="" class="form-control" readonly="" />
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Kategori <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" class="form-control" name="kategori" id="kategoria" readonly=""/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Penerbit <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="penerbit" id="penerbita" data-required="1" class="form-control" readonly=""/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Penulis <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="penulis" id="penulisa" data-required="1" class="form-control" readonly=""/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">ISBN <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="isbn" id="isbna" data-required="1" class="form-control" readonly=""/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Tahun Terbit <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="tahun" id="tahuna" data-required="1" class="form-control" readonly=""/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Jumlah halaman <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="number" name="jumlah_hal" id="jumlah_hala" data-required="1" class="form-control" readonly=""/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Stok <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="number" name="stok" id="stoka" data-required="1" class="form-control"  readonly=""/>
														<input type="hidden" name="tanggal" id="tanggal">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Sinopsis <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<textarea name="sinopsis" id="sinopsisa" data-required="1" class="form-control"  readonly=""></textarea>
													</div>
												</div>
									</div>
							</div>
						<div class="modal-footer">
							<button type="button" class="btn default" data-dismiss="modal">	Cancel</button>
						</div>
					</div>
										<!-- /.modal-content -->
				</div>
				<?= form_close() ?>
		</div>

		<script type="text/javascript">
			function editData(id) {
				$.get('<?= base_url('admin/buku/') ?>' + id, function(data) {
					data = JSON.parse(data);
					$('#judul').val(data.judul);
					$('#id_buku').val(data.id_buku);
					$('#penulis').val(data.penulis);
					$('#penerbit').val(data.penerbit);
					$('#tahun').val(data.tahun_terbit);
					$('#stok').val(data.stok);
					$('#jumlah_hal').val(data.jumlah_hal);
					$('#isbn').val(data.ISBN);
					$('#sinopsis').val(data.sinopsis);
					$('#tanggal').val(data.tanggal_masuk);
				});
			}
			function lihat(id) {
				$.get('<?= base_url('admin/buku/') ?>' + id, function(data) {
					data = JSON.parse(data);
					$('#judula').val(data.judul);
					$('#id_bukua').val(data.id_buku);
					$('#penulisa').val(data.penulis);
					$('#penerbita').val(data.penerbit);
					$('#tahuna').val(data.tahun_terbit);
					$('#stoka').val(data.stok);
					$('#jumlah_hala').val(data.jumlah_hal);
					$('#isbna').val(data.ISBN);
					$('#sinopsisa').val(data.sinopsis);
					$('#tanggala').val(data.tanggal_masuk);

					$.get('<?= base_url('admin/kategori_buku/') ?>' + data.id_kategori, function(dataa) {
						dataa = JSON.parse(dataa);
						$('#kategoria').val(dataa.nama);
					});
				});
			}
		</script>