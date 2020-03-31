<html>

<head>
  <title>Laporan Data Pelanggan Aplikasi</title>
  <style type="text/css">
    #diprint2 {
      opacity: 0;
    }

    .minus {
      margin-top: -90px;
    }

    @media print {
      #diprint {
        display: none;
      }

      #diprint2 {
        opacity: 1;
      }

      @page {
        size: landscape;
      }

      .minus {
        margin-top: 20px;
      }

      .minus2 {
        margin-bottom: -40px;
      }

      body {
        font-size: 11px;
      }
    }
  </style>
</head>

<body style="overflow-y: auto;">
  <div class="row" id="diprint2">
    <div class="col-md-3" style="margin-left: 150px;">
      <img src="<?= base_url('assets/img/logo.png'); ?>" width="100px">
    </div>
    <div class="col-md-6" style="margin-left: 10px;">
      <div style="font-size: 30px;">PT. Tirta Kencana Alam</div>
      <div style="font-size: 20px;">Jl. Mandalaraya No 35, Bandung</div>
      <div style="font-size: 20px;">Telp. (022)-7326134</div>
    </div>
  </div>
  <div class="minus" style="margin-left: 20px; margin-right: 20px;">
    <center>
      <h5 class="minus2">Laporan Data Pelanggan Aplikasi</h5>
    </center>
    <br><br>
    <form action="<?php echo site_url('page/cariPelanggan'); ?>" method="get">
      <input type="text" name="cari" class="form-control " id="diprint" placeholder="Nama Pelanggan atau No.Pelanggan" value="<?php echo (isset($_GET['cari'])) ? $_GET['cari'] : ''; ?>">
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
          while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['zona'] . "'>" . $row['zona'] . " pada wilayah " . $row['wilayah'] . "</option>";
          }
          echo "</select>";
        }
        $conn->close();
        ?>
      </div>

      <button type="submit" class="btn btn-primary" id="diprint">Cari Data</button>
      <a href="<?php echo site_url('page/cariPelanggan'); ?>" class="btn btn-danger" id="diprint" style="text-decoration:none; color: black;">Reset</a>
      <button href="#" onclick="myFunction()" target="_blank" type="submit" id="diprint" class="btn btn-info diprint">Cetak data</button>
    </form>
    <center>
      <br>
      <table border="1" class="table table-striped table-bordered minus" id="dataTable">
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
        if (count($pelanggan) > 0) {
          $no = 1;
          foreach ($pelanggan as $k) { ?>
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
          <?php }
        } else { ?>
          <tr>
            <td colspan="5" align="center">Tidak Ada Data.</td>
          </tr>
        <?php } ?>
      </table>
    </center>
    <br />
    <?php
    echo $this->pagination->create_links();
    ?>
  </div>
  <div class="row" id="diprint2">
    <div class="col-md-11">
      <div style="font-size: 16px; float: right;">Bandung, <?= date('d-m-Y'); ?></div>
      <br><br><br><br><br>
      <div style="font-size: 16px; float: right;"><?= $this->session->userdata('nama_user') ?></div>
      <br><br>
    </div>
  </div>
</body>
</html>