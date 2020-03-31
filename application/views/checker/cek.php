    <div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flash_sukses');?>"></div>
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('flash_gagal');?>"></div>
    <?php
    $this->session->userdata('authenticated')
    //$this->session->set_userdata($session);
    ?>
      <div class="row">
        <div class="col py-2">
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Checker
          </button>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card">
              <div class="card-header bg-gray-500">Form Input Checker</div>
              <div class="card-body">
                <form method="post" accept-charset="utf-8" enctype="multipart/form-data" action="<?=base_url('page_checker/cek_tambah');?>">
                    
                  <div class="form-group">
                    <label>Tgl_cek</label>
                    <input type="date" class="form-control form-control-user" id="tgl_cek" name="tgl_cek" placeholder="Masukan tanggal cek" required>
                    <label>Nama Pelanggan </label>
                      <td> 
                      <?php  
                        $a= mysqli_connect("localhost","root","","pam_v1");  
                        $result = mysqli_query($a,"select * from pelanggan order by no_pelanggan asc");  
                        $jsArray = "var Nama_prd1 = new Array();";  
                        echo '<select name="nama" onchange="changeValue(this.value)" class="form-control form-control-user">';  
                        echo '<option>---Pilih nama Pelanggan----</option>';  
                        while ($row = mysqli_fetch_array($result)) {  
                        echo '<option value="'. $row['nama'].'">' . $row['nama'] . '</option>';  
                         $jsArray .= "Nama_prd1['". $row['nama']."'] = {name:'". addslashes($row['no_pelanggan']) . "',desc:'".addslashes($row['zona'])."',de:'".addslashes($row['pakai_meter'])."',des:'".addslashes($row['tarif'])."'};";  
                          }  
                        echo '</select>';   
                      ?>  
                      <script type="text/javascript">
                      <?php echo $jsArray; ?>
                      function changeValue(id){
                      document.getElementById('no_pelanggan').value = Nama_prd1[id].name;
                      document.getElementById('zona').value = Nama_prd1[id].desc;
                      document.getElementById('tarif').value = Nama_prd1[id].des;
                      document.getElementById('pakai_meter').value = Nama_prd1[id].de;
                      };
                    </script>
                    <label>No Pelanggan</label>
                    <input type="text" class="form-control form-control-user" id="no_pelanggan" name="no_pelanggan" placeholder="Masukan no Pelanggan" required>
                    <label>Zona</label>
                    <input type="text" class="form-control form-control-user" id="zona" name="zona" placeholder="Masukan Zona" required>   
                    <label>Tarif</label>
                    <input type="text" class="form-control form-control-user" id="tarif" name="tarif" placeholder="Masukan tarif" required>
                    <label>Pemakaian /Meter</label>
                    <input type="text" class="form-control form-control-user" id="pakai_meter" name="pakai_meter" placeholder="Masukan Pemakaian" required>
                    <label>Catat/Meter</label>
                    <input type="text" class="form-control form-control-user" id="catat_meter" name="catat_meter" placeholder="Masukan Catatan Meter" required>
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
              <div class="card-header bg-gray-500">Data Tabel Hasil Checker</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-info text-white"> 
                      <tr class="text-center">
                        <th>No         </th>
                        <th>Tanggal cek</th>
                        <th>No Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Zona </th>
                        <th>Tarif</th>
                        <th>Pemakaian/Meter </th>
                        <th>Catat/ Meter   </th>
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
                      foreach($cek as $s):$no++;?>
                      <tr>
                        <td class="text-center text-middle"><?=$no;?></td>
                        <td class="text-middle"><?=$s['tgl_cek'];?></td>
                        <td class="text-middle"><?=$s['no_pelanggan'];?></td>
                        <td class="text-middle"><?=$s['nama'];?></td>
                        <td class="text-middle"><?=$s['zona'];?></td>
                        <td class="text-middle"><?=$s['tarif'];?></td>
                        <td class="text-middle"><?=$s['pakai_meter'];?></td>
                        <td class="text-middle"><?=$s['catat_meter'];?></td>
                        <td class="text-middle"><?=$s['user_create'];?></td>
                        <td class="text-middle"><?=$s['create_date'];?></td>
                        <td class="text-middle"><?=$s['user_update'];?></td>
                        <td class="text-middle"><?=$s['update_date'];?></td>
                        <td class="text-center text-middle"><a href="<?=base_url('page_checker/cek_ubah')?>/<?=$s['id'];?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit text-success"></i></a> | <a href="<?=base_url('page_checker/cek_hapus')?>/<?=$s['id'];?>" class="tombol_hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash text-danger"></i></a>
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
