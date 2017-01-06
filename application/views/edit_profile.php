<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Profile<small>user account page sample</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="<?=  base_url()?>">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?=  base_url('member')?>">Profile</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 User Account
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
							<!-- SIDEBAR USERPIC -->
							<div class="profile-userpic">
								<img src="<?= base_url('gambar/'.$foto) ?>" class="img-responsive" alt="">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									  <?= $nama ?>
								</div>
								<div class="profile-usertitle-job">
									  <?= $pekerjaan ?>
								</div>
							</div>
							<div class="profile-usermenu">
								<ul class="nav">
									<li>
										<a href="<?=  base_url('member')?>">
										<i class="icon-home"></i>
										Home </a>
									</li>
									<li class="active">
										<a href="#">
										<i class="icon-settings"></i>
										Account Settings </a>
									</li>
								</ul>
							</div>
							<!-- END MENU -->
						</div>
						<!-- END PORTLET MAIN -->
						<!-- PORTLET MAIN -->
						
						<!-- END PORTLET MAIN -->
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-12">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">Personal Info</a>
											</li>
											<li>
												<a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
											</li>
											<li>
												<a href="#tab_1_3" data-toggle="tab">Change Password</a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- PERSONAL INFO TAB -->
											<div class="tab-pane active" id="tab_1_1">
												
												<?= form_open('member/profile') ?>
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
														<label class="control-label">Nama</label>
														<input type="text" class="form-control" name="nama" value="<?= $nama ?>" />
													</div>
													<div class="form-group">
														<label class="control-label">Jenis Kelamin</label>
														<select name="jenis_kelamin" class="form-control">
															<option value="L">Laki-Laki</option>
															<option value="P">Perempuan</option>
														</select>
													</div>
													<div class="form-group">
														<label class="control-label">Tempat Lahir</label>
														<input type="text" value="<?= $tempat_lahir ?>" class="form-control" name="tempat_lahir" />
													</div>
													<div class="form-group">
														<label class="control-label">Tanggal Lahir</label>
														<input type="date" value="<?= $tanggal_lahir ?>" name="tanggal_lahir" class="form-control" />

													</div>
													<div class="form-group">
														<label class="control-label">Agama</label>
														<input type="text" value="<?= $agama ?>" name="agama" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Alamat</label>
														<textarea class="form-control" rows="3" name="alamat"><?= $alamat ?></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">No Telepon</label>
														<input type="text" value="<?= $telepon ?>" name="telepon" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Pekerjaan</label>
														<input type="text" value="<?= $pekerjaan ?>" class="form-control" name="pekerjaan"/>
													</div>
													<div class="margiv-top-10">
														<input type="submit" name="update" value="Update Profile" class="btn blue">
													</div>
												<?= form_close() ?>
											</div>
											<!-- END PERSONAL INFO TAB -->
											<!-- CHANGE AVATAR TAB -->
											<div class="tab-pane" id="tab_1_2">
												<p>
													 Masukan foto dengan rasio 4:3
												</p>
												
												<?= form_open_multipart('member/profile') ?>
													<div class="form-group">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="<?= base_url('gambar/'.$foto) ?>" alt=""/>
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
															</div>
															<div>
																<input type="file" name="foto" class="form-control"/>
															</div>
														</div>
														<div class="clearfix margin-top-10">
															<span class="label label-danger">NOTE! </span>
															<span> Masukan Foto Asli Anda jangan Pinjem Foto Orang Lain xD</span>
														</div>
													</div>
													<div class="margin-top-10">
														<input type="submit" name="update_foto" value="Update Profile" class="btn green">
													</div>
												<?= form_close() ?>
											</div>
											<!-- END CHANGE AVATAR TAB -->
											<!-- CHANGE PASSWORD TAB -->
											<div class="tab-pane" id="tab_1_3">
												<?= form_open('member/profile') ?>
													<div class="form-group">
														<label class="control-label">New Password</label>
														<input type="password" class="form-control" name="password"/>
													</div>
													<div class="form-group">
														<label class="control-label">Re-type New Password</label>
														<input type="password" class="form-control" name="repassword"/>
													</div>
													<div class="margin-top-10">
														<input type="submit" name="update_pw" value="Update Password" class="btn green">
													</div>
												<?= form_close() ?>
											</div>
											<!-- END CHANGE PASSWORD TAB -->
										</div>
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