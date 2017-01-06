		<div class="container">
			<div class="portlet light">
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-12 news-page blog-page">
							<div class="row">
								<div class="col-md-9 blog-tag-data">
									<h3 style="margin-top:0">Recent News</h3>
									<img src="<?= base_url('gambar/'.$berita->head) ?>" class="img-responsive" alt="">
									<br><br>
									<div class="row">
										<div class="col-md-6 blog-tag-data-inner">

											<h3 style="margin-top:0"><?= $berita->judul ?></h3>
											<ul class="list-inline">
												<li>
													<i class="fa fa-calendar"></i>
													<a href="javascript:;">
													<?= $berita->tanggal ?> </a>
												</li>
												<li>
													<i class="fa fa-user"></i>
													<a href="javascript:;">
													<?= $berita->penulis ?> </a>
												</li>
											</ul>
										</div>
									</div>
									<div class="news-item-page">
										<p>
										<?= $berita->isi ?>
										</p>
									</div>
									<hr>
									<!--end media-->
									<hr>
								</div>
								<div class="col-md-3">
									<h3 style="margin-top:0">News Feeds</h3>
									<div class="top-news">
										<?php foreach ($news as $row) : ?>
										<a href="<?= base_url('home/artikel/'.$row->id_berita) ?>" class="btn green">
										<span>
										<?= $row->judul ?> </span>
										<em>Posted on: <?= $row->tanggal ?></em>
										<em>
										<i class="fa fa-tags"></i>
										<?= $row->penulis ?> </em>
										<i class="fa fa-book top-news-icon"></i>
										</a>
									<?php endforeach; ?>
									</div>
									<div class="space20">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>