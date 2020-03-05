
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Overview</li>
    </ol>

    <!-- Area Chart Example-->
    <div class="card mb-3">
      <div class="card-header">
        <h1>Selamat datang <?=$this->session->userdata('nama_user'); ?></h1>
        <h5>Anda masuk sebagai<i> <?=$this->session->userdata('id_level'); ?></i></h5>
        <h4>Halaman ini hanya bisa diakses setelah login.</h4>
      </div>
    </div>