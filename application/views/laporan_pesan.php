<div>
	<u><h3>Data Laporan Pemesanan Buku</h3></u>
</div>
<div>
	<table style="width: 100%" border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Siswa</th>
				<th>Nama Buku</th>
				<th>Penulis</th>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
		<?php $i = 0; foreach ($pemesanan_data as $data) : ?>
			<tr>
				<td><?= ++$i ?></td>
				<td><?= $this->anggota_model->get_data_byId_anggota($data->id_anggota)->nama ?></td>
				<td><?= $data->judul ?></td>
				<td><?= $data->penulis ?></td>
				<td><?php
						if ($data->pesan != '2') {
						 	echo "Buku Telah ada";
						 }
						else echo "Sedang Diproses";
					?>
				</td>
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