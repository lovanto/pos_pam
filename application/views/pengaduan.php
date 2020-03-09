    <div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flash_sukses');?>"></div>
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('flash_gagal');?>"></div>
    <?php
    $this->session->userdata('authenticated')
    //$this->session->set_userdata($session);
    ?>
      <div class="row">
        <div class="col py-2">
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Pengaduan
          </button>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card">
              <div class="card-header bg-gray-500">Form Input Pengaduan</div>
              <div class="card-body">
                <form method="post" accept-charset="utf-8" enctype="multipart/form-data" action="<?=base_url('page/pengaduan_tambah');?>">
                    
                  <div class="form-group">
                    <label>No_pengaduan</label>
                    <input type="text" class="form-control form-control-user" id=no_pengaduan" name="no_pengaduan" placeholder="Masukan no pengaduan" required>
                    <label>Tgl_pengaduan</label>
                    <input type="date" class="form-control form-control-user" id="tgl" name="tgl_pengaduan" placeholder="Masukan tanggal pengaduan" required>
                    <label>No Pelanggan</label>
                    <input type="text" class="form-control form-control-user" id="no_pelanggan" name="no_pelanggan" placeholder="Masukan no Pelanggan" required>
                    <label>Keluhan</label>
                    <input type="text" class="form-control form-control-user" id="keluhan" name="keluhan" placeholder="Masukan keluhan" required>   
                    <label>Bukti foto</label><!-- 
                    <input type="text" class="form-control form-control-user" id="bukti_foto" name="bukti_foto" placeholder="Masukan bukti_foto" required> -->
                    <table cellpadding="8">
                      <tr>
                        <td>bukti_foto</td>
                        <td><input type="text" class="form-control form-control-user" name="input_bukti_foto" value="<?php echo set_value('input_bukti_foto'); ?>"></td>
                      </tr>
                      <tr>
                        <td>Gambar</td>
                        <td><input type="file" class="form-control form-control-user" name="input_gambar"></td>
                      </tr>
                    </table>
                    <input type="hidden" class="form-control" id="user_create" name="user_create"  value="<?=$this->session->userdata('nama_user'); ?>" required>             
                   <input name="create_date" type="hidden" id="create_date" value=" <?php echo date('Y-m-d'); ?> "readonly>
                 
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
              <div class="card-header bg-gray-500">Data Tabel Pengaduan Pelanggan</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-info text-white"> 
                      <tr class="text-center">
                        <th>No         </th>
                        <th>No Pengaduan</th>
                        <th>Tanggal pengaduan</th>
                        <th>No Pelanggan</th>
                        <th>keluhan</th>
                        <th>Bukti foto </th>
                        <th>Gambar</th>
                        <th>User Create</th>
                        <th>Create Date</th>
                        <th>User Update</th>
                        <th>Update Date</th>
                        <th>Aksi       </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 0;
                      foreach($pengaduan as $s):$no++;?>
                      <tr>
                        <td class="text-center text-middle"><?=$no;?></td>
                        <td class="text-middle"><?=$s['no_pengaduan'];?></td>                       
                        <td class="text-middle"><?=$s['tgl'];?></td>
                        <td class="text-middle"><?=$s['no_pelanggan'];?></td>
                        <td class="text-middle"><?=$s['keluhan'];?></td>
                        <td class="text-middle"><?=$s['foto'];?></td>
                        <td class="text-middle"><img src='../images/<?=$s['foto'];?>' width='100' height='100'></td>
                        <td class="text-middle"><?=$s['user_create'];?></td>
                        <td class="text-middle"><?=$s['create_date'];?></td>
                        <td class="text-middle"><?=$s['user_update'];?></td>
                        <td class="text-middle"><?=$s['update_date'];?></td>
                        <td class="text-center text-middle"><a href="<?=base_url('page/pengaduan_ubah')?>/<?=$s['id'];?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit text-success"></i></a> | <a href="<?=base_url('page/pengaduan_hapus')?>/<?=$s['id'];?>" class="tombol_hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash text-danger"></i></a>
                        </td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
