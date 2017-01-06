<div>
	<u><h3>Data Laporan Data Buku</h3></u>
</div>
<div>
	<table style="width: 100%" border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Buku</th>
				<th>Kategori</th>
				<th>Penerbit</th>
				<th>Penulis</th>
				<th>Tahun Terbit</th>
				<th>ISBN</th>
			</tr>
		</thead>

		<tbody>
		<?php $i = 0; foreach ($buku_data as $data) : ?>
			<tr>
				<td><?= ++$i ?></td>
				<td><?= $data->judul ?></td>
				<td><?= $this->kategori_model->get_data_byId_kategori($data->id_kategori)->nama ?></td>
				<td><?= $data->penerbit ?></td>
				<td><?= $data->penulis ?></td>
				<td><?= $data->tahun_terbit ?></td>
				<td><?= $data->ISBN ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
<br>
<br>
<br>
<div>
<table>
	<thead>
		<tr>
			<th>Hormat Kami,</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Admin Perpustakaan</td>
		</tr>
	</tbody>
</table>
</div>