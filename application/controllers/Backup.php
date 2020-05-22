<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backup extends MY_Controller
{
	public function index()
	{
		// Load the DB utility class
		$this->load->dbutil();

		$prefs = array(
			'tables'     => array('checker', 'level', 'pegawai', 'pelanggan', 'pembayaran', 'user', 'zona'),
			// Array table yang akan dibackup
			'ignore'     => array('login', 'total_catat'),
			// Daftar table yang tidak akan dibackup
			'format'     => 'txt',
			// gzip, zip, txt format filenya
			'filename'   => 'mybackup.sql',
			// Nama file
			'add_drop'   => TRUE,
			// Untuk menambahkan drop table di backup
			'add_insert' => TRUE,
			// Untuk menambahkan data insert di file backup
			'newline'    => "\n"
			// Baris baru yang digunakan dalam file backup
		);

		$backup = $this->dbutil->backup($prefs);
		$nameData = 'mybackup.sql'; // file name
		$save  = FCPATH.'backup_data/' . $nameData; // dir name backup output destination

		$this->load->helper('file');
		write_file($save, $backup);

		// Load the download helper dan melalukan download ke komputer
		$this->load->helper('download');
		force_download($nameData, $backup);
	}

	public function restore()
	{
		$isi_file = file_get_contents(FCPATH.'backup_data/mybackup.sql');
		$string_query = rtrim($isi_file, "\n;");
		$array_query = explode(";", $string_query);
		foreach ($array_query as $query) {
			$this->db->query($query);
		}
		$this->session->set_flashdata('flash_sukses', 'BERHASIL ditambahkan');
		redirect('page/welcome');
	}
}
