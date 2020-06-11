 <div class="container">
   <div class="card">
     <!-- <div class="card-header">Header</div> -->
     <div class="card-body">
       <label>Import Data</label>
       <hr>

       <a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format</a>
       <br>
       <br>

       <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
       <form method="post" action="<?php echo base_url("page/form"); ?>" enctype="multipart/form-data">
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
        if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
          if (isset($upload_error)) { // Jika proses upload gagal
            echo "<div style='color: red;'>" . $upload_error . "</div>"; // Muncul pesan error upload
            die; // stop skrip
          }

          // Buat sebuah tag form untuk proses import data ke database
          echo "<form method='post' action='" . base_url("page/import") . "'>";

          // Buat sebuah div untuk alert validasi kosong
          echo "<div style='color: red;' id='kosong'>
                      Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
                      </div>";

          echo "<table border='1' cellpadding='8'>
                      <tr>
                        <th colspan='5'>Preview Data</th>
                      </tr>
                      <tr>
                        <th>Zona</th>
                        <th>Wilayah</th>
                        <th>Kategori</th>
                        <th>Tarif</th>
                      </tr>";

          $numrow = 1;
          $kosong = 0;

          // Lakukan perulangan dari data yang ada di excel
          // $sheet adalah variabel yang dikirim dari controller
          foreach ($sheet as $row) {
            // Ambil data pada excel sesuai Kolom
            $zona = $row['A']; // Ambil data NIS
            $wilayah = $row['B']; // Ambil data nama
            $kategori = $row['C']; // Ambil data jenis kelamin
            $tarif = $row['D']; // Ambil data tarif

            // Cek jika semua data tidak diisi
            if ($zona == "" && $wilayah == "" && $kategori == "" && $tarif == "")
              continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if ($numrow > 1) {
              // Validasi apakah semua data telah diisi
              $zona_td = (!empty($zona)) ? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
              $wilayah_td = (!empty($wilayah)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
              $kategori_td = (!empty($kategori)) ? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
              $tarif_td = (!empty($tarif)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah

              // Jika salah satu data ada yang kosong
              if ($zona == "" or $wilayah == "" or $kategori == "" or $tarif == "") {
                $kosong++; // Tambah 1 variabel $kosong
              }

              echo "<tr>";
              echo "<td" . $zona_td . ">" . $zona . "</td>";
              echo "<td" . $wilayah_td . ">" . $wilayah . "</td>";
              echo "<td" . $kategori_td . ">" . $kategori . "</td>";
              echo "<td" . $tarif_td . ">" . $tarif . "</td>";
              echo "</tr>";
            }

            $numrow++; // Tambah 1 setiap kali looping
          }

          echo "</table>";

          // Cek apakah variabel kosong lebih dari 0
          // Jika lebih dari 0, berarti ada data yang masih kosong
          if ($kosong > 0) {
        ?>
           <script>
             $(document).ready(function() {
               // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
               $("#jumlah_kosong").html('<?php echo $kosong; ?>');

               $("#kosong").show(); // Munculkan alert validasi kosong
             });
           </script>
       <?php
          } else { // Jika semua data sudah diisi
            echo "<hr>";

            // Buat sebuah tombol untuk mengimport data ke database
            echo "<button type='submit' name='import'>Import</button>";
            echo "<a href='" . base_url("page/zona") . "'>Cancel</a>";
          }

          echo "</form>";
        }
        ?>
     </div>
     <!-- Load File jquery.min.js yang ada difolder js -->
     <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

     <script>
       $(document).ready(function() {
         // Sembunyikan alert validasi kosong
         $("#kosong").hide();
       });
     </script>