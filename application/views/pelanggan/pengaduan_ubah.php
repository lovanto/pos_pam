<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card shadow-lg">
        <div class="card-header bg-gray-500">Data Tabel Pengaduan</div>
        <div class="card-body">
          <form method="POST" action="<?= base_url('page_pelanggan/pengaduan_edit'); ?>">
            <div class="modal-body">
              <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= $pengaduan['id']; ?>">
                <label class="control-label">No Pengaduan</label>
                <input type="text" class="form-control" id="no_pengaduan" name="no_pengaduan" placeholder="no_pengaduan" value="<?= $pengaduan['no_pengaduan']; ?>" required>
                <label class="control-label">Tgl Pengaduan </label>
                <input type="date" class="form-control" id="tgl" name="tgl" placeholder="tgl" value="<?= $pengaduan['tgl']; ?>" required>
                <label class="control-label">No pelanggan </label>
                <input type="text" class="form-control" id="no_pelanggan" name="no_pelanggan" placeholder="No Pelanggan" value="<?= $pengaduan['no_pelanggan']; ?>" required>
                <label class="control-label">Keluhan</label>
                <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder="keluhan" value="<?= $pengaduan['keluhan']; ?>" required>
                <input type="hidden" class="form-control" id="user_update" name="user_update" value="<?= $this->session->userdata('nama_user'); ?>" required>
                <input name="update_date" type="hidden" id="update_date" value=" <?php echo date('Y-m-d'); ?> " readonly>
              </div>
            </div>
            <div class="modal-footer">
              <a href="<?= base_url('page_pelanggan/pengaduan'); ?>" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-undo"></i>&nbsp;&nbsp;Batal&nbsp;</a>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;&nbsp;Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>