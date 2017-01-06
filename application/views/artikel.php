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
					<!-- BEGIN VALIDATION STATES-->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-cogs font-green-sharp"></i>
											<span class="caption-subject font-green-sharp bold uppercase">Berita</span>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<?= form_open_multipart('admin/kirim_artikel', array('class' => 'form-horizontal', 'id' => 'form_sample_w')) ?>
										<h3 class="form-section">Post Berita</h3>
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
											<div class="form-body">
												<div class="form-group">
													<label class="control-label col-md-3">Judul Artikel <span class="required">
													* </span>
													</label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="judul"/>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Foto Artikel <span class="required">
													* </span>
													</label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="file" class="form-control" name="head"/>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Isi Artikel <span class="required">
													* </span>
													</label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<?php 
																if (isset($artikel->isi)) echo $this->ckeditor->editor('isi', $artikel->isi);
																else echo $this->ckeditor->editor('isi', '');
															?>
														</div>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Pesan</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
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