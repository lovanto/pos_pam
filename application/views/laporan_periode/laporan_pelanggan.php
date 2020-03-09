<html>
<head>
  <title>Laporan Data Pelanggan Aplikasi</title>
   <style type="text/css">
     @media print{
        #diprint{
                display: none;
            }
        @page{
          size: landscape;
        }
     }
   </style>
</head>
<body style="overflow-y: auto;">
  <div style="margin: 2rem;">
  <center><h5>Laporan Data Pelanggan Aplikasi</h5></center>
  <br><br>
    <form action="<?php echo site_url('page/cariPelanggan');?>" method="get">
      <input type="text" name="cari" class="form-control " id="diprint"  placeholder="Nama Pelanggan atau No.Pelanggan" value="<?php echo (isset($_GET['cari'])) ? $_GET['cari'] : ''; ?>">
      <div class="form-group">
        <?php
    // start of dbcon
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pam_v1";


    $conn = new mysqli($servername, $username, $password, $dbname);
    //end of dbcon

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM zona";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<select name='zonaCari' class='form-control' id='diprint' style='width: 300px; margin-top: 10px;' required>";
        echo "<option value='1'>Pilih Zona</option>";
        while($row = $result->fetch_assoc()) {
          echo "<option value='" . $row['zona'] . "'>" . $row['zona']. " pada wilayah ".$row['wilayah']. "</option>";
        }
        echo "</select>";
    } 
    $conn->close();
    ?>
</div>

      <button type="submit" class="btn btn-primary" id="diprint">Cari Data</button> 
      <a href="<?php echo site_url('page/cari'); ?>" class="btn btn-danger" id="diprint" style="text-decoration:none; color: black;">Reset</a>
      <button href="#" onclick="myFunction()" target="_blank" type="submit" id="diprint" class="btn btn-info diprint">Cetak data</button>
    </form><center>
        <br>
  <table border="1" class="table table-striped table-bordered" id="dataTable">
    <tr>
      <th>No</th>
      <th>Kode Pelanggan</th>
      <th>No.KTP</th>
      <th>Nama Pelanggan</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Email</th>
      <th>No.Telp</th>
      <th>Zona</th>
      <th>Alamat</th>
      <th>Kategori</th>
      <th>Status</th>
    </tr>
    <?php
      if(count($pelanggan)>0){
        $no = 1;
        foreach($pelanggan as $k){?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $k->no_pelanggan; ?></td>
      <td><?php echo $k->no_ktp; ?></td>
      <td><?php echo $k->nama; ?></td>
      <td><?php echo $k->tgl_lahir; ?></td>
      <td><?php echo $k->jk; ?></td>
      <td><?php echo $k->email; ?></td>
      <td><?php echo $k->no_telp; ?></td>
      <td><?php echo $k->zona; ?></td>
      <td><?php echo $k->alamat; ?></td>
      <td><?php echo $k->kategori; ?></td>
      <td><?php echo $k->status; ?></td>
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