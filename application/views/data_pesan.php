<div class="page-container">
	<div class="page-content">
		<div class="container">
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Data Pemesanan Buku
				</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Data Pemesanan Buku</span>
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
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>
	</div>
</div>