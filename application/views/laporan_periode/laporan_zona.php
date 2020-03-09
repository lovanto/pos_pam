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
  <center><h5>Laporan  
    <?php
      $zonaCari = isset($_GET['zonaCari']) ? $_GET['zonaCari'] : '';
      if($zonaCari == "1" OR $zonaCari == NULL){
        $zonaCari = "Semua Zona";
      }
      echo $zonaCari;
    ?>
  </h5></center>
  <br><br>
    <form action="<?php echo site_url('page/cariZona');?>" method="get">
      <input type="text" name="cari" class="form-control" id="diprint" placeholder="Zona atau Wilayah" style="margin-bottom:10px;" value="<?php echo (isset($_GET['cari'])) ? $_GET['cari'] : ''; ?>">
      <button type="submit" class="btn btn-primary " id="diprint">Cari Data</button> 
      <a href="<?php echo site_url('page/cariZona?zona=1'); ?>" class="btn btn-danger" id="diprint" style="text-decoration:none; color: black;">Reset</a>
      <button href="#" onclick="myFunction()" target="_blank" type="submit" id="diprint" class="btn btn-info diprint">Cetak data</button>
    </form><center>
        <br>
  <table border="1" class="table table-striped table-bordered" id="dataTable">
    <tr>
      <th>No</th>
      <th>Zona</th>
      <th>Wilayah</th>
      <th>Kategori</th>
      <th>Tarif</th>
    </tr>
    <?php
      if(count($zona)>0){
        $no = 1;
        foreach($zona as $k){?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $k->zona; ?></td>
      <td><?php echo $k->wilayah; ?></td>
      <td><?php echo $k->kategori; ?></td>
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