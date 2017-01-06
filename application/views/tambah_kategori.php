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
						<div class="row">

							<div class="col-md-6">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-cogs font-green-sharp"></i>
											<span class="caption-subject font-green-sharp bold uppercase">Data Kategori</span>
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
									<div class="portlet-body form">
										
										<div class="table-scrollable table-scrollable-borderless" align="center">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th>
													 Nama Kategori
												</th>
												<th align="center">
													 Action
												</th>
											</tr>
											</thead>
											<?php foreach ($kategori_data as $data) : 
											?>
											<tr>
												<td>
													<?= $data->nama ?>
												</td>
												<td align="center">
													<a href="#edit" class="btn btn-primary" onclick="editData('<?= $data->id_kategori ?>')" data-toggle="modal" href="#edit">
																	Edit </a>
													<a href="<?= base_url('admin/hapus_kat/'.$data->id_kategori) ?>" class="btn btn-danger"> Hapus</a>
												</td>
											</tr>
										<?php endforeach; 
										?>
											</table>
										</div>
									</div>
									<!-- END VALIDATION STATES-->
								</div>
							</div>

							<div class="col-md-6">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-cogs font-green-sharp"></i>
											<span class="caption-subject font-green-sharp bold uppercase">Form Tambah Kategori</span>
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
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<?= form_open_multipart('admin/tambah_kategori', array('class' => 'form-horizontal', 'id' => 'form_sample_3')) ?>
											<div class="form-body">
												
												<div class="form-group">
													<label class="control-label col-md-4">Nama Kategori <span class="required">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" name="nama" data-required="1" class="form-control"/>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<input type="submit" name="tambah" value="Tambah Kategori" class="btn btn-success">
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
									<!-- END VALIDATION STATES-->
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
					<?= form_open('admin/tambah_kategori', ['class' => 'form-horizontal']) ?>
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
														<input type="text" name="nama_baru" id="nama_baru" required="" class="form-control"/>
														<input type="hidden" name="id_kat" id="id_kat">
													</div>
												</div>
									</div>
							</div>
						<div class="modal-footer">
							<button type="button" class="btn default" data-dismiss="modal">	Cancel</button>
							<input type="submit" name="edit" value="Edit kategori" class="btn blue">
						</div>
					</div>
										<!-- /.modal-content -->
				</div>
				<?= form_close() ?>
		</div>

		<script type="text/javascript">
			function editData(id) {
				$.get('<?= base_url('admin/kategori_buku/') ?>' + id, function(data) {
					data = JSON.parse(data);
					$('#nama_baru').val(data.nama);
					$('#id_kat').val(data.id_kategori);
				});
			}
		</script>