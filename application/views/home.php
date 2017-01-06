<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Selamat Datang Di Perpustakaan Online SMA NEGERI 2 MUARA KELINGI</h1>
			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-12 news-page">
							<div class="row">
								<div class="col-md-8">
									<div id="myCarousel" class="carousel image-carousel slide">
										<div class="carousel-inner">
											<div class="active item">
												<img src="<?=  base_url('gambar/sekolah/sekolah1.jpg')?>" class="img-responsive" alt="">
												<div class="carousel-caption">
													<h4>
													<a href="#">
													Foto Tampak Depan SMA</a>
													</h4>
												</div>
											</div>
											<div class="item">
												<img src="<?=  base_url('gambar/sekolah/sekolah8.jpg')?>" class="img-responsive" alt="">
												<div class="carousel-caption">
													<h4>
													<a href="#">
													Kegiatan Anak2 Ketika Di perpus </a>
													</h4>
												</div>
											</div>
											<div class="item">
												<img src="<?=  base_url('gambar/sekolah/sekolah5.jpg')?>" class="img-responsive" alt="">
												<div class="carousel-caption">
													<h4>
													<a href="#">
													Foto Sekolah</a>
													</h4>
												</div>
											</div>
										</div>
										<!-- Carousel nav -->
										<a class="carousel-control left" href="#myCarousel" data-slide="prev">
										<i class="m-icon-big-swapleft m-icon-white"></i>
										</a>
										<a class="carousel-control right" href="#myCarousel" data-slide="next">
										<i class="m-icon-big-swapright m-icon-white"></i>
										</a>
										<ol class="carousel-indicators">
											<li data-target="#myCarousel" data-slide-to="0" class="active">
											</li>
											<li data-target="#myCarousel" data-slide-to="1">
											</li>
											<li data-target="#myCarousel" data-slide-to="2">
											</li>
										</ol>
									</div>
								</div>
								<!--end col-md-5-->
								<div class="col-md-4">

							<h1 style="margin-top:0">Recent News</h1>
									<?php foreach ($berita as $data) :?>
									<div class="top-news">
										<a href="<?= base_url('home/artikel/'.$data->id_berita) ?>" class="btn purple">
										<span><?= $data->judul ?> </span>
										<em>
										</a>
									</div>
								<?php endforeach; ?>
								</div>
								<!--end col-md-3-->
							</div>
							<div class="space20">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>