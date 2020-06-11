<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card shadow-lg">
        <div class="card-header bg-gray-500">Data Tabel Pelanggan</div>
        <div class="card-body">
          <form method="POST" action="<?= base_url('page/pelanggan_edit'); ?>">
            <div class="modal-body">
              <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= $cstm['id']; ?>">
                <label class="control-label">No Pelanggan</label>
                <input type="text" class="form-control" id="no_pelanggan" name="no_pelanggan" placeholder="Masukan No Pelanggan" value="<?= $cstm['no_pelanggan']; ?>" required>
                <label class="control-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pelanggan" value="<?= $cstm['nama']; ?>" required>
                <label class="control-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan No Pelanggan" value="<?= $cstm['alamat']; ?>" required>
                <label class="control-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukan No Email" value="<?= $cstm['email']; ?>" required>
                <label class="control-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" value="<?= $cstm['tgl_lahir']; ?>" required>
                <label>Jenis Kelamin</label>
                <select name="jk" class="form-control form-control-user" required>
                  <option value="-">-pilihan-</option>
                  <option value="laki-laki" <?php
                                            if ($cstm['jk'] == "laki-laki") {
                                              echo "selected";
                                            }
                                            ?>>laki-laki</option>
                  <option value="perempuan" <?php
                                            if ($cstm['jk'] == "perempuan") {
                                              echo "selected";
                                            }
                                            ?>>perempuan</option>
                </select>
                <label class="control-label">No KTP/SIM</label>
                <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukan NO KTP" value="<?= $cstm['no_ktp']; ?>" required>
                <label class="control-label">No Telpon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukan No Telpon" value="<?= $cstm['no_telp']; ?>" required>
                <label class="control-label">Telepon Rumah</label>
                <input type="text" class="form-control" id="telp_rumah" name="telp_rumah" placeholder="Masukan No Telpon Rumah" value="<?= $cstm['telp_rumah']; ?>" required>
                <label class="control-label">Zona</label>
                <input type="text" class="form-control" id="zona" name="zona" placeholder="Masukan Zona" value="<?= $cstm['zona']; ?>" required>
                <label class="control-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukan Kategori Pelanggan" value="<?= $cstm['kategori']; ?>" required>
                <label class="control-label">Tarif / Meter </label>
                <input type="text" class="form-control" id="tarif" name="tarif" placeholder="tarif pemakaian " value="<?= $cstm['tarif']; ?>" required>
                <label class="control-label">Pemakaian / Meter</label>
                <input type="text" class="form-control" id="pakai_meter" name="pakai_meter" placeholder="Masukan Zona" value="<?= $cstm['pakai_meter']; ?>" required>
                <label class="control-label">Tanggal Registrasi</label>
                <input type="date" class="form-control" id="tgl_reg" name="tgl_reg" placeholder="Masukan tgl registrasi" value="<?= $cstm['tgl_reg']; ?>" required>
                <label>Status</label>
                <select name="status" class="form-control form-control-user" required>
                  <option value="#" <?php
                                    if ($cstm['status'] == "#") {
                                      echo "selected";
                                    }
                                    ?>>-Pilihan-</option>
                  <option value="Aktif" <?php
                                        if ($cstm['status'] == "Aktif") {
                                          echo "selected";
                                        }
                                        ?>>Aktif</option>
                  <option value="Tidak Aktif" <?php
                                              if ($cstm['status'] == "Tidak Aktif") {
                                                echo "selected";
                                              }
                                              ?>>Tidak aktif</option>
                </select>
                <input type="hidden" class="form-control" id="user_update" name="user_update" value="<?= $this->session->userdata('nama_user'); ?>" required>
                <input name="update_date" type="hidden" id="update_date" value=" <?php echo date('Y-m-d'); ?> " readonly>
              </div>
            </div>
            <div class="container">
              <h2>Diisi Jika Pelanggan Baru</h2>
              <div class="card">
                <!-- <div class="card-header">Header</div> -->
                <div class="card-body">
                  <label>Biaya Instalasi</label>
                  <input type="text" class="form-control form-control-user" id="biaya_instalasi" value="<?= $cstm['biaya_instalasi']; ?>" name="biaya_instalasi" placeholder="Masukan Biaya Instalasi">
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
                <div class="modal-footer">
                  <a href="<?= base_url('page/pelanggan'); ?>" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-undo"></i>&nbsp;&nbsp;Batal&nbsp;</a>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;&nbsp;Update</button>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>