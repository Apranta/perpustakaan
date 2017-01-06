<div class="page-container">
	<div class="page-content">
		<div class="container">
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Isi Buku Tamu
				</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Buku Tamu</span>
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
						<?= form_open('home/tamu', ['class' => 'form-horizontal']) ?>
								<div class="form-body">
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
										<label class="control-label col-md-3">Nama<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="nama"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Alamat <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<textarea name="alamat" class="form-control"> </textarea> 
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Email <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="email" class="form-control" name="email"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Komentar <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<textarea class="form-control" name="komentar"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" name="kirim" value="Submit" class="btn blue">
											<input type="submit" name="cancelxz" value="cancel" class="btn red">
										</div>
									</div>
								</div>
							<?= form_close() ?>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
		</div>
	</div>
</div>