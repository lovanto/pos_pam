<html>

<head>
  <title>Laporan Cek Meteran</title>
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
      <h5 class="minus2">Laporan
        <?php
        $zonaCari = isset($_GET['zonaCari']) ? $_GET['zonaCari'] : '';
        if ($zonaCari == "1" or $zonaCari == NULL) {
          $zonaCari = "Semua Zona";
        }
        echo $zonaCari;
        ?>
      </h5>
    </center>
    <br><br>
    <form action="<?php echo site_url('page/cariZona'); ?>" method="get">
      <input type="text" name="cari" class="form-control" id="diprint" placeholder="Zona atau Wilayah" style="margin-bottom:10px;" value="<?php echo (isset($_GET['cari'])) ? $_GET['cari'] : ''; ?>">
      <button type="submit" class="btn btn-primary " id="diprint">Cari Data</button>
      <a href="<?php echo site_url('page/cariZona?zona=1'); ?>" class="btn btn-danger" id="diprint" style="text-decoration:none; color: black;">Reset</a>
      <button href="#" onclick="myFunction()" target="_blank" type="submit" id="diprint" class="btn btn-info diprint">Cetak data</button>
    </form>
    <center>
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
        if (count($zona) > 0) {
          $no = 1;
          foreach ($zona as $k) { ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $k->zona; ?></td>
              <td><?php echo $k->wilayah; ?></td>
              <td><?php echo $k->kategori; ?></td>
              <td><?php echo $k->tarif; ?></td>
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