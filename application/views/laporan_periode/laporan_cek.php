<html>
<head>
  <title>Laporan Cek Meteran</title>
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
  <center><h5>Laporan Cek Meteran 
    <?php
      $metode = isset($_GET['metode']) ? $_GET['metode'] : '';
      if($metode == "1" OR $metode == NULL){
        $metode = "All Times";
      }
      echo $metode;
    ?>
  </h5></center>
  <br><br>
    <form action="<?php echo site_url('page/cariCekMeteran');?>" method="get">
      <input type="text" name="cari" class="form-control" id="diprint" placeholder="Nama Pelanggan atau Tanggal Cek" value="<?php echo (isset($_GET['cari'])) ? $_GET['cari'] : ''; ?>">
      <select name="metode" class="form-control" id="diprint" style="width: 300px; margin-top: 10px; margin-bottom: 10px;" required>
        <option value="1">Pilih metode print</option>
        <option value="Harian">Harian</option>
        <option value="Mingguan">Mingguan</option>
        <option value="Bulanan">Bulanan</option>
      </select>
      <input type="date" name="tanggal" class="form-control" style="width: 300px; margin-bottom: 10px;" value="<?php echo (isset($_GET['tanggal'])) ? $_GET['tanggal'] : ''; ?>">
      <button type="submit" class="btn btn-primary " id="diprint">Cari Data</button> 
      <a href="<?php echo site_url('page/cariCekMeteran?metode=1'); ?>" class="btn btn-danger" id="diprint" style="text-decoration:none; color: black;">Reset</a>
      <button href="#" onclick="myFunction()" target="_blank" type="submit" id="diprint" class="btn btn-info diprint">Cetak data</button>
    </form><center>
        <br>
  <table border="1" class="table table-striped table-bordered" id="dataTable">
    <tr>
      <th>No</th>
      <th>Tanggal Cek</th>
      <th>Nama Pelanggan</th>
      <th>ZONA</th>
      <th>Pakai Meter</th>
      <th>Catat Meter</th>
      <th>Total Biaya</th>
    </tr>
    <?php
      if(count($checker)>0){
        $no = 1;
        foreach($checker as $k){?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $k->tgl_cek; ?></td>
      <td><?php echo $k->nama; ?></td>
      <td><?php echo $k->zona; ?></td>
      <td><?php echo $k->pakai_meter; ?></td>
      <td><?php echo $k->catat_meter; ?></td>
      <td><?php echo $k->tarif; ?></td>
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