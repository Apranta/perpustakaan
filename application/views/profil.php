<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Your Profile</h1>
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
					Profile
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
								<img src="<?= base_url('gambar/'.$anggota->foto) ?>" class="img-responsive" alt="">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									 <?= $anggota->nama ?>
								</div>
								<div class="profile-usertitle-job">
									 <?= $anggota->pekerjaan ?>
								</div>
							</div>
							<div class="profile-usermenu">
								<ul class="nav">
									<li class="active">
										<a href="#">
										<i class="icon-home"></i>
										Home </a>
									</li>
									<li>
										<a href="<?=  base_url('member/profile')?>">
										<i class="icon-settings"></i>
										Account Settings </a>
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
								<!-- BEGIN PORTLET -->
								<div class="portlet light ">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Data Peminjaman Kamu</span>
										</div>
									</div>
									<div class="portlet-body">
										<div class="table-scrollable table-scrollable-borderless">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th> #</th>
												<th>
													 Nama Buku
												</th>
												<th>
													 Tanggal Pinjam
												</th>
												<th>
													 Tanggal Kembali
												</th>
												<th>
													 Denda
												</th>
											</tr>
											</thead>
											<tbody>
											<?php $index=1;
											foreach ($pinjam as $data) : ?>
											<tr>
												<td>
													<?= $index ?>
												</td>
												<td>
													<?= $this->buku_model->get_data_byId_buku($data->no_buku)->judul ?>
												</td>
												<td>
													 <?= $data->tanggal_pinjam ?>
												</td>
												<td>
													 <?= $data->tanggal_kembali ?>
												</td>
												<td>
													<span class="bold theme-font">
														<?php
															if (date("Y-m-d") >= $data->tanggal_kembali) {
																$denda = (strtotime(date("Y-m-d"))-strtotime($data->tanggal_kembali))/(60*60*24) * 500;
																echo "Rp. ".$denda;
															}
															else{
																echo "Rp. 0";
															}
															// echo((strtotime(date("Y-m-d"))-strtotime($data->tanggal_kembali))/(60*60*24));
														?>
													</span>
												</td>
											</tr>
										<?php $index++; endforeach; ?>
											</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<!-- BEGIN PORTLET -->
								<div class="portlet light ">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Data Pemesanan Buku Kamu</span>
										</div>
									</div>
									<div class="portlet-body">
										<div class="table-scrollable table-scrollable-borderless">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th>
													#
												</th>
												<th>
													 Nama Pemesan
												</th>
												<th>
													 Buku
												</th>
												<th>
													 Penulis
												</th>
												<th>
													 Status
												</th>
											</tr>
											</thead>
											<tbody>
											<?php $index =1 ;
											foreach ($buku as $data) : ?>
											<tr>
												<td>
													<?= $index; ?>
												</td>
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
													<span class="bold theme-font">
													<?php 
														if ($data->pesan == '1') {
															echo "Dalam Proses";
														}
														else echo "Buku Telah Ada";
													?>
													</span>
												</td>
											</tr>
											<?php $index++; endforeach; ?>
											</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- END PORTLET -->
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