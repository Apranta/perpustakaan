<div class="page-container">
	<div class="page-content">
		<div class="container">
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="form_layouts.html">Buku</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Details
				</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-equalizer font-green-haze"></i>
											<span class="caption-subject font-green-haze bold uppercase">Detail Buku</span>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form class="form-horizontal" role="form">
											<div class="form-body">
												<h3 class="form-section" align="center"><?= $buku->judul ?></h3>
												<div class="row">
													<div class="col-md-6">
														<img src="<?= base_url('gambar/'.$buku->foto) ?>" width="300px" heigth="400px" class="form-control-static">
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Judul Buku:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 <?= $buku->judul ?>
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Penulis :</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 <?= $buku->penulis ?>
																</p>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Penerbit :</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 <?= $buku->penerbit ?>
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tahun Terbit :</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 <?= $buku->tahun_terbit ?>
																</p>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kategori:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 Category1
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Stok:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 <?= $buku->stok ?>
																</p>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">ISBN:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 <?= $buku->ISBN ?>
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Jumlah Halaman:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 <?= $buku->jumlah_hal ?>
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<h3 class="form-section">Sinopsis</h3>
												<div class="row">
													<div class="col-md-12">
														<p class="form-control-static">
														<?= $buku->sinopsis ?>
														</p>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
											</div>
											<?php 
											if ($this->session->userdata("nama")) :?>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-offset-5 col-md-9">
																<a id="modal" data-toggle="modal" href="#pinjam" class="btn green">Pinjam </a>
																<button type="button" class="btn default">Cancel</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										<?php endif;?>
										</form>
										<!-- END FORM-->
									</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

			<div class="modal fade" id="pinjam" tabindex="-1" role="basic" aria-hidden="true">
					<?= form_open('home/pinjam', ['class' => 'form-horizontal']) ?>
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Peminjaman Buku</h4>
							</div>
							<div class="modal-body">
									<div class="form-body">
										<div class="form-group">
											<label class="control-label col-md-6">Nama Peminjam : </label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="hidden" class="form-control" name="id_anggota" value="<?= $this->session->userdata("id_anggota")?>" />
													<input type="hidden" class="form-control" name="no_buku" value="<?= $id_buku ?>" />
													<label class="control-label"><?= $this->session->userdata("nama")?></label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-6">Tanggal Peminjaman : </label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<label class="control-label"><?= date('d-m-Y') ?></label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-6">Tanggal Pengembalian : </label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<label class="control-label"><?= date('d-m-Y',strtotime("+3 days")) ?></label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-6">Nama Buku :</label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<label class="control-label"><?= $buku->judul ?></label>
												</div>
											</div>
										</div>
										<div class="form-group">
										<br><br>
											<p align="center">
												Apabila Lewat dari tanggal Pengembalian Maka Akan di denda sebesar Rp. 500,-
											</p>
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn default" data-dismiss="modal">	Cancel</button>
								<input type="submit" name="pinjam" value="Pinjam Buku" class="btn blue">
							</div>
						</div>
					</div>
				<?= form_close() ?>
			</div>