 <?php error_reporting(0) // tambahkan untuk menghilangkan notice... hehe ?>
 <div class="container">
                    <div class="card">
                      <!-- <div class="card-header">Header</div> -->
                      <div class="card-body">
                      <label>Import Data</label>
                    <hr>

                    <a href="<?php echo base_url("excel/format_pelanggan.xlsx"); ?>">Download Format</a>
                    <br>
                    <br>

                    <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
                    <form method="post" action="<?php echo base_url("page/form_i_pelanggan"); ?>" enctype="multipart/form-data">
                      <!--
                      -- Buat sebuah input type file
                      -- class pull-left berfungsi agar file input berada di sebelah kiri
                      -->
                      <input type="file" name="file">

                      <!--
                      -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
                      -->
                      <input type="submit" name="preview" value="Preview">
                    </form>

                    <?php
                    if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
                      if(isset($upload_error)){ // Jika proses upload gagal
                        echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
                        die; // stop skrip
                      }

                      // Buat sebuah tag form untuk proses import data ke database
                      echo "<form method='post' action='".base_url("page/import_pelanggan")."'>";

                      // Buat sebuah div untuk alert validasi kosong
                      echo "<div style='color: red;' id='kosong'>
                      Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
                      </div>";

                      echo "<table border='1' cellpadding='8'>
                      <tr>
                        <th colspan='18'>Preview Data</th>
                      </tr>
                      <tr>
                        <th>No Pelanggan </th>
                        <th>Nama </th>
                        <th>Alamat  </th>
                        <th>Email  </th>
                        <th>Tanggal Lahir     </th>
                        <th>Gender</th>
                        <th>No Identitas</th>
                        <th>No Telp</th>
                        <th>Telp Rumah</th>
                        <th>Zona</th>
                        <th>Tarif</th>
                        <th>Kategori</th>
                        <th>Pemakaian/Meter</th>
                        <th>Tgl Registrasi</th>
                        <th>Status</th>
                        <th>Biaya Instalasi</th>
                        <th>Petugas Instalasi</th>
                      </tr>";

                      $numrow = 1;
                      $kosong = 0;

                      // Lakukan perulangan dari data yang ada di excel
                      // $sheet adalah variabel yang dikirim dari controller
                      foreach($sheet as $row){
                        // Ambil data pada excel sesuai Kolom
                        $no_pelanggan= $row['A']; // Insert data nis dari kolom A di excel
                        $nama= $row['B']; // Insert data nama dari kolom B di excel
                        $alamat= $row['C']; // Insert data jenis kelamin dari kolom C di excel
                        $email= $row['D']; // Insert data alamat dari kolom D di excel
                        $tgl_lahir= $row['E']; // Insert data alamat dari kolom D di excel
                        $jk= $row['F']; // Insert data alamat dari kolom D di excel
                        $no_ktp= $row['G']; // Insert data alamat dari kolom D di excel
                        $no_telp= $row['H']; // Insert data alamat dari kolom D di excel
                        $telp_rumah= $row['I']; // Insert data alamat dari kolom D di excel
                        $zona= $row['J']; // Insert data alamat dari kolom D di excel
                        $tarif= $row['K']; // Insert data alamat dari kolom D di excel
                        $kategori= $row['L']; // Insert data alamat dari kolom D di excel
                        $pakai_meter= $row['M']; // Insert data alamat dari kolom D di excel
                        $tgl_reg= $row['N']; // Insert data alamat dari kolom D di excel
                        $status= $row['O']; // Insert data alamat dari kolom D di excel
                        $biaya_instalasi= $row['P']; // Insert data alamat dari kolom D di excel
                        $nama_pegawai= $row['Q']; // Insert data alamat dari kolom D di excel        

                        // Cek jika semua data tidak diisi
                        if($no_pelanggan == "" && $nama == "" && $alamat == "" && $email == "" && $tgl_lahir == "" && $jk == "" && $no_ktp == "" && $no_telp == "" && $telp_rumah == "" && $zona == "" && $tarif == "" && $kategori == "" && $pakai_meter == "" && $tgl_reg == "" && $status == "" && $biaya_instalasi == "" && $nama_pegawai == "")
                          continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                        // Cek $numrow apakah lebih dari 1
                        // Artinya karena baris pertama adalah nama-nama kolom
                        // Jadi dilewat saja, tidak usah diimport
                        if($numrow > 1){
                          // Validasi apakah semua data telah diisi
                          $no_pelanggan_td = ( ! empty($no_pelanggan))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                          $nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                          $alamat_td = ( ! empty($alamat))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                          $email_td = ( ! empty($email))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                          $tgl_lahir_td = ( ! empty($tgl_lahir))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                          $jk_td = ( ! empty($jk))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                          $no_ktp_td = ( ! empty($no_ktp))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                          $no_telp_td = ( ! empty($no_telp))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                          $zona_td = ( ! empty($zona))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                          $tarif_td = ( ! empty($tarif))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                          $kategori_td = ( ! empty($kategori))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                          $pakai_meter_td = ( ! empty($pakai_meter))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                          $tgl_reg_td = ( ! empty($tgl_reg))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                          $status_td = ( ! empty($status))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                          // Jika salah satu data ada yang kosong
                          if($no_pelanggan == "" or $nama == "" or $alamat == ""  or $tgl_lahir == "" or $jk == "" or $no_ktp == "" or $no_telp == "" or $zona == "" or $tarif == "" or $kategori == "" or $pakai_meter == "" or $tgl_reg == "" or $status == "")
                            $kosong++; // Tambah 1 variabel $kosong
                          }
                          
                          echo "<tr>";
                          echo "<td".$no_pelanggan_td.">".$no_pelanggan."</td>";
                          echo "<td".$nama_td.">".$nama."</td>";
                          echo "<td".$alamat_td.">".$alamat."</td>";
                          echo "<td".$email_td.">".$email."</td>";                          
                          echo "<td".$tgl_lahir_td.">".$tgl_lahir."</td>";
                          echo "<td".$jk_td.">".$jk."</td>";
                          echo "<td".$no_ktp_td.">".$no_ktp."</td>";
                          echo "<td".$no_telp_td.">".$no_telp."</td>";
                          echo "<td".$telp_rumah_td.">".$telp_rumah."</td>";
                          echo "<td".$zona_td.">".$zona."</td>";
                          echo "<td".$tarif_td.">".$tarif."</td>";
                          echo "<td".$kategori_td.">".$kategori."</td>";
                          echo "<td".$pakai_meter_td.">".$pakai_meter."</td>";
                          echo "<td".$tgl_reg_td.">".$tgl_reg."</td>";
                          echo "<td".$status_td.">".$status."</td>";
                          echo "<td".$biaya_instalasi_td.">".$biaya_instalasi."</td>";
                          echo "<td".$nama_pegawai_td.">".$nama_pegawai."</td>";
                          echo "</tr>";
                        }

                       $numrow++; // Tambah 1 setiap kali looping
                      }

                      echo "</table>";

                      // Cek apakah variabel kosong lebih dari 0
                      // Jika lebih dari 0, berarti ada data yang masih kosong
                      // if($kosong > 0){
                      ?>
                        <script>
                        $(document).ready(function(){
                          // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                          $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                          $("#kosong").show(); // Munculkan alert validasi kosong
                        });
                        </script>
                      <?php
                      // }else{ // Jika semua data sudah diisi
                        echo "<hr>";

                        // Buat sebuah tombol untuk mengimport data ke database
                        echo "<button type='submit' name='import'>Import</button>";
                        echo "<a href='".base_url("page/pelanggan")."'>Cancel</a>";
                      // }

                      echo "</form>";
                     // }
                    ?>
                    </div> 
      <!-- Load File jquery.min.js yang ada difolder js -->
  <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

  <script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>