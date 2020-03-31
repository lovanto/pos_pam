<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card shadow-lg">
        <div class="card-header bg-gray-500">Data Tabel penanganan</div>
          <div class="card-body">
            <form method="POST" action="<?=base_url('page/penanganan_edit');?>">
             <div class="modal-body">
              <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="<?=$penanganan['id'];?>">
                <label class="control-label">No penanganan</label>
                <input type="text" class="form-control" id="no_penanganan" name="no_penanganan" placeholder="no_penanganan" value="<?=$penanganan['no_penanganan'];?>" required>
                 <label class="control-label">Tgl penanganan </label>
                <input type="date" class="form-control" id="tgl" name="tgl" placeholder="tgl" value="<?=$penanganan['tgl'];?>" required>
                <label class="control-label">No pengaduan </label>
                <input type="text" class="form-control" id="no_pengaduan" name="no_pengaduan" placeholder="No Pelanggan" value="<?=$penanganan['no_pengaduan'];?>" required> 
                <label class="control-label">Petugas </label>
                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="No Pelanggan" value="<?=$penanganan['nama_pegawai'];?>" required>
                <label class="control-label">Biaya perbaikan</label>
                <input type="text" class="form-control" id="biaya_perbaikan" name="biaya_perbaikan" placeholder="biaya_perbaikan" value="<?=$penanganan['biaya_perbaikan'];?>" required>
                    <input type="hidden" class="form-control" id="user_update" name="user_update"  value="<?=$this->session->userdata('nama_user'); ?>" required>             
                   <input name="update_date" type="hidden" id="update_date" value=" <?php echo date('Y-m-d'); ?> "readonly>
              </div>
            </div>
            <div class="modal-footer">
              <a href="<?=base_url('page/penanganan');?>" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-undo"></i>&nbsp;&nbsp;Batal&nbsp;</a>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;&nbsp;Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>