<div class="page-container">
	<div class="page-content">
		<div class="container">
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Register Member
				</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-equalizer font-red-sunglo"></i>
											<span class="caption-subject font-red-sunglo bold uppercase">Registrasi Member Baru</span>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<!-- <form action="<?php echo base_url('home/insert'); ?>" class="form-horizontal" method="POST"> -->
										<?= form_open_multipart('home/insert', array('class' => 'form-horizontal', 'id' => 'form_sample_3')) ?>
											<?php if($this->session->flashdata('berhasil')): ?>
							                    <div class="alert alert-success alert-dismissable">
							                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							                      <h4>  <i class="icon fa fa-check"></i> Sukses!</h4>
							                      <?php echo $this->session->flashdata('berhasil');?>
							                    </div>
							                  <?php endif; ?>
							                  <?php if($this->session->flashdata('gagal')): ?>
							                    <div class="alert alert-danger alert-dismissable">
							                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							                      <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
							                      <?php echo $this->session->flashdata('gagal');?>
							                    </div>
							                  <?php endif; ?>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Nama Lengkap</label>
													<div class="col-md-4">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-user"></i>
															</span>
															<input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Username</label>
													<div class="col-md-4">
														<input type="text" name="username" id="username" name="username" class="form-control" placeholder="Enter text">
														<span class="help-block">
														Username Digunakan Untuk Login nantinya..</span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Password</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="password" class="form-control" placeholder="Password" name="password">
															<span class="input-group-addon">
															<i class="fa fa-user"></i>
															</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Jenis Kelamin</label>
													<div class="col-md-4">
														<div class="input-group">
															<select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
																<option value="L">Laki-Laki</option>
																<option value="P">Perempuan</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Tempat Lahir</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Kota Lahir">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Tanggal Lahir</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Agama</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="text" id="agama" name="agama" class="form-control" placeholder="Islam">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Alamat</label>
													<div class="col-md-4">
														<div class="input-group">
															<textarea class="form-control" name="alamat" id="alamat" rows="3" cols="100"></textarea>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">No Telepon</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="text" id="telepon" name="telepon" class="form-control" placeholder="0890xxxxxx">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Pekerjaan</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="text" id="pekerjaan" name="pekerjaan" class="form-control" placeholder="Siswa">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Foto</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="file" name="foto" class="form-control"/>
														</div>
													</div>
												</div>
												
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Register</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
				</div>
			</div>
		</div>
	</div>
</div>