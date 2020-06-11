    <div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flash_sukses'); ?>"></div>
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('flash_gagal'); ?>"></div>
    <?php
    $this->session->userdata('authenticated')
    //$this->session->set_userdata($session);
    ?>
    <div class="row">
      <!-- <div class="col py-2">
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Pelanggan
          </button>
        </div> -->
    </div>

    <div class="row">
      <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <div class="card-header bg-gray-500">Form Input Pelanggan</div>
            <div class="card-body">
              <form method="post" accept-charset="utf-8" enctype="multipart/form-data" action="<?= base_url('page_checker/pelanggan_tambah'); ?>">

                <div class="form-group">
                  <label>No_Pelanggan</label>
                  <input type="text" class="form-control form-control-user" id="no_pelanggan" name="no_pelanggan" placeholder="Masukan Nomor Kartu Pelanggan" required>
                  <label>Nama Pelanggan</label>
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukan Nama Pelanggan" required>
                  <label>Alamat</label>
                  <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukan Alamat Pelanggan" required>
                  <label>Email</label>
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Kosongkan Jika Tidak ada" required>
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" placeholder="pilih tanggal lahir" required>
                  <label>Jenis Kelamin</label>
                  <select name="jk" class="form-control form-control-user" required>
                    <option value="-">-pilihan-</option>
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
                  </select>
                  <label>No KTP/SIM</label>
                  <input type="text" class="form-control form-control-user" id="no_ktp" name="no_ktp" placeholder="Masukan No KTP atau SIM" required>
                  <label>No Telepon</label>
                  <input type="text" class="form-control form-control-user" id="no_telp" name="no_telp" placeholder="Masukan Nomor telepon" required>
                  <label>Telepon Rumah</label>
                  <input type="text" class="form-control form-control-user" id="telp_rumah" name="telp_rumah" placeholder="Kosongkan Jika Tidak ada" required>
                  <label>Zona </label>
                  <td>
                    <?php
                    $a = mysqli_connect("localhost", "root", "", "pam_v1");
                    $result = mysqli_query($a, "select * from zona order by zona asc");
                    $jsArray = "var Nama_prd1 = new Array();";
                    echo '<select name="zona" onchange="changeValue(this.value)" class="form-control form-control-user">';
                    echo '<option>---Pilih zona----</option>';
                    while ($row = mysqli_fetch_array($result)) {
                      echo '<option value="' . $row['zona'] . '">' . $row['zona'] . '</option>';
                      $jsArray .= "Nama_prd1['" . $row['zona'] . "'] = {name:'" . addslashes($row['tarif']) . "',desc:'" . addslashes($row['kategori']) . "'};";
                    }
                    echo '</select>';
                    ?>
                    <script type="text/javascript">
                      <?php echo $jsArray; ?>

                      function changeValue(id) {
                        document.getElementById('tarif').value = Nama_prd1[id].name;
                        document.getElementById('kategori').value = Nama_prd1[id].desc;
                      };
                    </script>
                    <label>Tarif /Meter</label>
                    <input type="text" class="form-control form-control-user" id="tarif" name="tarif" placeholder="Masukan Tarif" required>
                    <label>Kategori</label>
                    <input type="text" class="form-control form-control-user" id="kategori" name="kategori" placeholder="Masukan Kategori" required>
                    <label>Pemakaian / Meter</label>
                    <input type="text" class="form-control form-control-user" id="pakai_meter" name="pakai_meter" placeholder="Masukan Pemakaian awal" required>
                    <label>Tanggal Registrasi</label>
                    <input type="date" class="form-control form-control-user" id="tgl_reg" name="tgl_reg" placeholder="Masukan Tanggal Registrasi" required>
                    <label>Status</label>
                    <select name="status" class="form-control form-control-user" required>
                      <option value="-">-pilihan-</option>
                      <option value="Aktif">Aktif</option>
                      <option value="Tidak Aktif">Tidak aktif</option>
                    </select>
                    <input type="hidden" class="form-control" id="user_create" name="user_create" value="<?= $this->session->userdata('nama_user'); ?>" required>
                    <input name="create_date" type="hidden" id="create_date" value=" <?php echo date('Y-m-d'); ?> " readonly>
                </div>
                <div class="container">
                  <h2>Diisi Jika Pelanggan Baru</h2>
                  <div class="card">
                    <!-- <div class="card-header">Header</div> -->
                    <div class="card-body">
                      <label>Biaya Instalasi</label>
                      <input type="text" class="form-control form-control-user" id="biaya_instalasi" name="biaya_instalasi" placeholder="Masukan Biaya Instalasi" required>
                      <label>Pegawai Instalasi </label>
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
                    </div>

                  </div>
                </div>
                <div class="card-footer">
                  <b><a href="<?= base_url('page_checker/form_i_pelanggan'); ?>">import data</a></b>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save">&nbsp;&nbsp;Simpan</i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="collapse multi-collapse show" id="multiCollapseExample2">
          <div class="card shadow-lg">
            <div class="card-header bg-gray-500">Data Tabel Pelanggan</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-info text-white">
                    <tr class="text-center">
                      <th>No </th>
                      <th>No Pelanggan </th>
                      <th>Nama </th>
                      <th>Alamat </th>
                      <th>Email </th>
                      <th>Tanggal Lahir </th>
                      <th>Gender</th>
                      <th>No Identitas</th>
                      <th>No Telp</th>
                      <th>Telp Rumah</th>
                      <th>Zona</th>
                      <th>Tarif</th>
                      <th>Kategori</th>
                      <th>Pemakaian/Meter</th>
                      <th>Tgl Registrasi</th>
                      <th>Status</th>
                      <th>Biaya Instalasi</th>
                      <th>Petugas Instalasi</th>
                      <th>User Create</th>
                      <th>Create Date</th>
                      <th>User Update</th>
                      <th>Update Date</th>
                      <!--            <th>Aksi</th> -->
                      <th>Cetak </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    foreach ($cstm as $s) : $no++; ?>
                      <tr>
                        <td class="text-center text-middle"><?= $no; ?></td>
                        <td class="text-middle"><?= $s['no_pelanggan']; ?></td>
                        <td class="text-middle"><?= $s['nama']; ?></td>
                        <td class="text-middle"><?= $s['alamat']; ?></td>
                        <td class="text-middle"><?= $s['email']; ?></td>
                        <td class="text-middle"><?= $s['tgl_lahir']; ?></td>
                        <td class="text-middle"><?= $s['jk']; ?></td>
                        <td class="text-middle"><?= $s['no_ktp']; ?></td>
                        <td class="text-middle"><?= $s['no_telp']; ?></td>
                        <td class="text-middle"><?= $s['telp_rumah']; ?></td>
                        <td class="text-middle"><?= $s['zona']; ?></td>
                        <td class="text-middle"><?= $s['tarif']; ?></td>
                        <td class="text-middle"><?= $s['kategori']; ?></td>
                        <td class="text-middle"><?= $s['pakai_meter']; ?></td>
                        <td class="text-middle"><?= $s['tgl_reg']; ?></td>
                        <td class="text-middle"><?= $s['status']; ?></td>
                        <td class="text-middle"><?= $s['biaya_instalasi']; ?></td>
                        <td class="text-middle"><?= $s['nama_pegawai']; ?></td>
                        <td class="text-middle"><?= $s['user_create']; ?></td>
                        <td class="text-middle"><?= $s['create_date']; ?></td>
                        <td class="text-middle"><?= $s['user_update']; ?></td>
                        <td class="text-middle"><?= $s['update_date']; ?></td>
                        <!-- <td class="text-center text-middle"><a href="<?= base_url('page_checker/pelanggan_ubah') ?>/<?= $s['id']; ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit text-success"></i></a> | <a href="<?= base_url('page_checker/pelanggan_hapus') ?>/<?= $s['id']; ?>" class="tombol_hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash text-danger"></i></a>
                        </td> -->
                        <td><a href="<?= base_url('page_checker/cetak_pelanggan') ?>/<?= $s['no_pelanggan']; ?>" target="_blank" class="btn btn-success btn-sm">cetak</a>
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