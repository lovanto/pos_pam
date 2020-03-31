<?=$this->session->flashdata('msg') ?>
<form action="<?=base_url('welcome/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" placeholder="Username bossq"></td>
		</tr>
		<tr>
			<td>Photo</td>
			<td><input type="file" name="photo"></td>
		</tr>
		<tr>
			<td><button type="submit" name="submit">Tambah</td>
		</tr>
	</table>
</form>
<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Photo</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<?php
		$no = 1;
		foreach ($user as $row): ?>
			<tr>
				<td><?$no++?></td>
				<td><?=$row->username?></td>
				<td>
					<img src="<?=base_url('assets/images/'.$row->photo)?>" style="width:300px; height:150">
				</td>
			</tr>
		<?php endforeach; ?>
		</tr>
	</tbody>
</table>