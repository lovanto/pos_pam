<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Informasi Bimbingan Konseling SMK MEDIKACOM</title>
  <style>
            /*fix margin pagination*/
            .pagination1{
                margin-top: 0px;
            }
        </style>
  <link rel="icon" href="<?php echo base_url('asset_end_user/icon.ico'); ?>" type="image/x-icon" />
  <link rel="stylesheet" href="<?php echo base_url('asset/css/default.css'); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url('asset/css/nivo-slider.css'); ?>" type="text/css" media="screen" />
  <style type="text/css">
  body {margin:0px; padding:0px;}
  </style>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset_end_user/mystyle.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset_end_user/chat.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset_end_user/modal.css');?>">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('asset_end_user/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('asset_end_user/datatables/dataTables.bootstrap4.min.css') ; ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset_end_user/datatables/dataTables.bootstrap4.css') ; ?>">
  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('asset_end_user/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('asset_end_user/css/agency.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#"><img class="logo" src="<?=base_url('assets/img/SMK-MEDIKACOM.png');?>" alt="Logo" width="50" height="50"></a>
       <a class="navbar-brand js-scroll-trigger" href="#page-top">Bimbingan Konseling</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
  </button>
      	<div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
       	 <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil Data
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <div class="dropdown-item disabled">Sekolah</div>
              <a class="dropdown-item text-primary" href="#sekilas" >&nbsp;&nbsp;Sekilas Profile Sekolah</a>
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
              <a class="dropdown-item text-primary" href="#guru" >&nbsp;&nbsp;Data Guru</a>
              <a class="dropdown-item text-primary" href="#Walikelas">&nbsp;&nbsp;Data Walikelas</a>
              <a class="dropdown-item text-primary" href="#Siswa" >&nbsp;&nbsp;Data Siswa</a>
              <div class="dropdown-divider"></div>
              <div class="dropdown-item disabled">Bimbingan Konseling</div>
              <a class="dropdown-item text-primary" href="#Pembinaan">&nbsp;&nbsp;Data Pembinaan Konseling</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Feature Lainnya
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <div class="dropdown-item disabled">Layanan Bimbingan Konseling</div>
              <a class="dropdown-item text-primary" href="#services">Layanan Kami</a>
              <a class="dropdown-item text-primary" href="#about">Artikel</a>
              <a class="dropdown-item text-primary" href="#contact">Contact Us</a>
              <div class="dropdown-divider"></div>
              <div class="dropdown-item disabled">Lain-Lain</div>
              <a class="dropdown-item text-primary" href="#portfolio">Album BK</a>
              <a class="dropdown-item text-primary" href="#team">System Developer</a>
              <a class="dropdown-item text-primary" href="#FotoBinaan">Foto Pembinaan</a>
            </div>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth');?>">Login </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in boldFont headerFont animated fadeInLeft" style="margin-left: 50px; color: #fff;">   Welcome to Sistem Informasi Bimbingan Konseling </div>
        <div class="intro-heading littleFont animated fadeInDown" style="margin-center: 50px; color: #fff;">  SMK Medikacom Bandung</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">
News Update</a>
      </div>
    </div>
  </header>
<!-- Sekilas --> 
  <section class="page-section" id="sekilas">
    <div class="container">
      <div class="row">
        <div class="jumbotron" align="center">
      <table width="100%" border="0" style="margin-top: -40px">
        <tbody>
          <tr>

            <div class="col text-center">
                  <h2 class="section-heading text-uppercase">Aktivitas SMK Medikacom Bandung</h2>
                  <h3 class="section-subheading text-muted">Aktifitas Akademik dan Non Akademik</h3>
            </div>
            <br>
            <br>
            <br>
            <br>
            <td rowspan="2" width="60%" valign="top">
              <strong><p>Aktivitas Kampus</p></strong>
              <p>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100 rounded rounded" src="<? echo base_url ('medkom/images/sekolah/sosialisasi.jpg');?>" alt="First slide" width="100%" height="400">
                      <div class="carousel-caption d-none d-md-block">
                        <h6>SOSIALISASI</h6>
                        <p>Sosialisasi untuk guru di Smk MedikaCom.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 rounded" src="<? echo base_url ('medkom/images/sekolah/tour.jpg'); ?>" alt="Second slide" width="100%" height="400">
                      <div class="carousel-caption d-none d-md-block">
                        <h6>HDC TOUR GO TO MEDIKACOM</h6>
                        <p>HDC Tour menyambangi SMK Medikacom Bandung dalam rangka kegiatan HDC Tour pada hari Sabtu 21 April 2018.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 rounded" src="<? echo base_url ('medkom/images/sekolah/safety.jpg'); ?>" alt="Third slide" width="100%" height="400">
                      <div class="carousel-caption d-none d-md-block">
                        <h6>SAFETY RIDING</h6>
                        <p>SMK Medikacom Menjadi Sekolah Safety Riding Pertama di Jawa Barat</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
              </p>
              <p><strong>Pengumuman</strong></p>
              <div class="card" style="margin-right: 25px;">
                <div class="card-body">
                  <h6 class="card-title">Judul Pengumuman</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Sub judul</h6>
                  <p class="card-text">Content Pengumunan</p>
                  <a href="#" class="card-link">Previous</a>
                  <a href="#" class="card-link">Next</a>
                </div>
              </div>
            </p>
          </td>
          <td width="38%" height="215" valign="top">
            <strong><p>Aktivitas Siswa</p>
            </strong>
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 rounded" src="<? echo base_url ('medkom/images/siswa/ujikom_rpl.jpg'); ?>" alt="First slide" width="100%" height="250">
                  <div class="carousel-caption d-none d-md-block">
                    <h6>UJIKOM</h6>
                    <p>Ujikom Siswa - Siswi SMK MedikaCom.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 rounded" src="<? echo base_url ('medkom/images/siswa/20170613_081522.jpg'); ?>" alt="Second slide" width="100%" height="250">
                  <div class="carousel-caption d-none d-md-block">
                    <h6>KEROHANIAN MINGGUAN</h6>
                    <p>Kegiatan Kerohanian yang dilaksanakan tiap minggu di SMK MedikaCom.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 rounded" src="<? echo base_url ('medkom/images/siswa/images.jpg'); ?>" alt="Third slide" width="100%" height="250">
                  <div class="carousel-caption d-none d-md-block">
                    <h6>KEGIATAN LAB FARMASI</h6>
                    <p>Kegiatan pembelajaran siswa - siswi jurusan farmasi di dalam lab.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div
          </td>
        </tr>
        <tr>
          <td height="246" valign="top"><strong><p>Prestasi Kami</p>
          </strong>
          <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 rounded" src="<? echo base_url ('medkom/images/prestasi/tegal.jpeg');?>" alt="First slide" width="100%" height="250">
                <div class="carousel-caption d-none d-md-block">
                  <h6>JUARA 3 Web Design</h6>
                  <p>Siswa Alogical Backend Juara 3 Web Design Tingkat Nasional.</p>
                </div>
              </div>
               <div class="carousel-item">
                <img class="d-block w-100 rounded" src="<? echo base_url ('medkom/images/prestasi/3.jpg'); ?>" alt="Second slide" width="100%" height="250">
                <div class="carousel-caption d-none d-md-block">
                  <h6>JUARA 3 Web Design</h6>
                  <p>Siswa Alogical Backend Juara 3 Web Design Tingkat Nasional.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 rounded" src="<? echo base_url ('medkom/images/prestasi/2.jpg'); ?>" alt="Third slide" width="100%" height="250">
                <div class="carousel-caption d-none d-md-block">
                  <h6>JUARA 3 Web Design</h6>
                  <p>Siswa Alogical Backend Juara 3 Web Design Tingkat Nasional.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>  
      </div>
    </div>
    </section>
  <!-- Services --> 
  <section class="page-section" id="guru">
    <div class="container">
      <div class="row">
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
        
    </section>
<!-- Data Wali Kelas --> 
  <section class="page-section" id="Walikelas">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2 class="section-heading text-uppercase">Data Wali Kelas SMK Medikacom Bandung</h2>
          <h3 class="section-subheading text-muted">Informasi Data Walikelas</h3>
        </div>
      </div>
      <div class="container">
         
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse show" id="multiCollapseExample2">
            <div class="card shadow-lg">
              <div class="card-body">
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
    </div>

      
      </div>
      </div>
    </div>
        
    </section>
    <!-- Data Siswa --> 
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
<!-- Pembinaan BK --> 
  <section class="page-section" id="FotoBinaan">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2 class="section-heading text-uppercase">Gedung SMK Medikacom Bandung</h2>
        </div>
      </div>
    <div class="container">     
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse show" id="multiCollapseExample2">
            <div class="card shadow-lg">
              <div class="card-body">

               <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 rounded" src="<? echo base_url ('medkom/a.jpg'); ?>" alt="First slide" width="100%" height="250">
                <div class="carousel-caption d-none d-md-block">
                  <h6>Gedung Medikacom Kampus 1</h6>
                  <p>jl.Rancabolang No 10 B Badung</p>
                </div>
              </div>
               <div class="carousel-item">
                <img class="d-block w-100 rounded" src="<? echo base_url ('medkom/c.jpg'); ?>" alt="Second slide" width="100%" height="250">
                <div class="carousel-caption d-none d-md-block">
                  <h6>Gedung Medikacom Kampus 1</h6>
                  <p>jl.Rancabolang No 10 B Badung</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 rounded" src="<? echo base_url ('medkom/e.jpg'); ?>" alt="Third slide" width="100%" height="250">
                <div class="carousel-caption d-none d-md-block">
                  <h6>Gedung Medikacom Kampus 1</h6>
                  <p>jl.Rancabolang No 10 B Badung</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <!-- Services -->
  <section class="page-section" id="services">
        <div class="container">
  <div class="row">
    <div class="col-xl-3 col-md-3 mb-2">
      <div class="card border-left-primary shadow h-100 py-2 bg-primary">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-3">
              <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Siswa</div>
              <div class="h5 mb-0 font-weight-bold text-white"><?php echo $this->UserModel->get_data2('xtb_studentidentity')->num_rows(); ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-graduate fa-3x text-white "></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-3 mb-2">
      <div class="card border-left-danger shadow h-100 py-2 bg-danger">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2 ">
              <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Guru</div>
              <div class="h5 mb-0 font-weight-bold text-white">
                <?php echo $this->UserModel->get_data2('xtb_teacher')->num_rows(); ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-book fa-3x text-white  "></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-3 mb-2">
      <div class="card border-left-danger shadow h-100 py-2 bg-danger">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2 ">
              <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Siswa yang telah Dibina </div>
              <div class="h5 mb-0 font-weight-bold text-white">
                <?php echo $this->UserModel->get_data2('pembinaan')->num_rows(); ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-3x text-white  "></i>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <div class="col-xl-3 col-md-3 mb-2">
      <div class="card border-left-warning shadow h-100 py-2 bg-warning">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-3">
              <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Walikelas</div>
              <div class="h5 mb-0 font-weight-bold text-white"> <?php echo $this->UserModel->get_data2('wk2')->num_rows(); ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-book-reader fa-3x text-white"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
<br>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Layanan Kami</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-user fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Pendataan Siswa yang Konseling</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-balance-scale fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Punishment and Rewards</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-address-book fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Absensi</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">

      <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Galery Bimbingan Konseling</h2>
         
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('asset_end_user/img/portfolio/01-thumbnail.jpg'); ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Threads</h4>
            <p class="text-muted">Illustration</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('asset_end_user/img/portfolio/02-thumbnail.jpg'); ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Explore</h4>
            <p class="text-muted">Graphic Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('asset_end_user/img/portfolio/03-thumbnail.jpg'); ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Finish</h4>
            <p class="text-muted">Identity</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('asset_end_user/img/portfolio/04-thumbnail.jpg') ; ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Lines</h4>
            <p class="text-muted">Branding</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('img/portfolio/05-thumbnail.jpg') ; ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Southwest</h4>
            <p class="text-muted">Website Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('asset_end_user/img/portfolio/06-thumbnail.jpg'); ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url('asset_end_user/img/about/1.jpg'); ?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2009-2011</h4>
                  <h4 class="subheading">Our Humble Beginnings</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url('img/about/2.jpg'); ?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>March 2011</h4>
                  <h4 class="subheading">An Agency is Born</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url('asset_end_user/img/about/3.jpg'); ?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>December 2012</h4>
                  <h4 class="subheading">Transition to Full Service</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url('asset_end_user/img/about/4.jpg') ; ?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>July 2014</h4>
                  <h4 class="subheading">Phase Two Expansion</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url('asset_end_user/img/team/pawang.png'); ?>" alt="">
            <h4>Raihan Bachdim</h4>
            <p class="text-muted">Lead Designer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url('asset_end_user/img/team/hina.png') ; ?>" alt="">
            <h4>Rayhan Putra</h4>
            <p class="text-muted">Pro Player</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url('asset_end_user/img/team/2.jpg'); ?>" alt="">
            <h4>Hikam</h4>
            <p class="text-muted">New guy</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="<?php echo base_url('asset_end_user/img/logos/envato.jpg') ; ?>" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="<?php echo base_url('asset_end_user/img/logos/designmodo.jpg'); ?>" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="<?php echo base_url('asset_end_user/img/logos/themeforest.jpg') ; ?>" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="<?php echo base_url('asset_end_user/img/logos/creative-market.jpg') ; ?>" alt="">
          </a>
        </div>
      </div>
    </div>
    <button class="open-button zoom" onclick="openForm()">
        <img src="<?php echo base_url('asset_end_user/images/icon/message.png');?>" width="70" height="70">
      </button>

      <!-- chatting -->
  <div class="chat-popup" id="myForm">
    <div class="form-container" id="container">
      
      <h6>login dulu Sebelum menikmati Chat fitur</h6>

        <div id="body">
          <?= form_open() ?>
            <div><label>Username</label></div>
            <div><?= form_input(array('name' => 'username', 'placeholder' => 'Username')) ?></div>
            <div><label>Password</label></div>
            <div><?= form_password(array('name' => 'password', 'placeholder' => 'Password', 'autocomplete' => 'new-password')) ?></div>
            <div><?= form_submit(array('value' => 'Login')) ?></div>
            <div><button type="button" class="btn cancel" onclick="closeForm()">Close</button></div>
          <?= form_close() ?>
          <hr />
          *Login siswa dengan NIS<br>
          *Login guru dengan user aplikasi 
        </div>
    </div>

     
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">SARAN & MASUKAN</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; SMK Medikacom 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url('asset_end_user/img/portfolio/01-full.jpg'); ?>" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Threads</li>
                  <li>Category: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url('asset_end_user/img/portfolio/02-full.jpg'); ?>" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Explore</li>
                  <li>Category: Graphic Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url('asset_end_user/img/portfolio/03-full.jpg') ; ?>" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url('asset_end_user/img/portfolio/04-full.jpg'); ?>" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url('asset_end_user/img/portfolio/05-full.jpg'); ?>" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url('asset_end_user/img/portfolio/06-full.jpg'); ?>" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
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

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('js/sb-admin.min.js');?>"></script>

    <!-- Demo scripts for this page-->
    
    
    <script src="<?=base_url('vendor/sweetalert2-8.5.0/sweetalert2.all.min.js');?>"></script>
    <script src="<?=base_url('vendor/sweetalert2-8.5.0/myscript.js');?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/jquery-3_3_1.min.js');?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/popper-1_14_7.min.js');?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap-4_3_1.min.js');?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/all-fontawesome-5_7_2.js'); ?>"></script>
    <script src="<?= base_url('vendor/js/script.js');?>"></script>
    <script src="<?=base_url('js/demo/datatables-demo.js');?>"></script>
    <script src="<?=base_url('js/demo/chart-area-demo.js');?>"></script>
  <script>
  function openForm() {
      document.getElementById("myForm").style.display = "block";
  }
  function closeForm() {
      document.getElementById("myForm").style.display = "none";
  }
  function openForm2() {
      document.getElementById("loginModal").style.display = "block";
  }
  function closeForm2() {
      document.getElementById("loginModal").style.display = "none";
  }
  </script>
</body> 

</html>
