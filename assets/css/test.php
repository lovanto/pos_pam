<html>
<head>
<title>BAPUS</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="table-responsive">
</div>
<table class="table table-hover">
<tr bgcolor="blue">
<th>No</th>&nbsp;
<th>Nis</th>&nbsp;
<th>Nama</th>&nbsp;
<th>Kelas</th>&nbsp;
<th>Nilai pengetahuan</th>&nbsp;
<th>Nilai keterampilan</th>&nbsp;
<th>UTS</th>&nbsp;
<th>Action</th>&nbsp;
</tr>

<?php
include "koneksi/koneksi.php";
$sql="SELECT * FROM siswa INNER JOIN Nilai ON(siswa.Nis= nilai.Nis) ORDER BY siswa.Nis";
$test= mysql_query($sql);
while ($data= mysql_fetch_array($test)){
?>
<tr>
<td width="50px">
<?php echo ++$no_urut;?>
</td>
<td width="50px">
<?php echo $data ['Nis']; ?>
</td>
<td width="50px">
<?php echo $data ['Nama_Siswa']; ?>
</td>
<td width="50px">
<?php echo $data ['Kelas']; ?>
</td>
<td width="50px">
<?php echo $data ['Nilai_P']; ?>
</td>
<td width="50px">
<?php echo $data ['Nilai_K']; ?>
</td>
<td width="50px">
<?php echo $data ['Uts']; ?>


<td width="50px" class="text-center">
<a href="lihat.php?page=edit_password_user&user=<?php echo $data ['Nis'];?>" class="btn btn-primary btn-Ig active" > EDIT</a>
<a href="hapus-product.php?user=<?php echo $data ['Nama_Siswa']?>" class="btn btn-danger btn-Ig active">DELETE</a></td>

<?php
$i++;
}
?>
</body>
</html>



