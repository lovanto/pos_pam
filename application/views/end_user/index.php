<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Informasi Bimbingan Konseling</title>
  <link rel="icon" href="<?php echo base_url('asset_end_user/icon.ico'); ?>" type="image/x-icon" />

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('asset_end_user/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- Datatable -->
  <link href="<?php echo base_url('asset_end_user/datatables/dataTables.bootstrap4.min.css') ; ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset_end_user/datatables/dataTables.bootstrap4.css') ; ?>">
  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('asset_end_user/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('asset_end_user/css/grayscale.min.css');?>" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
   <!--     <a class="navbar-brand" href="#"><img class="logo" src="<?=base_url('assets/img/SMK-MEDIKACOM.png');?>" alt="Logo" width="50" height="50"></a> -->
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Bimbingan Konseling</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil Data
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <div class="dropdown-item disabled">Sekolah</div>
              <a class="dropdown-item text-primary" href="#sekilas" >&nbsp;&nbsp;Sekilas Profile Sekolah</a>
              <a class="dropdown-item text-primary" href="#visimisi" >&nbsp;&nbsp;Visi Misi Sekolah</a>
              <div class="dropdown-divider"></div>
              <div class="dropdown-item disabled">Bimbingan Konseling</div>
              <a class="dropdown-item text-primary" href="<?= base_url('Perpustakaan/tentang_perpustakaan');?>">&nbsp;&nbsp;Tentang Bimbingan Konseling</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informasi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <div class="dropdown-item disabled">Sekolah</div>
              <a class="dropdown-item text-primary" href="#dataguru" >&nbsp;&nbsp;Data Guru</a>
              <a class="dropdown-item text-primary" href="#Walikelas">&nbsp;&nbsp;Data Walikelas</a>
              <a class="dropdown-item text-primary" href="#Siswa" >&nbsp;&nbsp;Data Siswa</a>
              <div class="dropdown-divider"></div>
              <div class="dropdown-item disabled">Bimbingan Konseling</div>
              <a class="dropdown-item text-primary" href="#Pembinaan">&nbsp;&nbsp;Data Pembinaan Konseling</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url('welcome');?>">Chat Konseling</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth');?>">Login </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">SIS-FO BK</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Sistem Informasi Bimbingan Konseling</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a>
      </div>
    </div>
  </header>

  <section id="sekilas" class="projects-section bg-light">
    <div class="container-fluid">
       <div class="featured-text text-center text-lg-left">
           <center> <h4>Sekilas Tentang Smk Medikacom</h4></center>
            <p class="text-black-50 mb-0">
              <div>       
      <!-- Sekilas tentang sekolah -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-l-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="<?php echo base_url('asset_end_user/img/Tampilan 6.jpg');?>" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Smk Medikacom Bandung</h4>
            <p class="text-black-50 mb-0">
              <div>
                  <img src="<?php echo base_url('asset_end_user/img/1.jpg');?>" alt="">
              </div>
              </div>
          </p>
          </div>
        </div>
      </div>
</div>
</section>
  
<!-- Pembinaan BK --> 
  <section class="page-section" id="FotoBinaan">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2 class="section-heading text-uppercase">Gedung SMK Medikacom Bandung</h2>
        </div>
      </div>
    <div class="container-fluid">     
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse show" id="multiCollapseExample2">
            <div class="card shadow-lg">
              <div class="card-body">

              <div id="demo" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
  
              </ul>

              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo base_url('asset_end_user/img/g.jpg');?>" alt="">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url('asset_end_user/img/e.jpg');?>" alt="">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url('asset_end_user/img/h.jpeg');?>" alt="">
                </div>
              </div>
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div>
            </div>          
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <br>
  <br>
  <!-- About Section 
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Built with Bootstrap 4</h2>
          <p class="text-white-50">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
            <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
        </div>
      </div>
      <img src="<?php echo base_url('asset_end_user/img/1.jpg');?>" class="img-fluid" alt="">
    </div>
  </section>-->
  <div class="col text-center">
          <h2 class="section-heading text-uppercase">Visi Misi Smk Medikacom</h2>
        </div>
      <!-- Visi Dan Misi -->
    <section id="visimisi" class="projects-section bg-light">
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php echo base_url('asset_end_user/img/demo-image-01.jpg');?>" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">VISI</h4>
                <p align="justify-content-center" class="text-white">
                PADA TAHUN 2036 MENJADI SMK TEFA RUJUKAN YANG UNGGUL DALAM KELEMBAGAAN DAN PRESTASI  YANG MENGHASILKAN LULUSAN YANG BERMUTU  TINGGI DAN BERDAYA SAING LOKAL DAN GLOBAL YANG DILANDASI AKHLAK MULIA, BERKPRIBADIAN KEBANGSAAN DAN BERWAWASAN LINGKUNGAN
                </p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- mISI -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">MISI</h4>
                <p class="text-white">
               1.  Melaksanakan pengembangan manajemen dan keorganisasian sekolah dengan menerapkan standar Sistem Manajemen Mutu (SMM) ISO 9001:2008 agar menjadi sekolah yang <b>unggul dalam kelembagaan.</b>.<br><br>
               2.  Menggali dan mengembangkan potensi setiap siswa dengan memberdayakan (empowering) kecerdasan intelektual (IQ), emosional (EQ) maupun kecerdasan spritual (SQ).<br><br>
               3.  Melakukan proses pembelajaran yang inovatif dan kreatif.<br><br>
               4.  Membekali siswa dengan ilmu pengetahuan (knowledge), keterampilan tinggi (high skill) dan sikap (performance sehingga kompeten/trampil dan unggul memasuki pasar kerja serta berjiwa interpreneurship.<br><br>
               5.  Melaksanakan pengembangan SDM pendidik dan kependidikan agar menjadi seklah yang unggul dalam prestasi<br><br>
               6. Meningkatkan kelengkapan sarana-prasarana pendidikan, workshop, lab dalam rangka pengembangan sekolah <b>“advanced training centre dan teaching industry”</b><br><br>
               7. Mengembangkan pelaksanaan kegiatan ekstrakurikuler unggulan sesuai dengan potensi dan minat siswa.<br><br>
               8. Melaksanakan pengembangan jaringan kerjasama mitra industri (network) dan institusi dalam dan luar negeri dalam rangka mendukung program ZERO JOBLESS.<br><br>
              9.  Menerapkan manajemen partisipatif dengan melibatkan seluruh warga sekolah dan komite sekolah.<br><br> 
              10. Membudayakan sikap disiplin, memilki kinerja dan motifasi belajar yang tinggi untuk mewujudkan jiwa sekolah yang kreatif, berprestasi dan demokratis.<br><br>
              11. Melaksanakan pembelajaran dan bimbingan secara efektif sehingga setiap siswa berkembang secara optimal, sesuai dengan potensi yang dimiliki.<br><br>
              12. Menumbuhkan semangat keunggulan secara intensif kepada seluruh warga sekolah.<br><br>
              13. Menumbuhkan dan mendorong keunggulan dalam penerapan ilmu pengetahuan, teknologi dan seni.<br><br>
              14. Menumbuhkan penghayatan terhadap ajaran agama yang dianut, budaya & karakter bangsa sehingga terbangun siswa yang kompeten dan berkarakter.<br><br>
              15. Mendorong lulusan yang berkualitas, berprestasi, berakhlak tinggi, dan bertaqwa pada Tuhan Yang Maha Esa. Melaksanakan pembelajaran dan bimbingan secara efektif sehingga setiap siswa berkembang secara optimal, sesuai dengan potensi yang dimiliki.<br><br>
                </p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Data Guru  -->
  
  <section id="dataguru" class="projects-section bg-light">
    <div class="container-fluid">
      <!-- Sekilas tentang sekolah -->
        <div class="col-fluid">
          <div class="featured-text text-center text-lg-left">
            <div class="col text-center">
          <h2 class="section-heading text-uppercase">Data Guru SMK Medikacom Bandung</h2>
          <h3 class="section-subheading text-muted">Informasi Data Guru</h3>
        </div>
      </div>
        <div class="container data_buku">
          <div class="row">
           <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="120%" cellspacing="0">
                    <thead class="bg-info text-white"> 
                      <tr class="text-center">
                        <th>No         </th>
                        <th>Nama </th>
                        <th>Alamat </th>
                        <th>Telepon Guru</th>
                        <th>Mata Pelajaran</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no = 0;
                      foreach($guru as $s):$no++;?>
                      <tr>
                        <td class="text-center text-middle"><?=$no;?></td>
                        <td class="text-middle"><?=$s['nama_guru'];?></td>
                        <td class="text-middle"><?=$s['alamat_guru'];?></td>
                        <td class="text-middle"><?=$s['telepon_guru'];?></td>
                        <td class="text-middle"><?=$s['pelajaran'];?></td>
                        <td class="text-middle"><?=$s['email'];?></td>
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
</section>
  <!-- Data Guru  -->
  
  <section id="Walikelas" class="projects-section bg-light">
    <div class="container-fluid">
      <!-- Sekilas tentang sekolah -->
        <div class="col-fluid">
          <div class="featured-text text-center text-lg-left">
            <div class="col text-center">
          <h2 class="section-heading text-uppercase">Data Walikelas SMK Medikacom Bandung</h2>
          <h3 class="section-subheading text-muted">Informasi Data Walikelas</h3>
        </div>
      </div>
        <div class="container data_buku">
          <div class="row">
           <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable1" width="120%" cellspacing="0">
                    <thead class="bg-info text-white"> 
                     <tr>
                       <th>No.</th>
                       <th>Kelas</th>
                       <th>Nama Guru</th>
                       <th>No Telepon</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                       $sql = $this->db->query("SELECT xtb_class.kelas , xtb_teacher.nama_guru, xtb_teacher.telepon_guru FROM
                             (xtb_class JOIN xtb_teacher ON xtb_class.nip=xtb_teacher.nip)group by kelas");
                       $no = 1;
                       foreach ($sql->result() as $row) {
                        ?>
                    <tr>
                       <td><?php echo $no++; ?></td>
                       <td><?php echo $row->kelas; ?></td>  
                       <td><?php echo $row->nama_guru; ?></td>
                       <td><?php echo $row->telepon_guru; ?></td>
                    </tr>
                      <?php } ?>
                    </tbody>
                  </table>
        </div>
        </div>
        </div>
          </div>
        </div>
      </div>
</section>
<br><br>
  <section class="page-section" id="Siswa">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2 class="section-heading text-uppercase">Data Siswa SMK Medikacom Bandung</h2>
          <h3 class="section-subheading text-muted">Informasi Data Siswa</h3>
        </div>
      </div>
      <div class="container">
         
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse show" id="multiCollapseExample2">
            <div class="card shadow-lg">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable2" width="200%" cellspacing="0">
                    <thead class="bg-info text-white"> 
                      <tr class="text-center">
                        <th>No         </th>
                        <th>Nis   </th>
                        <th>Nama    </th>
                        <th>Alamat </th>
                        <th>Tgl_lahir</th>
                        <th>Jk</th>
                        <th>Telp</th>
                        <th>Kelas </th>
                        <th>Jurusan </th>
                      </tr>
                    </thead>
                <tbody>
                    <?php 
                       $sql = $this->db->query("SELECT * from siswa_v");
                       $no = 1;
                       foreach ($sql->result() as $row) {
                        ?>
                    <tr>
                       <td><?php echo $no++; ?></td>
                       <td><?php echo $row->nis; ?></td>  
                       <td><?php echo $row->nama_lengkap; ?></td>
                       <td><?php echo $row->almt_lengkap; ?></td>
                       <td><?php echo $row->tgl_lahir; ?></td>
                       <td><?php echo $row->jenis_kel; ?></td>
                       <td><?php echo $row->telepon ; ?></td>
                       <td><?php echo $row->kelas ; ?></td>
                       <td><?php echo $row->kode_jurusan ; ?></td>

                    </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      
      </div>
      </div>
    </div>
        
    </section>
    <br>
    <br>
    <!-- Data Pembinaan --> 
  <section class="page-section" id="Pembinaan">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2 class="section-heading text-uppercase">Data Pembinaan Siswa SMK Medikacom Bandung</h2>
          <h3 class="section-subheading text-muted">Informasi Data Pembinaan Siswa</h3>
        </div>
      </div>
      <div class="container">
         
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse show" id="multiCollapseExample2">
            <div class="card shadow-lg">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable3" width="120%" cellspacing="0">
                    <thead class="bg-info text-white"> 
                     <tr>
                       <th>No.</th>
                        <th>Kode Pembinaan  </th>
                        <th>Tgl Pembinaan</th>
                        <th>Nis</th>
                        <th>Nama </th>
                        <th>Kelas </th>
                        <th>Permasalahan</th>
                        <th>Kategori</th>
                        <th>Tindakan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                       $sql = $this->db->query("SELECT * from pembinaan_cuy group by kode_pembinaan");
                       $no = 1;
                       foreach ($sql->result() as $row) {
                        ?>
                    <tr>
                       <td><?php echo $no++; ?></td>
                       <td><?php echo $row->kode_pembinaan; ?></td>  
                       <td><?php echo $row->tgl_pembinaan; ?></td>
                       <td><?php echo $row->nis; ?></td>
                       <td><?php echo $row->nama_lengkap; ?></td>
                       <td><?php echo $row->kelas; ?></td>
                       <td><?php echo $row->permasalahan; ?></td>
                       <td><?php echo $row->kategori; ?></td>
                       <td><?php echo $row->nm_tindakan; ?></td>

                    </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      
      </div>
      </div>
    </div>

    </section>
    <br>
    <br>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">Kampus 1 : Jl. Rancabolang Soekarno-Hatta No. 10B
                <br>
                Kampus 2 : Jl. Soekarno Hatta No.617/619 Bandung</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">Info@medikacom.sch.id</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">(022) 7314090</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; @DaniHamdani_2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url('asset_end_user/vendor/jquery/jquery.min.js') ; ?>"></script>
  <script src="<?php echo base_url('asset_end_user/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  
  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url('asset_end_user/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset_end_user/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset_end_user/datatables/jquery.dataTables.min.js'); ?>"></script>
  <!-- Contact form JavaScript -->
  <script src="<?php echo base_url('asset_end_user/js/jqBootstrapValidation.js'); ?>"></script>
  <script src="<?php echo base_url('asset_end_user/js/contact_me.js') ; ?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url('asset_end_user/js/agency.min.js'); ?>"></script>
  <script type="text/javascript"> 
  $(document).ready(function(){
  $('#dataTable').DataTable();
  $('#dataTable1').DataTable();
  $('#dataTable2').DataTable();
  $('#dataTable3').DataTable();
  });
  </script>
    <script src="<?=base_url('vendor/chart.js/Chart.min.js');?>"></script>
    <script src="<?=base_url('vendor/datatables/jquery.dataTables.js');?>"></script>
    <script src="<?=base_url('vendor/datatables/dataTables.bootstrap4.js');?>"></script>
  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url('asset_end_user/js/grayscale.min.js');?>"></script>
  <script src="<?=base_url('js/demo/datatables-demo.js');?>"></script>
  <script src="<?=base_url('js/demo/chart-area-demo.js');?>"></script>
  
</body>

</html>
