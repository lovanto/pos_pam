    <div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flash_sukses');?>"></div>
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('flash_gagal');?>"></div>
    <?php
    $this->session->userdata('authenticated')
    //$this->session->set_userdata($session);
    ?>
      <div class="row">
        <div class="col py-2">
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Pembayaran
          </button>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card">
              <div class="card-header bg-gray-500">Form Input Pembayaran</div>
              <div class="card-body">
                 
                <form method="post" accept-charset="utf-8" enctype="multipart/form-data" enctype="multipart/form-data" action="<?=base_url('page_pelanggan/bayar_tambah');?>">

                  <div class="form-group">
                    <label>No Transaksi</label>
                    <input type="text" class="form-control form-control-user" id="no_transaksi" name="no_transaksi" placeholder="Masukan no Transaksi" required>
                    <label>Tgl_bayar</label>
                    <input type="date" class="form-control form-control-user" id="tgl_bayar" name="tgl_bayar" placeholder="Masukan tanggal bayar" required>
                    <label>Nama Pelanggan </label>
                      <td> 
                      <?php  
                        $tglawal = date('Y-m-01');
                        $tglakhir = date('Y-m-t');
                        $a= mysqli_connect("localhost","root","","pam_v1");  
                        $result = mysqli_query($a,"SELECT pelanggan.no_pelanggan, pelanggan.nama, checker.zona,checker.tarif,SUM(checker.catat_meter) AS catat_meter FROM
                        (pelanggan LEFT JOIN checker ON pelanggan.no_pelanggan=checker.no_pelanggan)
                        WHERE (checker.tgl_cek>='$tglawal' AND checker.tgl_cek <=' $tglakhir') 
                        GROUP BY no_pelanggan");  
                        $jsArray = "var Nama_prd1 = new Array();";  
                        echo '<select name="nama" onchange="changeValue(this.value)" class="form-control form-control-user">';  
                        echo '<option>---Pilih nama Pelanggan----</option>';  
                        while ($row = mysqli_fetch_array($result)) {  
                        echo '<option value="'. $row['nama'].'">' . $row['nama'] . '</option>';  
                         $jsArray .= "Nama_prd1['". $row['nama']."'] = {name:'". addslashes($row['no_pelanggan']) . "',desc:'".addslashes($row['zona'])."',des:'".addslashes($row['tarif'])."',de:'".addslashes($row['catat_meter'])."'};";  
                          }  
                        echo '</select>';   
                      ?>  
                      
                    <label>No Pelanggan</label>
                    <input type="text" class="form-control form-control-user" id="no_pelanggan" name="no_pelanggan" placeholder="Masukan no Pelanggan" required readonly>
                    <label>Zona</label>
                    <input type="text" class="form-control form-control-user" id="zona" name="zona" placeholder="Masukan Zona" required readonly>
                    <div class="perhitungan">
                    <label>Tarif</label>
                    <input type="text" class="form-control form-control-user" id="tarif" name="tarif" onchange="total()" placeholder="Masukan tarif" required readonly>
                    <label>Catat/Meter</label>
                    <input type="text" class="form-control form-control-user" id="catat_meter" onchange="total()" name="catat_meter" placeholder="Masukan Catatan Meter" required readonly>
                     <label>Total bayar</label>
                    <input type="text" class="form-control form-control-user" id="total_bayar" onchange="total()" name="total_bayar" placeholder="total_bayar" required readonly>
                    <b><label>langsung isi ke biaya admin dan denda</label></b><br>                      
                    <label>Biaya Admin</label>
                    <input type="text" class="form-control form-control-user" id="biaya_admin" onchange="total()" name="biaya_admin" placeholder="Biaya Admin" required>
                    <label>Denda</label>
                    <input type="text" class="form-control form-control-user" id="denda" onchange="total()" name="denda" placeholder="Denda" required>
                   <label>Grand Total</label>
                    <input type="text" class="form-control form-control-user" onchange="total()" id="grand_total" name="grand_total" placeholder="grand_total" required>
                  <input type="hidden" class="form-control" id="user_create" name="user_create"  value="<?=$this->session->userdata('nama_user'); ?>" required>             
                   <input name="create_date" type="hidden" id="create_date" value=" <?php echo date('Y-m-d'); ?> "readonly>
                    </div>
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
              <div class="card-header bg-gray-500">Data Tabel Hasil Pembayaran</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-info text-white"> 
                      <tr class="text-center">
                        <th>No         </th>
                        <th>No Transaksi</th>
                        <th>Tanggal bayar</th>
                        <th>No Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Zona </th>
                        <th>Tarif</th>
                        <th>Catat/ Meter</th>
                        <th>Total Bayar</th>
                        <th>Biaya Admin</th>
                        <th>Denda </th>
                        <th>Grand Total</th>
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
                      foreach($bayar as $s):$no++;?>
                      <tr>
                        <td class="text-center text-middle"><?=$no;?></td>
                        <td class="text-middle"><?=$s['no_transaksi'];?></td>
                        <td class="text-middle"><?=$s['tgl_bayar'];?></td>
                        <td class="text-middle"><?=$s['nama'];?></td>
                        <td class="text-middle"><?=$s['no_pelanggan'];?></td>
                        <td class="text-middle"><?=$s['zona'];?></td>
                        <td class="text-middle"><?=$s['tarif'];?></td>
                        <td class="text-middle"><?=$s['catat_meter'];?></td>
                        <td class="text-middle"><?=$s['total_bayar'];?></td>
                        <td class="text-middle"><?=$s['biaya_admin'];?></td>
                        <td class="text-middle"><?=$s['denda'];?></td>
                        <td class="text-middle"><?=$s['grand_total'];?></td>
                        <td class="text-middle"><?=$s['user_create'];?></td>
                        <td class="text-middle"><?=$s['create_date'];?></td>
                        <td class="text-middle"><?=$s['user_update'];?></td>
                        <td class="text-middle"><?=$s['update_date'];?></td>
                        <td class="text-center text-middle"><a href="<?=base_url('page_pelanggan/bayar_ubah')?>/<?=$s['id'];?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit text-success"></i></a> | <a href="<?=base_url('page_pelanggan/bayar_hapus')?>/<?=$s['id'];?>" class="tombol_hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash text-danger"></i></a>
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
  <script type="text/javascript">
      <?php echo $jsArray; ?>
         function changeValue(id){
         document.getElementById('no_pelanggan').value = Nama_prd1[id].name;
         document.getElementById('zona').value = Nama_prd1[id].desc;
         document.getElementById('tarif').value = Nama_prd1[id].des;                      
         document.getElementById('catat_meter').value = Nama_prd1[id].de;
      };
  </script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type ="text/javascript">

    $(".perhitungan").keyup(function(){
      var tarif = parseInt($("#tarif").val())
      var catat_meter = parseInt($("#catat_meter").val())
      var biaya_admin = parseInt($("#biaya_admin").val()) 
      var denda = parseInt($("#denda").val())
      var total_bayar = tarif * catat_meter;
      var grand_total = total_bayar + biaya_admin + denda;
      $("#total_bayar").attr("value",total_bayar)
      $("#grand_total").attr("value",grand_total)                
      });
  </script>

   