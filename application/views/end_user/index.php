<!DOCTYPE html>
<html>

<head>
  <title>SISTEM INFORMASI PERSEDIAAN AIR MINERAL (PAM)</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="<?=base_url('asset_end_user/css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
  <link href="<?=base_url('asset_end_user/css/style.css');?>" rel="stylesheet" media="screen">
  <link href="<?=base_url('asset_end_user/color/default.css');?>" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">



  <!-- =======================================================
    Theme Name: Alstar
    Theme URL: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand ssa" href="<?= base_url('main'); ?>">IS-PAM V1
        </a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a class="ssa" href="#intro">Home</a></li>
          <li><a class="ssa" href="#contact">Contact</a></li>
          <li><a class="ssa" href="#contact">Daftar Pelanggan Baru</a></li>
          <li><a class="navigation collapse navbar-collapse navbar-ex1-collapse" href="#portfolio">Works</a></li>
       
          <li class="nav-item dropdown">
            <a class="ssa" class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-inverse"></i>
              <span>Tentang Perusahaan</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="navigation collapse navbar-collapse navbar-ex1-collapse" href="#about">Profil Perusahaan</a>
              <a class="navigation collapse navbar-collapse navbar-ex1-collapse" href="#services">Layanan kami</a>
              <a class="navigation collapse navbar-collapse navbar-ex1-collapse" href="#team">Team</a>
            </div>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="ssa" class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-inverse"></i>
              <span>Daftar Account / Login App</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <!-- <h6 class="dropdown-header">Laporan Master :</h6> -->
              <a class="navigation collapse navbar-collapse navbar-ex1-collapse" href="<?= base_url('Auth'); ?>">Login</a><br>
              <a class="navigation collapse navbar-collapse navbar-ex1-collapse" href="#daftarin">Daftar</a>
            </div>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
 <!-- intro area -->
  <section id="intro" style="z-index: 10000;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="item active">
            <div class="carousel-background"><img src="<?= base_url('asset_end_user/img/intro/2.jpg'); ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">PT.Tirta Alam Kencana</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Profil Perusahaan</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="item">
            <div class="carousel-background"><img src="<?= base_url('asset_end_user/img/intro/1.jpg'); ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">PT.Tirta Alam Kencana</span></h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Profil Perusahaan</a>
              </div>
            </div>
            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon fa fa-angle-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon fa fa-angle-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
        </div>
  </section><!-- #intro -->

  <!-- About -->
  <section id="about" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Company Profile PT.Tirta Alam Kencana</h2>
            <div class="heading-line"></div>
            <p>We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-6 about-img">
                    <img src="<?= base_url('assets/img/logo.png'); ?>" width="350">
        </div>

        <div class="col-md-6 content">
          <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elite storium paralate</h2>
          <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.</h3>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum Libero justo laoreet sit amet
            cursus sit amet dictum sit. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend
            donec Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 1 -->
  <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
            <h2 class="wow bounceInDown" data-wow-delay="0.5s">Details are the key for perfection</h2>
            <p class="lead wow bounceInUp" data-wow-delay="1s">We mix all detailed things together</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Layanan Kami</h2>
            <div class="heading-line"></div>
            <p>We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-service" class="service carousel slide">

            <!-- slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Pemasangan Baru</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="<?=base_url('asset_end_user/img/screenshots/1.png');?>" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Maintenance/Perawatan</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="<?=base_url('asset_end_user/img/screenshots/2.png');?>" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Pencatatan dan Pembayaran</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="<?=base_url('asset_end_user/img/screenshots/3.png');?>" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-service" data-slide-to="1"></li>
              <li data-target="#carousel-service" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Works -->
  <section id="portfolio" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Works</h2>
            <div class="heading-line"></div>
            <p>We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <ul id="og-grid" class="og-grid">
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/1.jpg');?>" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim, an movet interesset necessitatibus mea.">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/1.jpg');?>" alt="" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/2.jpg');?>" data-title="Portfolio title" data-description="Mea an eros periculis dignissim, quo mollis nostrum elaboraret et. Id quem perfecto mel, no etiam perfecto qui. No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/2.jpg');?>" alt="" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/3.jpg');?>" data-title="Portfolio title" data-description="Vim ad persecuti appellantur. Eam ignota deterruisset eu, in omnis fierent convenire sed. Ne nulla veritus vel, liber euripidis in eos. Postea comprehensam vis in, detracto deseruisse mei ea. Ex sadipscing deterruisset concludaturque quo.">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/3.jpg');?>" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/4.jpg');?>" data-title="Portfolio title" data-description="In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim, an movet interesset necessitatibus mea.">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/4.jpg');?>" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/5.jpg');?>" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/5.jpg');?>" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/6.jpg');?>" data-title="Portfolio title" data-description="Id elit saepe pro. In atomorum constituam definitionem quo, at torquatos sadipscing eum, ut eum wisi meis mentitum. Probo feugiat ea duo. An usu platonem instructior, qui dolores inciderint ad. Te elit essent mea, vim ne atqui legimus invenire, ad dolor vitae sea.">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/6.jpg');?>" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/7.jpg');?>" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei.">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/7.jpg');?>" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/8.jpg');?>" data-title="Portfolio title" data-description="No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/8.jpg');?>" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/9.jpg');?>" data-title="Portfolio title" data-description="Lorem ipsum dolor sit amet, ex pri quod ferri fastidii. Mazim philosophia eum ad, facilisis laboramus te est. Eam magna fabellas ut. Ne vis diceret accumsan salutandi, pro in impedit accusamus dissentias, ut nonumy eloquentiam ius.">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/9.jpg');?>" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/10.jpg');?>" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim.">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/10.jpg');?>" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/11.jpg');?>" data-title="Portfolio title" data-description="Vim ad persecuti appellantur. Eam ignota deterruisset eu, in omnis fierent convenire sed. Ne nulla veritus vel, liber euripidis in eos. Postea comprehensam vis in, detracto deseruisse mei ea. Ex sadipscing deterruisset concludaturque quo.">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/11.jpg');?>" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?=base_url('asset_end_user/img/works/12.jpg');?>" data-title="Portfolio title" data-description="Mea an eros periculis dignissim, quo mollis nostrum elaboraret et. Id quem perfecto mel, no etiam perfecto qui. No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">
                <img src="<?=base_url('asset_end_user/img/works/thumbs/12.jpg');?>" alt="img01" />
              </a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 2 -->
  <section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="clients">
            <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#"><img src="<?=base_url('asset_end_user/img/clients/1.png');?>" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="#"><img src="<?=base_url('asset_end_user/img/clients/2.png');?>" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="#"><img src="<?=base_url('asset_end_user/img/clients/3.png');?>" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="#"><img src="<?=base_url('asset_end_user/img/clients/4.png');?>" alt="" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section id="team" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Our Team</h2>
            <div class="heading-line"></div>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
              laborum</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="<?=base_url('asset_end_user/img/team/1.jpg');?>" alt="" class="img-circle img-responsive" />
            <h4>Dominique Vroslav</h4>
            <p>Art Director</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
          <div class="box-team wow bounceInUp">
            <img src="<?=base_url('asset_end_user/img/team/2.jpg');?>" alt="" class="img-circle img-responsive" />
            <h4>Thomas Jeffersonn</h4>
            <p>Web Designer</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
          <div class="box-team wow bounceInUp">
            <img src="<?=base_url('asset_end_user/img/team/3.jpg');?>" alt="" class="img-circle img-responsive" />
            <h4>Nola Maurin</h4>
            <p>Illustrator</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
          <div class="box-team wow bounceInUp">
            <img src="<?=base_url('asset_end_user/img/team/4.jpg');?>" alt="" class="img-circle img-responsive" />
            <h4>Mira Ladovic</h4>
            <p>Typographer</p>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- pendaftaran pelanggan -->
  <section id="daftarin" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Pendaftaran User Aplikasi PAM Air V1</h2>
            <div class="heading-line"></div>
            <p>Buat account terlebih dahulu untuk dapat melakukan Transaksi di aplikasi !</p>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <!-- <div id="errormessage"></div> -->

            <!-- <form action="" method="post" > -->
            <form method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-horizontal contactForm" role="form" action="<?= base_url('main/pengguna_tambah'); ?>">
              <div class="col-md-offset-2 col-md-8">
                <div class="form-group">
                  <input type="text" name="username" class="form-control" id="username" placeholder="Username" />
                  <div class="validation"></div>
                </div>
              </div>

              <div class="col-md-offset-2 col-md-8">
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" data-rule="password" />
                  <div class="validation"></div>
                </div>
              </div>

              <div class="col-md-offset-2 col-md-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama user" />
                  <div class="validation"></div>
                </div>
              </div>
              <input type="hidden" class="form-control" id="id_level" name="id_level" value=4 required>
              <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                  <button type="submit" class="btn btn-theme btn-lg btn-block">Save</button>
                </div>
              </div>
            </form>

          </div>

        </div>
      </div>
  </section>


  <!-- Contact -->
  <section id="contact" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Contact us</h2>
            <div class="heading-line"></div>
            <p>If you have any question or just want to say 'hello' to Alstar web studio please fill out form below and
              we will be get in touch with you within 24 hours. </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="" method="post" class="form-horizontal contactForm" role="form">
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-theme btn-lg btn-block">Send message</button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </section>
  
  <section>
      <div id="googleMap" style="width:100%;height:380px;"></div> 
  </section>

  <div style="position:fixed; left:20px; bottom:20px;">
  <a href="https://wa.me/6285721788805?text=Hai, PT.Tirta Kencana Alam , saya sedang mempunyai masalah , apakah anda bisa membantu? (ini APi Pesan Whatsapp)">
  <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px">
  <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png">&nbsp; Whatsapp Kami</button></a>
  </div>
  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Main Office</h5>
            <p>
              Jl. Jatihandap No.35, Jatihandap, Kec. Mandalajati, Bandung, Jawa Barat 40193
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Call</h5>
            <p>
               (022) 7236124

            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email us</h5>
            <p>
             Tirtakencanaalam@gmail.com
            </p>
          </div>
        </div>
      </div>
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>We're on social networks</h5>
          <ul class="social-network">
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="https://wa.me/6285220694888?text=Hai, PT.Tirta Kencana Alam , saya sedang mempunyai masalah , apakah anda bisa membantu? (ini APi Pesan Whatsapp)">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; Dani Hamdani.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
            -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top" style="border-style: solid; border-color: #fff; margin-bottom: 15px; margin-right: 5px; border-radius: 5px; border-width: 1.2px;"><i class="fa fa-chevron-up"></i></a>

  <!-- js -->
  <script src="<?=base_url('asset_end_user/js/jquery.js');?>"></script>
  <script src="<?=base_url('asset_end_user/js/bootstrap.min.js');?>"></script>
  <script src="<?=base_url('asset_end_user/js/wow.min.js');?>"></script>
  <script src="<?=base_url('asset_end_user/js/jquery.scrollTo.min.js');?>"></script>
  <script src="<?=base_url('asset_end_user/js/jquery.nav.js');?>"></script>
  <script src="<?=base_url('asset_end_user/js/stellar.js');?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?=base_url('asset_end_user/contactform/contactform.js')?>"></script>
  <script src="<?php echo base_url();?>assets/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="<?=base_url('asset_end_user/js/custom.js');?>"></script>
  <script type="text/javascript"> 
  $(document).ready(function(){
  $('#dataTable').DataTable();
  $('#dataTable1').DataTable();
  $('#dataTable2').DataTable();
  $('#dataTable3').DataTable();
  });
  </script>
 <script src="http://maps.googleapis.com/maps/api/js"></script>
 <script>
  
function taruhMarker(peta, posisiTitik){
    // membuat Marker
    var marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
    });
}
  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-6.914744,107.609810),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

 </script>
  </body>

</html>
