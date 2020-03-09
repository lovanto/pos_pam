<html>
<head>
  <title>Laporan Data Pengguna Aplikasi</title>
   <style type="text/css">
     @media print{
        #diprint{
                display: none;
            }
     }
   </style>
</head>
<body>
  <div style="margin: 2rem;">
  <center><h5>Laporan Data Pengguna Aplikasi</h5></center>
  <br><br>
    <form action="<?php echo site_url('page/cari');?>" method="get">
      <input type="text" name="cari" class="form-control " id="diprint"  placeholder="Nama User atau Username" value="<?php echo (isset($_GET['cari'])) ? $_GET['cari'] : ''; ?>">
      <br>
      <button type="submit" class="btn btn-primary" id="diprint">Cari Data</button> 
      <a href="<?php echo site_url('page/cari'); ?>" class="btn btn-danger" id="diprint" style="text-decoration:none; color: black;">Reset</a>
      <button href="#" onclick="myFunction()" target="_blank" type="submit" id="diprint" class="btn btn-info diprint">Cetak data</button>
    </form><center>
        <br>
  <table border="1" class="table table-striped table-bordered" id="dataTable">
    <tr>
      <th>No</th>
      <th>Username</th>
      <th>Nama</th>
      <th>Password</th>
      <th>Role</th>
      <th>Keterangan Role</th>
    </tr>
    <?php
      if(count($login)>0){
        $no = 1;
        foreach($login as $k){?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $k->username; ?></td>
      <td><?php echo $k->nama_user; ?></td>
      <td><?php echo $k->password; ?></td>
      <td><?php echo $k->id_level; ?></td>
      <td><?php echo $k->nama_level; ?></td>
    </tr>
  <?php }}else{ ?>
    <tr>
      <td colspan="5" align="center">Tidak Ada Data.</td>
    </tr>
  <?php } ?>
</table></center>
<br/>
  <?php 
  echo $this->pagination->create_links();
  ?>
  </div>
</body>
</html>