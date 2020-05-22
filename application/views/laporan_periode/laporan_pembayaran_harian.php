<html>

<head>
  <title>Laporan Data Pembayaran</title>
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
        margin-bottom: -30px;
      }

      body {
        font-size: 11px;
      }
    }
  </style>
</head>

<body>
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
      <h5 class="minus2">Laporan Data Pembayaran
        <?php
        $metode = isset($_GET['metode']) ? $_GET['metode'] : '';
        $tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : '';
        if ($metode == "1" or $metode == NULL) {
          $metode = "All Times";
          echo $metode;
        } else if ($metode == "Harian") {
          echo $metode . " Pada " . $tanggal;
        } else if ($metode == "Mingguan") {
          echo $metode . " Sejak " . $tanggal . " Sampai " . date('Y-m-d', strtotime($tanggal . ' + 7 days'));
        } else if ($metode == "Bulanan") {
          echo $metode . " Sejak " . $tanggal . " Sampai " . date('Y-m-d', strtotime($tanggal . ' + 30 days'));
        } else {
          echo "Hmm...";
        }
        ?>
      </h5>
    </center>
    <br><br>
    <form action="<?php echo site_url('page/cariPembayaran'); ?>" method="get">
      <input type="text" name="cari" class="form-control" id="diprint" placeholder="Nama Pelanggan atau Nomor Transaksi" value="<?php echo (isset($_GET['cari'])) ? $_GET['cari'] : ''; ?>">
      <select name="metode" class="form-control" id="diprint" style="width: 300px; margin-top: 10px; margin-bottom: 10px;" required>
        <option value="1">Pilih metode print</option>
        <option value="Harian">Harian</option>
        <option value="Mingguan">Mingguan</option>
        <option value="Bulanan">Bulanan</option>
      </select>
      <input type="date" name="tanggal" id="diprint" class="form-control" style="width: 300px; margin-bottom: 10px;" value="<?php echo (isset($_GET['tanggal'])) ? $_GET['tanggal'] : ''; ?>">
      <button type="submit" class="btn btn-primary " id="diprint">Cari Data</button>
      <a href="<?php echo site_url('page/cariPembayaran?metode=1'); ?>" class="btn btn-danger" id="diprint" style="text-decoration:none; color: black;">Reset</a>
      <button href="#" onclick="myFunction()" target="_blank" type="submit" id="diprint" class="btn btn-info diprint">Cetak data</button>
    </form>
    <center>
      <br>
      <table border="1" class="table table-striped table-bordered" id="dataTable">
        <tr>
          <th>No</th>
          <th>No Transaksi</th>
          <th>Tanggal Jatuh Tempo</th>
          <th>Nama Pelanggan</th>
          <th>Total Biaya</th>
          <th>Tanggal Bayar</th>
          <th>Kasir</th>
          <th>Status</th>
        </tr>
        <?php
        if (count($pembayaran) > 0) {
          $no = 1;
          foreach ($pembayaran as $k) { ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $k->no_transaksi; ?></td>
              <td><?php echo $k->tgl_bayar; ?></td>
              <td><?php echo $k->nama; ?></td>
              <td><?php echo $k->grand_total; ?></td>
              <td><?php echo $k->update_date; ?></td>
              <td><?php echo $k->user_update; ?></td>
              <td>
                <?php
                if ($k->user_update != NULL) {
                  echo "Sudah Bayar";
                } else {
                  echo "Belum Bayar";
                }
                ?>
              </td>
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