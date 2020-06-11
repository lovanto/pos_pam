<!DOCTYPE html>
<html>

<head>
	<base href="<?php echo base_url() ?>">
	<title>Cetak Data User</title>
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
		<h4>Laporan Data User</h4>
		<?php
		$rs = $data->row();
		?>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<tr>
						<th>Username</th>
						<th>:</th>
						<td><?php echo $rs->username; ?></td>
					</tr>
					<tr>
						<th>Tgl Create</th>
						<th>:</th>
						<td><?php echo $rs->create_date; ?></td>
					</tr>
				</table>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered" style="margin-bottom: 10px">
					<thead>
						<tr>
							<th>No.</th>
							<th>Username</th>
							<th>Password</th>
							<th>Nama</th>
							<th>Hak_akses</th>
							<th>User Create</th>
							<th>Tgl Create</th>
							<th>User Update</th>
							<th>Tgl Update</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$rs = $data->row();
						$no = 1;
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $rs->username; ?></td>
							<td><?php echo $rs->password; ?></td>
							<td><?php echo $rs->nama_user; ?></td>
							<td><?php echo $rs->id_level; ?></td>
							<td><?php echo $rs->user_create; ?></td>
							<td><?php echo $rs->create_date; ?></td>
							<td><?php echo $rs->user_update; ?></td>
							<td><?php echo $rs->update_date; ?></td>
						</tr>


					</tbody>
				</table>

				<div style="text-align: right;">
					<p>Bandung, <?php echo date('d/m/Y') ?></p>
					<br><br><br><br><br>
					<p><?= $this->session->userdata('nama'); ?></p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>