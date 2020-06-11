<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page_pelanggan extends MY_Controller
{
  private $filename = "import_data"; // Kita tentukan nama filenya

  public function __construct()
  {
    parent::__construct();
    $this->load->model('UserModel');
    $this->load->helper('url', 'form');
    //load libary pagination
    $this->load->library('pagination');
  }
  public function welcome()
  {
    $this->load->view('templates/header_pelanggan');
    $this->load->view('welcome');
    $this->load->view('templates/footer');
  }
  public function gantiPassword()
  {
    $this->load->view('templates/header_pelanggan');
    $this->authenticated();
    $this->load->view('pelanggan/gantiPassword');
    $this->load->view('templates/footer');
  }
  public function pengaduan()
  {
    $data['pengaduan'] = $this->UserModel->getAllDatapengaduan();
    $this->load->view('templates/header_pelanggan');
    $this->authenticated();
    $this->load->view('pelanggan/pengaduan', $data);
    $this->load->view('templates/footer');
  }

  public function pelanggan()
  {
    $data['cstm'] = $this->UserModel->getAllDatapelanggan();
    $this->load->view('templates/header_pelanggan');
    $this->authenticated();
    $this->load->view('pelanggan/pelanggan', $data);
    $this->load->view('templates/footer');
  }

  public function pembayaran()
  {
    $data['bayar'] = $this->UserModel->getAllDatabayar();
    $this->load->view('templates/header_pelanggan');
    $this->authenticated();
    $this->load->view('pelanggan/pembayaran', $data);
    $this->load->view('templates/footer');
  }

  public function gantiPasswordNow()
  {
    $this->UserModel->gantiPasswordNow();
    $this->session->set_flashdata('flash_sukses', 'BERHASIL diubah');
    redirect('page_pelanggan/gantiPassword');
  }

  #untuk pelanggan
  public function pelanggan_tambah()
  {
    $this->UserModel->tambahDatapelanggan();
    $this->session->set_flashdata('flash_sukses', 'BERHASIL ditambahkan');
    redirect('page_pelanggan/pelanggan');
  }
  public function pelanggan_hapus($id)
  {
    $this->UserModel->hapusDatapelanggan($id);
    $this->session->set_flashdata('flash_sukses', 'BERHASIL dihapus');
    redirect('page_pelanggan/pelanggan');
  }
  public function pelanggan_ubah($id)
  {
    $data['cstm'] = $this->UserModel->getDatapelanggan($id);
    $this->load->view('templates/header_pelanggan');
    $this->load->view('pelanggan/pelanggan_ubah', $data);
    $this->load->view('templates/footer');
  }
  public function pelanggan_edit()
  {
    $this->UserModel->ubahDatapelanggan();
    $this->session->set_flashdata('flash_sukses', 'BERHASIL diubah');
    redirect('page_pelanggan/pelanggan');
  }
  #untuk Pembayaran
  public function bayar_tambah()
  {
    $this->UserModel->tambahDatabayar();
    $this->session->set_flashdata('flash_sukses', 'BERHASIL ditambahkan');
    redirect('page_pelanggan/pembayaran');
  }
  public function bayar_hapus($id)
  {
    $this->UserModel->hapusDatabayar($id);
    $this->session->set_flashdata('flash_sukses', 'BERHASIL dihapus');
    redirect('page_pelanggan/pembayaran');
  }
  public function bayar_ubah($id)
  {
    $data['bayar'] = $this->UserModel->getDatabayar($id);
    $this->load->view('templates/header_pelanggan');
    $this->load->view('pelanggan/pembayaran_ubah', $data);
    $this->load->view('templates/footer');
  }
  public function bayar_edit()
  {
    $this->UserModel->ubahDatabayar();
    $this->session->set_flashdata('flash_sukses', 'BERHASIL diubah');
    redirect('page_pelanggan/pembayaran');
  }

  #UNTUK PENGADUAN
  public function pengaduan_tambah()
  {
    $this->UserModel->tambahDatapengaduan();
    $this->session->set_flashdata('flash_sukses', 'BERHASIL ditambahkan');
    redirect('page_pelanggan/pengaduan');
  }
  public function pengaduan_hapus($id)
  {
    $this->UserModel->hapusDatapengaduan($id);
    $this->session->set_flashdata('flash_sukses', 'BERHASIL dihapus');
    redirect('page_pelanggan/pengaduan');
  }
  public function pengaduan_ubah($id)
  {
    $data['pengaduan'] = $this->UserModel->getDatapengaduan($id);
    $this->load->view('templates/header_pelanggan');
    $this->load->view('pelanggan/pengaduan_ubah', $data);
    $this->load->view('templates/footer');
  }
  public function pengaduan_edit()
  {
    $this->UserModel->ubahDatapengaduan();
    $this->session->set_flashdata('flash_sukses', 'BERHASIL diubah');
    redirect('page_pelanggan/pengaduan');
  }

  #import Pelanggan
  public function form_i_pelanggan()
  {
    $data = array(); // Buat variabel $data sebagai array

    if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
      // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
      $upload = $this->UserModel->upload_file($this->filename);

      if ($upload['result'] == "success") { // Jika proses upload sukses
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx'); // Load file yang tadi diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

        // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
        // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
        $data['sheet'] = $sheet;
      } else { // Jika proses upload gagal
        $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }

    $this->load->view('templates/header_pelanggan');
    $this->load->view('form_import_pelanggan', $data);
  }
  public function import_pelanggan()
  {
    // Load plugin PHPExcel nya
    include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

    $excelreader = new PHPExcel_Reader_Excel2007();
    $loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

    // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
    $data = array();

    $numrow = 1;
    foreach ($sheet as $row) {
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah nama-nama kolom
      // Jadi dilewat saja, tidak usah diimport
      if ($numrow > 1) {
        // Kita push (add) array data ke variabel data
        array_push($data, array(
          'no_pelanggan' => $row['A'], // Insert data nis dari kolom A di excel
          'nama' => $row['B'], // Insert data nama dari kolom B di excel
          'alamat' => $row['C'], // Insert data jenis kelamin dari kolom C di excel
          'email' => $row['D'], // Insert data alamat dari kolom D di excel
          'tgl_lahir' => $row['E'], // Insert data alamat dari kolom D di excel
          'jk' => $row['F'], // Insert data alamat dari kolom D di excel
          'no_ktp' => $row['G'], // Insert data alamat dari kolom D di excel
          'no_telp' => $row['H'], // Insert data alamat dari kolom D di excel
          'telp_rumah' => $row['I'], // Insert data alamat dari kolom D di excel
          'zona' => $row['J'], // Insert data alamat dari kolom D di excel
          'tarif' => $row['K'], // Insert data alamat dari kolom D di excel
          'kategori' => $row['L'], // Insert data alamat dari kolom D di excel
          'pakai_meter' => $row['M'], // Insert data alamat dari kolom D di excel
          'tgl_reg' => $row['N'], // Insert data alamat dari kolom D di excel
          'status' => $row['O'], // Insert data alamat dari kolom D di excel
          'biaya_instalasi' => $row['P'], // Insert data alamat dari kolom D di excel
          'nama_pegawai' => $row['Q'], // Insert data alamat dari kolom D di excel          
        ));
      }
      $numrow++; // Tambah 1 setiap kali looping
    }

    // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
    $this->UserModel->insert_multiple_pelanggan($data);

    redirect('page_pelanggan/pelanggan');
    // Redirect ke halaman awal (ke controller siswa fungsi index)
  }
  public function cetak_pelanggan($no_pelanggan)
  {
    $data = array(
      'data' => $this->db->query("SELECT * FROM pelanggan where no_pelanggan='$no_pelanggan'"),
    );
    $this->load->view('templates/header_pelanggan');
    $this->load->view('laporan/cetak_pelanggan', $data);
    $this->load->view('templates/footer');
  }
}
