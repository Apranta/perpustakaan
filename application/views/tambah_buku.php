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
											<span class="caption-subject font-green-sharp bold uppercase">Form Tambah Buku</span>
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
										<!-- <form method="POST" action="<?php echo base_url('admin/input_buku'); ?>" id="form_sample_3" class="form-horizontal" enctype="multipart/form-data"> -->
										<?= form_open_multipart('admin/input_buku', array('class' => 'form-horizontal', 'id' => 'form_sample_3')) ?>
											<div class="form-body">
												<h3 class="form-section">Tambah Buku Baru</h3>
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
														

												
												<div class="form-group">
													<label class="control-label col-md-3">Judul Buku <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" name="judul" id="name" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Kategori <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
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
													<label class="control-label col-md-3">Penerbit <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" name="penerbit" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Penulis <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" name="penulis" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">ISBN <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" name="isbn" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Tahun Terbit <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" name="tahun" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Jumlah halaman <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="number" name="jumlah_hal" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Stok <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="number" name="stok" data-required="1" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Sinopsis <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<textarea name="sinopsis" data-required="1" class="form-control"/></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Foto <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="file" name="foto" data-required="1" class="form-control"/>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Submit</button>
														<button type="button" class="btn default">Cancel</button>
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