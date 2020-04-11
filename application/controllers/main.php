<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
    
  }

  public function index()
  {
	  $data['pelanggan']= $this->UserModel->getAllDatapelanggan();
	  $data['checker']= $this->UserModel->getAllDatacek();
	  $data['pembayaran']= $this->UserModel->getAllDatabayar();
	  return $this->load->view('end_user/index',$data);
  }
	public function pengguna_tambah(){
    $this->UserModel->tambahDatapengguna();
    // $this->session->set_flashdata('flash_sukses', 'BERHASIL ditambahkan');
    // redirect('main');
    //
  }
  
}
