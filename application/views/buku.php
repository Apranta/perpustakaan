<div class="page-container">
	<div class="page-content">
		<div class="container">
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Buku
				</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Daftar Buku</span>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-scrollable table-scrollable-borderless">
								<table class="table table-light table-hover" id="table_id">
								<thead>
								<tr>
									<th>
										<i class="fa fa-briefcase"></i> Judul Buku
									</th>
									<th>
										Kategori
									</th>
									<th class="hidden-xs">
										<i class="fa fa-question"></i>  Penerbit / Penulis
									</th>
									<th>
										Action
									</th>
								</tr>
								</thead>
								<tbody>
								<?php 
									foreach ($buku as $data) :?>
										<tr>
											<td>
												<a href="<?= base_url('home/detail/'.$data->id_buku)?>">
												<?= $data->judul ?> </a>
											</td>
											<td>
												 <?= $this->kategori_model->get_data_byId_kategori($data->id_kategori)->nama ?>
											</td>
											<td>
												 <?= $data->penerbit." / ".$data->penulis ?>
											</td>
											<td>
												<a href="<?= base_url('home/detail/'.$data->id_buku)?>" class="btn default btn-xs green-stripe">
												View </a>
												<?php 
												if ($this->session->userdata("nama")) :?>
												<a href="<?= base_url('home/detail/'.$data->id_buku)?>" class="btn default btn-xs blue-stripe">
												Pinjam </a>
												<?php endif; ?>
											</td>
										</tr>	
									<?php endforeach;
								?>
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

