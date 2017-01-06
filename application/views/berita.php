<div class="page-container">
	<div class="page-content">
		<div class="container">
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Berita
				</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Berita</span>
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
							<table class="table table-hover" id="table_id">
								<thead>
									<tr>
										<th>#</th>
										<th>#</th>
										<th>Judul</th>
										<th>Isi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=0; foreach ($berita as $data) : ?>
									<tr>
										<td><?= ++$i ?></td>
										<td width="30%">
											<img src="<?= base_url('gambar/'.$data->head) ?>" class="img img-responsive" alt="">
										</td>
										<td>
										<a href="<?= base_url('home/artikel/'.$data->id_berita) ?>" title="">
										<?= $data->judul ?></a></td>
										<td><?= substr($data->isi, 0,100) ?></td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
		</div>
	</div>
</div>