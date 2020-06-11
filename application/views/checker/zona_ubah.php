<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card shadow-lg">
        <div class="card-header bg-gray-500">Data Tabel Zona</div>
        <div class="card-body">
          <form method="POST" action="<?= base_url('page_checker/zona_edit'); ?>">
            <div class="modal-body">
              <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= $zona['id']; ?>">
                <label class="control-label">Zona</label>
                <input type="text" class="form-control" id="zona" name="zona" placeholder="Masukan Zona" value="<?= $zona['zona']; ?>" required>
                <label class="control-label">Wilayah</label>
                <input type="text" class="form-control" id="wilayah" name="wilayah" placeholder="Masukan Wilayah" value="<?= $zona['wilayah']; ?>" required>
                <label>Kategori</label>
                <select name="kategori" class="form-control form-control-user" required>
                  <option value="-">-pilihan-</option>
                  <option value="golongan a">Air Minum /Rumah tangga</option>
                  <option value="golongan b">Bahan Baku air minum/ keperluan RT</option>
                  <option value="golongan c">Peternakan</option>
                  <option value="golongan d">Perusahaan</option>
                </select>
                <label class="control-label">Tarif / Meter </label>
                <input type="text" class="form-control" id="tarif" name="tarif" placeholder="tarif pemakaian " value="<?= $zona['tarif']; ?>" required>
                <input type="hidden" class="form-control" id="user_update" name="user_update" value="<?= $this->session->userdata('nama_user'); ?>" required>
                <input name="update_date" type="hidden" id="update_date" value=" <?php echo date('Y-m-d'); ?> " readonly>
              </div>
            </div>

            <div class="modal-footer">
              <a href="<?= base_url('page_checker/zona'); ?>" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-undo"></i>&nbsp;&nbsp;Batal&nbsp;</a>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;&nbsp;Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>