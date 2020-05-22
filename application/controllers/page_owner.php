<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_owner extends MY_Controller {
  private $filename = "import_data"; // Kita tentukan nama filenya

  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
    $this->load->helper('url','form');
    //load libary pagination
    $this->load->library('pagination');
  }
  public function welcome(){
    $this->load->view('templates/header_owner');
    $this->load->view('welcome');
    $this->load->view('templates/footer');
  }
  public function gantiPassword(){
    $this->load->view('templates/header_owner');
    $this->authenticated();
    $this->load->view('gantiPassword');
    $this->load->view('templates/footer');
  }
  public function gantiPasswordNow(){
    $this->UserModel->gantiPasswordNow();
    $this->session->set_flashdata('flash_sukses', 'BERHASIL diubah');
    redirect('page_owner/gantiPassword');
  }
  #untuk pencarian pengguna
  public function cari(){
    $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
    $data['user'] = $this->UserModel->cari($keyword); //mencari data karyawan berdasarkan 
    // $data['user'] = $this->UserModel->view();
    $this->load->view('templates/header_owner');
    // $this->load->view('templates/sidebar');
    $this->load->view('laporan_periode/laporan_user', $data); //menampilkan data yang sudah dicari
    $this->load->view('templates/footer');
  }
  #untuk pencarian pembayaran
  public function cariPembayaran(){
    $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
    $metode = $this->input->get('metode', TRUE);
    $tanggal = $this->input->get('tanggal', TRUE);
    $data['pembayaran'] = $this->UserModel->cariPembayaran($keyword, $metode, $tanggal); //mencari data pembayaran berdasarkan 
    // $data['user'] = $this->UserModel->view();
    $this->load->view('templates/header_owner');
    // $this->load->view('templates/sidebar');
    $this->load->view('laporan_periode/laporan_pembayaran_harian', $data); //menampilkan data yang sudah dicari
    $this->load->view('templates/footer');
  }
  #untuk pencarian pembayaran
  public function cariCekMeteran(){
    $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
    $metode = $this->input->get('metode', TRUE);
    $tanggal = $this->input->get('tanggal', TRUE);
    $data['checker'] = $this->UserModel->cariCekMeteran($keyword, $metode, $tanggal); //mencari data pembayaran berdasarkan 
    // $data['user'] = $this->UserModel->view();
    $this->load->view('templates/header_owner');
    // $this->load->view('templates/sidebar');
    $this->load->view('laporan_periode/laporan_cek', $data); //menampilkan data yang sudah dicari
    $this->load->view('templates/footer');
  }
  #untuk pencarian pelanggan
  public function cariPelanggan(){
    $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
    $zonaCari = $this->input->get('zonaCari', TRUE);
    $data['pelanggan'] = $this->UserModel->cariPelanggan($keyword, $zonaCari); //mencari data karyawan berdasarkan 
    $this->load->view('templates/header_owner');
    // $this->load->view('templates/sidebar');
    $this->load->view('laporan_periode/laporan_pelanggan', $data); //menampilkan data yang sudah dicari
    $this->load->view('templates/footer');
  }
  #untuk pencarian pembayaran
  public function cariZona(){
    $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
    $data['zona'] = $this->UserModel->cariZona($keyword); //mencari data pembayaran berdasarkan 
    // $data['user'] = $this->UserModel->view();
    $this->load->view('templates/header_owner');
    // $this->load->view('templates/sidebar');
    $this->load->view('laporan_periode/laporan_zona', $data); //menampilkan data yang sudah dicari
    $this->load->view('templates/footer');
  }
  #function import data zona
  public function form(){
    $data = array(); // Buat variabel $data sebagai array
    
    if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
      // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
      $upload = $this->UserModel->upload_file($this->filename);
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        
        // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
        // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
        $data['sheet'] = $sheet; 
      }else{ // Jika proses upload gagal
        $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
      
    $this->load->view('templates/header_owner');
    $this->load->view('form_import_zona', $data);

  }
  
  public function import(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    
    $excelreader = new PHPExcel_Reader_Excel2007();
    $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
    
    // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
    $data = array();
    
    $numrow = 1;
    foreach($sheet as $row){
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah nama-nama kolom
      // Jadi dilewat saja, tidak usah diimport
      if($numrow > 1){
        // Kita push (add) array data ke variabel data
        array_push($data, array(
          'zona'=>$row['A'], // Insert data nis dari kolom A di excel
          'wilayah'=>$row['B'], // Insert data nama dari kolom B di excel
          'kategori'=>$row['C'], // Insert data jenis kelamin dari kolom C di excel
          'tarif'=>$row['D'], // Insert data alamat dari kolom D di excel
        ));
      }
      
      $numrow++; // Tambah 1 setiap kali looping
    }

    // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
    $this->UserModel->insert_multiple($data);
    
    redirect('page_owner/zona');
    // Redirect ke halaman awal (ke controller siswa fungsi index)
  }

  #import Pelanggan
  public function form_i_pelanggan(){
      $data = array(); // Buat variabel $data sebagai array
    
    if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
      // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
      $upload = $this->UserModel->upload_file($this->filename);
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        
        // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
        // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
        $data['sheet'] = $sheet; 
      }else{ // Jika proses upload gagal
        $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
      
    $this->load->view('templates/header_owner');
    $this->load->view('form_import_pelanggan', $data);

  }
  public function import_pelanggan(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    
    $excelreader = new PHPExcel_Reader_Excel2007();
    $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
    
    // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
    $data = array();
    
    $numrow = 1;
    foreach($sheet as $row){
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah nama-nama kolom
      // Jadi dilewat saja, tidak usah diimport
      if($numrow > 1){
        // Kita push (add) array data ke variabel data
        array_push($data, array(
          'no_pelanggan'=>$row['A'], // Insert data nis dari kolom A di excel
          'nama'=>$row['B'], // Insert data nama dari kolom B di excel
          'alamat'=>$row['C'], // Insert data jenis kelamin dari kolom C di excel
          'email'=>$row['D'], // Insert data alamat dari kolom D di excel
          'tgl_lahir'=>$row['E'], // Insert data alamat dari kolom D di excel
          'jk'=>$row['F'], // Insert data alamat dari kolom D di excel
          'no_ktp'=>$row['G'], // Insert data alamat dari kolom D di excel
          'no_telp'=>$row['H'], // Insert data alamat dari kolom D di excel
          'telp_rumah'=>$row['I'], // Insert data alamat dari kolom D di excel
          'zona'=>$row['J'], // Insert data alamat dari kolom D di excel
          'tarif'=>$row['K'], // Insert data alamat dari kolom D di excel
          'kategori'=>$row['L'], // Insert data alamat dari kolom D di excel
          'pakai_meter'=>$row['M'], // Insert data alamat dari kolom D di excel
          'tgl_reg'=>$row['N'], // Insert data alamat dari kolom D di excel
          'status'=>$row['O'], // Insert data alamat dari kolom D di excel
          'biaya_instalasi'=>$row['P'], // Insert data alamat dari kolom D di excel
          'nama_pegawai'=>$row['Q'], // Insert data alamat dari kolom D di excel          
        ));
      }
      $numrow++; // Tambah 1 setiap kali looping
    }

    // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
    $this->UserModel->insert_multiple_pelanggan($data);
    
    redirect('page_owner/pelanggan');
    // Redirect ke halaman awal (ke controller siswa fungsi index)
  }
    # pencarian data dan laporan checker
    public function cari_checker(){
    $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
    $data['checker'] = $this->UserModel->cari_checker($keyword); //mencari data karyawan berdasarkan inputan
    $this->load->view('templates/header_owner');
    // $this->load->view('templates/sidebar');
    $this->load->view('laporan_periode/laporan_checker', $data); //menampilkan data yang sudah dicari
    $this->load->view('templates/footer');
  }
   # untuk laporan checker
  public function laporan_checker()
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');
            $tanggal2=  $this->input->post('tanggal2');
            $data['checker']=  $this->UserModel->laporan_berkala($tanggal1,$tanggal2);
             $this->load->view('templates/header_owner');
             // $this->load->view('templates/sidebar');
             $this->load->view('laporan_periode/laporan_checker',$data);
             $this->load->view('templates/footer');
        }
        elseif(isset($_POST['submit2']))
        {
            $tanggal3=  $this->input->post('tanggal3');
            $tanggal4=  $this->input->post('tanggal4');
            $data['checker']=  $this->UserModel->laporan_berkala1($tanggal3,$tanggal4);
            $this->load->view('laporan/cetak_checker',$data);
        }
        else
        {
            $data['checker']=  $this->UserModel->laporan_checker_default();
            $this->load->view('templates/header_owner');
            // $this->load->view('templates/sidebar');
            $this->load->view('laporan_periode/laporan_checker',$data);
            $this->load->view('templates/footer');
        }

   }
     # pencarian data dan laporan pembayaran
    public function cari_pembayaran(){
    $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
    $data['pembayaran'] = $this->UserModel->cari_pembayaran($keyword); //mencari data karyawan berdasarkan inputan
    $this->load->view('templates/header');
    // $this->load->view('templates/sidebar');
    $this->load->view('laporan_periode/laporan_pembayaran', $data); //menampilkan data yang sudah dicari
    $this->load->view('templates/footer');
  }
   # untuk laporan pembayaran
  public function laporan_pembayaran()
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');
            $tanggal2=  $this->input->post('tanggal2');
            $data['pembayaran']=  $this->UserModel->laporan_berkala_pb($tanggal1,$tanggal2);
             $this->load->view('templates/header');
             // $this->load->view('templates/sidebar');
             $this->load->view('laporan_periode/laporan_pembayaran',$data);
             $this->load->view('templates/footer');
        }
        elseif(isset($_POST['submit2']))
        {
            $tanggal3=  $this->input->post('tanggal3');
            $tanggal4=  $this->input->post('tanggal4');
            $data['pembayaran']=  $this->UserModel->laporan_berkala1_pb($tanggal3,$tanggal4);
            $this->load->view('laporan/cetak_pembayaran',$data);
        }
        else
        {
            $data['pembayaran']=  $this->UserModel->laporan_pembayaran_default();
            $this->load->view('templates/header');
            // $this->load->view('templates/sidebar');
            $this->load->view('laporan_periode/laporan_pembayaran',$data);
            $this->load->view('templates/footer');
        }

   }
    public function cetak_pelanggan($no_pelanggan){
    $data = array(
      'data' => $this->db->query("SELECT * FROM pelanggan where no_pelanggan='$no_pelanggan'"),
    );
    $this->load->view('templates/header');
    $this->load->view('laporan/cetak_pelanggan',$data);
    $this->load->view('templates/footer');
  }
}
