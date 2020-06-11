<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card shadow-lg">
        <div class="card-header bg-gray-500">Data Tabel hasil Checker</div>
        <div class="card-body">
          <form method="POST" action="<?= base_url('page_checker/cek_edit'); ?>">
            <div class="modal-body">
              <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= $cek['id']; ?>">
                <label class="control-label">Tgl Cek</label>
                <input type="date" class="form-control" id="tgl_cek" name="tgl_cek" placeholder="Masukan tgl cek" value="<?= $cek['tgl_cek']; ?>" required>
                <label class="control-label">No Pelanggan</label>
                <input type="text" class="form-control" id="no_pelanggan" name="no_pelanggan" placeholder="Masukan no Pelanggan" value="<?= $cek['no_pelanggan']; ?>" required readonly>
                <label class="control-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama Pelanggan" value="<?= $cek['nama']; ?>" required readonly>
                <label class="control-label">Zona</label>
                <input type="text" class="form-control" id="zona" name="zona" placeholder="Masukan Zona" value="<?= $cek['zona']; ?>" required readonly>
                <label class="control-label">Tarif</label>
                <input type="text" class="form-control" id="tarif" name="tarif" placeholder="Masukan tarif" value="<?= $cek['tarif']; ?>" required readonly>
                <label class="control-label">Pemakaian / Meter </label>
                <input type="text" class="form-control" id="pakai_meter" name="pakai_meter" placeholder="pemakaian " value="<?= $cek['pakai_meter']; ?>" required readonly>
                <label class="control-label">Catat / Meter </label>
                <input type="text" class="form-control" id="catat_meter" name="catat_meter" placeholder="catat_meter" value="<?= $cek['catat_meter']; ?>" required>
                <input type="hidden" class="form-control" id="user_update" name="user_update" value="<?= $this->session->userdata('nama_user'); ?>" required>
                <input name="update_date" type="hidden" id="update_date" value=" <?php echo date('Y-m-d'); ?> " readonly>
              </div>
            </div>

            <div class="modal-footer">
              <a href="<?= base_url('page_checker/checker'); ?>" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-undo"></i>&nbsp;&nbsp;Batal&nbsp;</a>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;&nbsp;Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>