<div class="page-container">
	<div class="page-content">
		<div class="container">
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Data Peminjaman Buku
				</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Data Peminjaman Buku</span>
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
							<div class="table-scrollable table-scrollable-borderless">
								<table class="table table-hover table-light" id="table_id">
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
													 <?php
													 $tgl_pinjam = explode("-",$data->tanggal_pinjam);
													 echo $tgl_pinjam[2]."-".$tgl_pinjam[1]."-".$tgl_pinjam[0];
													 ?>
												</td>
												<td>
													<?php
													 $tgl_kembali = explode("-",$data->tanggal_kembali);
													 echo $tgl_kembali[2]."-".$tgl_kembali[1]."-".$tgl_kembali[0];
													 ?>
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
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>
	</div>
</div>