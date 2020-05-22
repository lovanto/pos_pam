<div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flash_sukses'); ?>"></div>
<div class="flash-data2" data-flashdata="<?= $this->session->flashdata('flash_gagal'); ?>"></div>
<?php
$this->session->userdata('authenticated')
//$this->session->set_userdata($session);
?>
<div class="row" style="margin: 0.5rem;">
  <div class="col py-2">
    <button class="btn btn-info" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Pengguna
    </button>
  </div>
</div>

<div class="row" style="margin: 1rem;">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card">
        <div class="card-header bg-gray-500">Form Input Pengguna</div>
        <div class="card-body">
          <form method="post" accept-charset="utf-8" enctype="multipart/form-data" action="<?= base_url('page/pengguna_tambah'); ?>">

            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" required>
              <label>Password</label>
              <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="password" required>
              <label>Nama</label>
              <input type="text" class="form-control form-control-user" id="nama_user" name="nama_user" placeholder="nama User" required>
              <label>Role-(hak-akses)</label>
              <select name="id_level" class="form-control form-control-user" required>
                <option value="-">-pilihan-</option>
                <option value="1">Admin</option>
                <option value="2">Checker</option>
                <option value="3">Owner</option>
                <option value="4">Pelanggan</option>
              </select>
              <input type="hidden" class="form-control" id="user_create" name="user_create" value="<?= $this->session->userdata('nama_user'); ?>" required>
              <input name="create_date" type="hidden" id="create_date" value=" <?php echo date('Y-m-d'); ?> " readonly>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save">&nbsp;&nbsp;Simpan</i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="margin: 1rem;">
  <div class="col">
    <div class="collapse multi-collapse show" id="multiCollapseExample2">
      <div class="card shadow-lg">
        <div class="card-header bg-gray-500">Data Tabel Pengguna</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead class="bg-info text-white">
                <tr class="text-center">
                  <th>No </th>
                  <th>Username </th>
                  <th>Password </th>
                  <th>nama </th>
                  <th>Role(Hak Akses)</th>
                  <th>User Create</th>
                  <th>Create Date</th>
                  <th>User Update</th>
                  <th>Update Date</th>
                  <th>Aksi </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($admin as $s) : $no++; ?>
                  <tr>
                    <td class="text-center text-middle"><?= $no; ?></td>
                    <td class="text-middle"><?= $s['username']; ?></td>
                    <td class="text-middle"><?= $s['password']; ?></td>
                    <td class="text-middle"><?= $s['nama_user']; ?></td>
                    <td class="text-middle"><?= $s['nama_level']; ?></td>
                    <td class="text-middle"><?= $s['user_create']; ?></td>
                    <td class="text-middle"><?= $s['create_date']; ?></td>
                    <td class="text-middle"><?= $s['user_update']; ?></td>
                    <td class="text-middle"><?= $s['update_date']; ?></td>
                    <td class="text-center text-middle"><a href="<?= base_url('page/pengguna_ubah') ?>/<?= $s['id_user']; ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit text-success"></i></a> | <a href="<?= base_url('page/pengguna_hapus') ?>/<?= $s['id_user']; ?>" class="tombol_hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>