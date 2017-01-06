<div>
	<u><h3>Data Laporan Data Buku</h3></u>
</div>
<div>
	<table style="width: 100%" border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Siswa</th>
				<th>Nama Buku</th>
				<th>Tanggal Peminjaman</th>
				<th>Tanggal Kembali</th>
			</tr>
		</thead>

		<tbody>
		<?php $i = 0; foreach ($peminjaman_data as $data) : ?>
			<tr>
				<td><?= ++$i ?></td>
				<td><?= $this->anggota_model->get_data_byId_anggota($data->id_anggota)->nama ?></td>
				<td><?= $this->buku_model->get_data_byId_buku($data->no_buku)->judul ?></td>
				<td><?php
						$a = explode("-",$data->tanggal_pinjam);
						echo $a[2]."-".$a[1]."-".$a[0] ?></td>
				<td><?php
						$a = explode("-",$data->tanggal_kembali);
						echo $a[2]."-".$a[1]."-".$a[0] ?></td>
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