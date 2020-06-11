<!DOCTYPE html>
<html>

<head>
	<base href="<?php echo base_url() ?>">
	<title>Cetak Data Pelanggan</title>
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
		<h4>Laporan Data Pelanggan</h4>
		<br>
		<?php
		$rs = $data->row();
		?>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<br>
					<br>
					<h4><b>
							<center> Data Pelanggan Tirta Kencana Alam </center>
						</b></h4>
					<br>
					<tr>
						<th>No Pelanggan</th>
						<th>:</th>
						<td><?php echo $rs->no_pelanggan; ?></td>
					</tr>
					<tr>
						<th>Nama Pelanggan</th>
						<th>:</th>
						<td><?php echo $rs->nama; ?></td>
					</tr>
					<tr>
						<th>Alamat</th>
						<th>:</th>
						<td><?php echo $rs->alamat; ?></td>
					</tr>
					<tr>
						<th>Email</th>
						<th>:</th>
						<td><?php echo $rs->email; ?></td>
					</tr>
					<tr>
						<th>Tgl Lahir</th>
						<th>:</th>
						<td><?php echo $rs->tgl_lahir; ?> </td>
					</tr>
					<tr>
						<th>Jenis kelamin</th>
						<th>:</th>
						<td><?php echo $rs->jk; ?></td>
					</tr>
					<tr>
						<th>No Identitas</th>
						<th>:</th>
						<td><?php echo $rs->no_ktp; ?></td>
					</tr>
					<tr>
						<th>No telepon</th>
						<th>:</th>
						<td><?php echo $rs->no_telp; ?></td>
					</tr>
					<tr>
						<th>Telp Rumah</th>
						<th>:</th>
						<td><?php echo $rs->telp_rumah; ?></td>
					</tr>
					<tr>
						<th>Zona</th>
						<th>:</th>
						<td><?php echo $rs->zona; ?></td>
					</tr>
					<tr>
						<th>Tarif</th>
						<th>:</th>
						<td><?php echo $rs->tarif; ?></td>
					</tr>
					<tr>
						<th>Kategori</th>
						<th>:</th>
						<td><?php echo $rs->kategori; ?></td>
					</tr>
					<tr>
						<th>Pakai Meter</th>
						<th>:</th>
						<td><?php echo $rs->pakai_meter; ?></td>
					</tr>
					<tr>
						<th>Tanggal Registrasi</th>
						<th>:</th>
						<td><?php echo $rs->tgl_reg; ?></td>
					</tr>
					<tr>
						<th>Status Pelanggan</th>
						<th>:</th>
						<td><?php echo $rs->status; ?></td>
					</tr>

				</table>
			</div>
		</div>

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