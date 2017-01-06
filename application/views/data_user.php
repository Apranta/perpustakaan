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
					<a href="<?=  base_url('admin')?>">Home</a><i class="fa fa-circle"></i>
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
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Data User</span>
							</div>
						</div>
						<div class="portlet-body">
							<div class="row">
								<div class="col-md-3">
									<a href="#tambah" class="btn btn-success" data-toggle="modal" >
																	Tambah User </a>
								</div>
							</div>	
							<div class="table-scrollable table-scrollable-borderless">
								<table class="table table-hover table-light" id="table_id">
								<thead>
								<tr class="uppercase">
									<th>
										#
									</th>
									<th >
										 Nama User
									</th>
									<th>
										 Jenis Kelamin
									</th>
									<th>
										 Telepon
									</th>
									<th>
										 Action
									</th>
								</tr>
								</thead>
								<tbody>
								<?php $i=0; foreach ($user_data as $data) : ?>
								<tr>
									<td>
										<?= ++$i ?>
									</td>
									<td>
										<a href="#detail" data-toggle="modal" onclick="detailData('<?= $data->id_anggota ?>')">
											<?= $data->nama ?>
										</a>
									</td>
									<td>
										 <?php
										 if($data->jenis_kelamin == 'L'){
										 	echo "Laki - Laki";
										 	}
										 else echo "Perempuan"; ?>
									</td>
									<td>
										 <?= $data->telepon ?>
									</td>
									<td>
										<a href="#edit" class="btn default btn-xs blue-stripe" onclick="editData('<?= $data->id_anggota ?>')" data-toggle="modal" >
																	Edit </a>
										<a href="<?= base_url('admin/delete_anggota/'.$data->id_anggota )?>" class="btn default btn-xs red-stripe">
											Delete
										</a>
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

			<div class="modal fade" id="tambah" tabindex="-1" role="basic" aria-hidden="true">
					<?= form_open('admin/user', ['class' => 'form-horizontal']) ?>
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Edit Data Buku</h4>
							</div>
							<div class="modal-body">
								
									<div class="form-body">
										<div class="form-group">
													<label class="control-label col-md-3">Nama<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="nama" id="nama" required="" class="form-control"/>
													</div>
												</div>
											<div class="form-group">
													<label class="control-label col-md-3">Jenis Kelamin<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<select name="jk" class="form-control">
															<option value="L">Laki - Laki</option>
															<option value="P">Perempuan</option>
														</select>
													</div>
												</div>
											<div class="form-group">
													<label class="control-label col-md-3">Username<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="uname" id="uname" required="" class="form-control"/>
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


<div class="modal fade" id="edit" tabindex="-1" role="basic" aria-hidden="true">
					<?= form_open('admin/user', ['class' => 'form-horizontal']) ?>
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Edit Data Buku</h4>
							</div>
							<div class="modal-body">
								
									<div class="form-body">
										<div class="form-group">
													<label class="control-label col-md-3">Nama<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="nama_baru" id="nama_baru" readonly="" class="form-control"/>
														<input type="hidden" name="id_anggota" id="id_anggota">
													</div>
												</div>
										<div class="form-group">
													<label class="control-label col-md-3">Username<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="uname_baru" id="uname_baru" readonly="" required="" class="form-control"/>
													</div>
												</div>
										<div class="form-group">
													<label class="control-label col-md-3">Password<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="password" name="password_baru" id="password_baru" required="" class="form-control"/>
													</div>
												</div>
											<div class="form-group">
													<label class="control-label col-md-3">Ulangi Password<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="password" name="password_ulang" id="password_ulang" required="" class="form-control"/>
													</div>
												</div>
									</div>
							</div>
						<div class="modal-footer">
							<button type="button" class="btn default" data-dismiss="modal">	Cancel</button>
							<input type="submit" name="edit" value="Edit User" class="btn blue">
						</div>
					</div>
										<!-- /.modal-content -->
				</div>
				<?= form_close() ?>
		</div>

		<div class="modal fade" id="detail" tabindex="-1" role="basic" aria-hidden="true">
					<?= form_open('#', ['class' => 'form-horizontal']) ?>
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Detail Siswa</h4>
							</div>
							<div class="modal-body">
								
									<div class="form-body">
										<div class="form-group">
													<label class="control-label col-md-3">Nama<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="namaa" id="namaa" readonly="" class="form-control"/>
														<input type="hidden" name="id_anggota" id="id_anggota">
													</div>
												</div>
										<div class="form-group">
													<label class="control-label col-md-3">Username<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="unamea" id="unamea" readonly="" required="" class="form-control"/>
													</div>
												</div>
										<div class="form-group">
													<label class="control-label col-md-3">Jenis Kelamin<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="jka" id="jka" required="" class="form-control" readonly=""/>
													</div>
												</div>
											<div class="form-group">
													<label class="control-label col-md-3">Tempat , Tanggal Lahir<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="ttl" id="ttl" required="" class="form-control" readonly=""/>
													</div>
												</div>

										<div class="form-group">
													<label class="control-label col-md-3">agama<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="agama" id="agama" required="" class="form-control" readonly=""/>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Alamat<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="alamat" id="alamat" required="" class="form-control" readonly=""/>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Telepon<span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="telepon" id="telepon" required="" class="form-control" readonly=""/>
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
				$.get('<?= base_url('admin/user/') ?>' + id, function(data) {
					data = JSON.parse(data);
					$('#nama_baru').val(data.nama);
					$('#uname_baru').val(data.username);
					$('#id_anggota').val(data.id_anggota);
				});
			}
			function detailData(id) {
				$.get('<?= base_url('admin/user/') ?>' + id, function(data) {
					data = JSON.parse(data);
					$('#namaa').val(data.nama);
					$('#unamea').val(data.username);
					if (data.jenis_kelamin == 'L') {
						$('#jka').val('Laki - Laki');
					}
					else{
						$('#jka').val('Perempuan');
					}
					$('#ttl').val(data.tempat_lahir + ' , ' + data.tanggal_lahir);
					$('#agama').val(data.agama);
					$('#alamat').val(data.alamat);
					$('#telepon').val(data.telepon);
				});
			}
		</script>