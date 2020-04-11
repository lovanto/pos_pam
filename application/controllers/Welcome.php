<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		$data['pelanggan'] = $this->UserModel->getAllDatapelanggan();
		$data['checker'] = $this->UserModel->getAllDatacek();
		$data['pembayaran'] = $this->UserModel->getAllDatabayar();
		return $this->load->view('end_user/index', $data);
	}

	public function pengguna_tambah()
	{
		$this->UserModel->tambahDatapengguna();
		// $this->session->set_flashdata('flash_sukses', 'BERHASIL ditambahkan');
		// redirect('main');
		//
	}
}
