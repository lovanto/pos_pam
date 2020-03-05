    <div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flash_sukses');?>"></div>
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('flash_gagal');?>"></div>
    <?php
    $this->session->userdata('authenticated')
    //$this->session->set_userdata($session);
    ?>
      <div class="row">
        <div class="col py-2">
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Zona
          </button>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card">
              <div class="card-header bg-gray-500">Form Input Zona</div>
              <div class="card-body">
                <form method="post" accept-charset="utf-8" enctype="multipart/form-data" action="<?=base_url('page/zona_tambah');?>">
                    
                  <div class="form-group">
                    <label>Zona</label>
                    <input type="text" class="form-control form-control-user" id="zona" name="zona" placeholder="Masukan Zona" required>
                    <label>Wilayah</label>
                    <input type="text" class="form-control form-control-user" id="wilayah" name="wilayah" placeholder="Masukan Wilayah" required>
                    <label>Kategori</label>
                    <select name="kategori" class="form-control form-control-user" required>
                    <option value="-">-pilihan-</option>
                    <option value= "golongan a" >Air Minum /Rumah tangga</option>
                    <option value= "golongan b" >Bahan Baku air minum/ keperluan RT</option>
                    <option value= "golongan c">Peternakan</option>
                    <option value= "golongan d" >Perusahaan</option>
                    </select>
                    <label>Tarif /Meter</label>
                    <input type="text" class="form-control form-control-user" id="tarif" name="tarif" placeholder="Masukan Tarif" required>
                   <input type="hidden" class="form-control" id="user_create" name="user_create"  value="<?=$this->session->userdata('nama_user'); ?>" required>             
                   <input name="create_date" type="hidden" id="create_date" value=" <?php echo date('Y-m-d'); ?> "readonly>
                   </div>
                    <div class="card-footer">
                         <b><a href="<?=base_url('page/form');?>">import data</a></b>
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
              <div class="card-header bg-gray-500">Data Tabel Zona</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-info text-white"> 
                      <tr class="text-center">
                        <th>No         </th>
                        <th>Zona </th>
                        <th>Wilayah </th>
                        <th>Kategori </th>
                        <th>Tarif / Meter   </th>
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
                      foreach($zona as $s):$no++;?>
                      <tr>
                        <td class="text-center text-middle"><?=$no;?></td>
                        <td class="text-middle"><?=$s['zona'];?></td>
                        <td class="text-middle"><?=$s['wilayah'];?></td>
                        <td class="text-middle"><?=$s['kategori'];?></td>
                        <td class="text-middle"><?=$s['tarif'];?></td>
                        <td class="text-middle"><?=$s['user_create'];?></td>
                        <td class="text-middle"><?=$s['create_date'];?></td>
                        <td class="text-middle"><?=$s['user_update'];?></td>
                        <td class="text-middle"><?=$s['update_date'];?></td>
                        <td class="text-center text-middle"><a href="<?=base_url('page/zona_ubah')?>/<?=$s['id'];?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit text-success"></i></a> | <a href="<?=base_url('page/zona_hapus')?>/<?=$s['id'];?>" class="tombol_hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash text-danger"></i></a>
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
  