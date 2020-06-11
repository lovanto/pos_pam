<div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flash_sukses'); ?>"></div>
<div class="flash-data2" data-flashdata="<?= $this->session->flashdata('flash_gagal'); ?>"></div>
<?php
$this->session->userdata('authenticated')
//$this->session->set_userdata($session);
?>
<div class="row" style="margin: 0.5rem;">
  <div class="col py-2">
    <button class="btn btn-info" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah penanganan
    </button>
  </div>
</div>

<div class="row" style="margin: 1rem;">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card">
        <div class="card-header bg-gray-500">Form Input penanganan</div>
        <div class="card-body">
          <form method="post" accept-charset="utf-8" enctype="multipart/form-data" action="<?= base_url('page/penanganan_tambah'); ?>">

            <div class="form-group">
              <label>No_penanganan</label>
              <input type="text" class="form-control form-control-user" id=no_penanganan" name="no_penanganan" placeholder="Masukan no penanganan" required>
              <label>Tgl_penanganan</label>
              <input type="date" class="form-control form-control-user" id="tgl" name="tgl" placeholder="Masukan tanggal penanganan" required>
              <label>No Pengaduan</label>
              <?php
              $a = mysqli_connect("localhost", "root", "", "pam_v1");
              $result = mysqli_query($a, "select * from pengaduan order by no_pengaduan asc");
              $jsArray = "var Nama_prd1 = new Array();";
              echo '<select name="no_pengaduan" onchange="changeValue(this.value)" class="form-control form-control-user">';
              echo '<option>---Pilih No pengaduan----</option>';
              while ($row = mysqli_fetch_array($result)) {
                echo '<option value="' . $row['no_pengaduan'] . '">' . $row['no_pengaduan'] . '</option>';
                $jsArray .= "Nama_prd1['" . $row['no_pengaduan'] . "'] = {name:'" . addslashes($row['tarif']) . "',desc:'" . addslashes($row['kategori']) . "'};";
              }
              echo '</select>';
              ?>
              <label>Petugas </label>
              <?php
              $a = mysqli_connect("localhost", "root", "", "pam_v1");
              $result = mysqli_query($a, "select * from Pegawai order by nama_pegawai asc");
              $jsArray = "var Nama_prd1 = new Array();";
              echo '<select name="nama_pegawai" onchange="changeValue(this.value)" class="form-control form-control-user">';
              echo '<option>---Pilih nama_pegawai----</option>';
              while ($row = mysqli_fetch_array($result)) {
                echo '<option value="' . $row['nama_pegawai'] . '">' . $row['nama_pegawai'] . '</option>';
                $jsArray .= "Nama_prd1['" . $row['nama_pegawai'] . "'] = {name:'" . addslashes($row['tarif']) . "',desc:'" . addslashes($row['kategori']) . "'};";
              }
              echo '</select>';
              ?>
              <label>Biaya Perbaikan</label>
              <input type="text" class="form-control form-control-user" id="biaya_perbaikan" name="biaya_perbaikan" placeholder="Masukan biaya_perbaikan" required>

              <input type="hidden" class="form-control" id="user_create" name="user_create" value="<?= $this->session->userdata('nama_user'); ?>" required>
              <input name="create_date" type="hidden" id="create_date" value=" <?php echo date('Y-m-d'); ?> " readonly>

            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save">&nbsp;&nbsp;Simpan</i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="margin: 1rem;">
  <div class="col">
    <div class="collapse multi-collapse show" id="multiCollapseExample2">
      <div class="card shadow-lg">
        <div class="card-header bg-gray-500">Data Tabel Penanganan Pelanggan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead class="bg-info text-white">
                <tr class="text-center">
                  <th>No </th>
                  <th>No Penanganan</th>
                  <th>Tanggal penanganan</th>
                  <th>No Pengaduan</th>
                  <th>Nama Petugas</th>
                  <th>Biaya Perbaikan </th>
                  <th>User Create</th>
                  <th>Create Date</th>
                  <th>User Update</th>
                  <th>Update Date</th>
                  <th>Aksi </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($penanganan as $s) : $no++; ?>
                  <tr>
                    <td class="text-center text-middle"><?= $no; ?></td>
                    <td class="text-middle"><?= $s['no_penanganan']; ?></td>
                    <td class="text-middle"><?= $s['tgl']; ?></td>
                    <td class="text-middle"><?= $s['no_pengaduan']; ?></td>
                    <td class="text-middle"><?= $s['nama_pegawai']; ?></td>
                    <td class="text-middle"><?= $s['biaya_perbaikan']; ?></td>
                    <td class="text-middle"><?= $s['user_create']; ?></td>
                    <td class="text-middle"><?= $s['create_date']; ?></td>
                    <td class="text-middle"><?= $s['user_update']; ?></td>
                    <td class="text-middle"><?= $s['update_date']; ?></td>
                    <td class="text-center text-middle"><a href="<?= base_url('page/penanganan_ubah') ?>/<?= $s['id']; ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit text-success"></i></a> | <a href="<?= base_url('page/penanganan_hapus') ?>/<?= $s['id']; ?>" class="tombol_hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>