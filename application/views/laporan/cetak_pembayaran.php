<!DOCTYPE html>
<html>

<head>
	<base href="<?php echo base_url() ?>">
	<title>Cetak Data Pemakaian Pelanggan</title>
	<script>
		function Cetak() {

			window.print();

		}
		Cetak();
	</script>
	<link rel="stylesheet" type="text/css" href="assets/bootflat-admin/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<a class="navbar-brand" href="#"><img class="logo" src="<?= base_url('assets/img/logo.jpg'); ?>" alt="Logo" width="50" height="50"></a>
		<center>
			<p>
				<h4>PT.Tirta Kencana Alam</h4>
			</p>
			<p>Jl. Mandalaraya No 35, Bandung</p>
			<p>Telp. (022)-7326134</p>
		</center>
		<h4>Laporan Pembayaran</h4>
		<br>
		<?php
		$key = $pembayaran->row();
		?>
		<br>
		<br>
		<center>
			<h4> Laporan Pembayaran</h4>
		</center>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered" style="margin-bottom: 10px">
					<thead>
						<tr>
							<th>No.</th>
							<th>No Transaksi </th>
							<th>No Pelanggan</th>
							<th>Nama Pelanggan </th>
							<th>Zona </th>
							<th>Tarif </th>
							<th>Catat meter</th>
							<th>Jumlah Bayar</th>
							<th>Biaya Admin</th>
							<th>Denda</th>
							<th>Total Bayar</th>
							<th>Tanggal Bayar</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 0;
						foreach ($pembayaran->result_array() as $key) : $no++; ?>
							<tr class="gradeU">
								<td><?= $no; ?></td>
								<td><?php echo $key['no_transaksi'] ?></td>
								<td><?php echo $key['no_pelanggan'] ?></td>
								<td><?php echo $key['nama'] ?></td>
								<td><?php echo $key['zona'] ?></td>
								<td><?php echo $key['tarif'] ?></td>
								<td><?php echo $key['catat_meter'] ?></td>
								<td><?php echo $key['total_bayar'] ?></td>
								<td><?php echo $key['biaya_admin'] ?></td>
								<td><?php echo $key['denda'] ?></td>
								<td><?php echo $key['grand_total'] ?></td>
								<td><?php echo $key['tgl_bayar'] ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>

				<div style="text-align: right;">
					<p>Bandung, <?php echo date('d/m/Y') ?></p>
					<br><br><br><br><br>
					<p><?= $this->session->userdata('nama_user'); ?></p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>