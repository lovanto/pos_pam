<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card shadow-lg">
        <div class="card-header bg-gray-500">Data Tabel pegawai</div>
          <div class="card-body">
            <form method="POST" action="<?=base_url('page/pegawai_edit');?>">
             <div class="modal-body">
              <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="<?=$pegawai['id'];?>">
                <label class="control-label">Nomor identitas</label>
                <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukan Nomor identitas" value="<?=$pegawai['no_ktp'];?>" required>
                <label class="control-label">Nomor Kontak</label>
                <input type="text" class="form-control" id="nama" name="no_telp" placeholder="Masukan Nomor Kontak" value="<?=$pegawai['no_telp'];?>" required>
                <label class="control-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukan Nama Pegawai" value="<?=$pegawai['nama_pegawai'];?>" required>
                  <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control form-control-user" required>
                    <option value="-">-pilihan-</option>
                    <option value= "laki-laki" >laki-laki</option>
                    <option value= "perempuan" >perempuan</option>
                    </select>
                <label class="control-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" value="<?=$pegawai['tgl_lahir'];?>" required>
                <label class="control-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?=$pegawai['alamat'];?>" required>
                <label class="control-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukan No Email" value="<?=$pegawai['email'];?>" required>
                <label class="control-label">Tanggal Masuk</label>
                <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" placeholder="Masukan tgl registrasi" value="<?=$pegawai['tgl_masuk'];?>" required>
                <label class="control-label">Lama Kontrak</label>
                <input type="text" class="form-control" id="kontrak" name="kontrak" placeholder="Masukan No Telpon" value="<?=$pegawai['kontrak'];?>" required>
                <label>Status Pegawai</label>
                    <select name="status_pegawai" class="form-control form-control-user" required>
                    <option value="<?=$pegawai['status_pegawai'];?>">-Pilihan-</option>
                     <option value= "Kontrak" >kontrak</option>
                    <option value= "Tetap">Tetap</option>
                    </select>
                <input type="hidden" class="form-control" id="user_update" name="user_update"  value="<?=$this->session->userdata('nama_user'); ?>" required>             
                <input name="update_date" type="hidden" id="update_date" value=" <?php echo date('Y-m-d'); ?> "readonly>
              </div>
            </div>
             
            <div class="modal-footer">
              <a href="<?=base_url('page/pegawai');?>" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-undo"></i>&nbsp;&nbsp;Batal&nbsp;</a>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;&nbsp;Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>