    <div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flash_sukses'); ?>"></div>
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('flash_gagal'); ?>"></div>
    <?php
    $this->session->userdata('authenticated')
    //$this->session->set_userdata($session);
    ?>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header bg-gray-500">Form Ganti Password</div>
          <div class="card-body">
            <form method="post" accept-charset="utf-8" enctype="multipart/form-data" action="<?= base_url('page_pelanggan/gantiPasswordNow'); ?>">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control form-control-user" value="<?= $this->session->userdata('username'); ?>" id="username" name="username" placeholder="Username" readonly>
                <label>Password</label>
                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan Password Baru" required>
                <label>Nama</label>
                <input type="text" class="form-control form-control-user" value="<?= $this->session->userdata('nama_user'); ?>" id="nama_user" name="nama_user" placeholder="nama User" readonly>
                <label>Role-(hak-akses)</label>
                <select name="id_level" class="form-control form-control-user" readonly>
                  <option value="-">-pilihan-</option>
                  <option value="1" <?php
                                    if ($this->session->userdata('id_level') == 1) {
                                      echo "selected";
                                    }
                                    ?>>Admin</option>
                  <option value="2" <?php
                                    if ($this->session->userdata('id_level') == 2) {
                                      echo "selected";
                                    }
                                    ?>>Checker</option>
                  <option value="3" <?php
                                    if ($this->session->userdata('id_level') == 3) {
                                      echo "selected";
                                    }
                                    ?>>Owner</option>
                  <option value="4" <?php
                                    if ($this->session->userdata('id_level') == 4) {
                                      echo "selected";
                                    }
                                    ?>>Pelanggan</option>
                </select>
                <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?= $this->session->userdata('id_user'); ?>" required>
                <input type="hidden" class="form-control" id="user_update" name="user_update" value="<?= $this->session->userdata('nama_user'); ?>" required>
                <input name="update_date" type="hidden" id="update_date" value=" <?php echo date('Y-m-d'); ?> " readonly>
              </div>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save">&nbsp;&nbsp;Simpan</i></button>
            </form>
          </div>
        </div>
      </div>
    </div>