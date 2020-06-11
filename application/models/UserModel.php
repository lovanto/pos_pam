 <?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class UserModel extends CI_Model
	{
		public function get($username)
		{
			$this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
			$result = $this->db->get('login')->row(); // Untuk mengeksekusi dan mengambil data hasil query
			return $result;
		}

		#untuk pengguna
		#digunakan untuk mengambil data saat edit dan hapus
		public function getDatapengguna($id_user)
		{
			return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
		}
		#untuk menampilkan seluruh data di tabel
		public function getAllDatapengguna()
		{
			return $this->db->get('login')->result_array();
		}
		public function tambahDatapengguna()
		{
			$data = [
				'username' => htmlspecialchars($this->input->post('username', ENT_QUOTES, 'UTF-8', true)),
				'password' => htmlspecialchars($this->input->post('password', ENT_QUOTES, 'UTF-8', true)),
				'nama_user' => htmlspecialchars($this->input->post('nama_user', ENT_QUOTES, 'UTF-8', true)),
				'id_level' => htmlspecialchars($this->input->post('id_level', ENT_QUOTES, 'UTF-8', true)),
				'user_create' => htmlspecialchars($this->input->post('user_create', ENT_QUOTES, 'UTF-8', true)),
				'create_date' => htmlspecialchars($this->input->post('create_date', ENT_QUOTES, 'UTF-8', true))
			];

			$data = $this->security->xss_clean($data);
			return $this->db->insert('user', $data);
		}
		public function hapusDatapengguna($id_user)
		{
			$this->db->delete('user', ['id_user' => $id_user]);
		}
		public function ubahDatapengguna()
		{
			$data = [
				'username' => htmlspecialchars($this->input->post('username', ENT_QUOTES, 'UTF-8', true)),
				'password' => htmlspecialchars($this->input->post('password', ENT_QUOTES, 'UTF-8', true)),
				'nama_user' => htmlspecialchars($this->input->post('nama_user', ENT_QUOTES, 'UTF-8', true)),
				'id_level' => htmlspecialchars($this->input->post('id_level', ENT_QUOTES, 'UTF-8', true)),
				'user_update' => htmlspecialchars($this->input->post('user_update', ENT_QUOTES, 'UTF-8', true)),
				'update_date' => htmlspecialchars($this->input->post('update_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			$this->db->where('id_user', $this->input->post('id_user'));
			$this->db->update('user', $data);
		}
		public function gantiPasswordNow()
		{
			$data = [
				'username' => htmlspecialchars($this->input->post('username', ENT_QUOTES, 'UTF-8', true)),
				'password' => htmlspecialchars($this->input->post('password', ENT_QUOTES, 'UTF-8', true)),
				'nama_user' => htmlspecialchars($this->input->post('nama_user', ENT_QUOTES, 'UTF-8', true)),
				'id_level' => htmlspecialchars($this->input->post('id_level', ENT_QUOTES, 'UTF-8', true)),
				'user_update' => htmlspecialchars($this->input->post('user_update', ENT_QUOTES, 'UTF-8', true)),
				'update_date' => htmlspecialchars($this->input->post('update_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			$this->db->where('id_user', $this->input->post('id_user'));
			$this->db->update('user', $data);
		}
		public function ubahDatapwd()
		{
			$username   =  $this->input->post('username', true);
			$password   =  $this->input->post('password', true);
			$nama       =  $this->input->post('nama', true);
			$role       =  $this->input->post('role', true);
			$user_update =  $this->input->post('user_update', true);
			$update_date =  $this->input->post('update_date', true);
			$data       =  array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'role' => $role,
				'user_update' => $user_update,
				'update_date' => $update_date
			);

			$data = $this->security->xss_clean($data);
			$this->db->where('id_level', $this->input->post('id_level'));
			$this->db->update('user', $data);
		}
		public function authenticated()
		{ // Fungsi ini berguna untuk mengecek apakah user sudah login atau belum
			// Pertama kita cek dulu apakah controller saat ini yang sedang diakses user adalah controller Auth apa bukan
			// Karena fungsi cek login hanya kita berlakukan untuk controller selain controller Auth
			if ($this->uri->segment(1) != 'auth' && $this->uri->segment(1) != '') {
				// Cek apakah terdapat session dengan nama authenticated
				if (!$this->session->userdata('authenticated')) // Jika tidak ada / artinya belum login
					redirect('auth'); // Redirect ke halaman login
			}
		}
		function get_data2($table)
		{
			return $this->db->get($table);
		}
		// cari masalah
		//model untuk laporan periode Absensi siswa
		public function data()
		{
			return $this->db->get('user')->result();
		}

		public function cari($keyword)
		{
			$this->db->like('nama_user', $keyword)->or_like('username', $keyword); //mencari data yang serupa dengan keyword
			return $this->db->get('login')->result();
			$this->load->library('pagination'); // Load librari paginationnya

			$query = "SELECT * FROM login"; // Query untuk menampilkan semua data siswa

			$config['base_url'] = base_url('page/pengguna');
			$config['total_rows'] = $this->db->query($query)->num_rows();
			$config['per_page'] = 5;
			$config['uri_segment'] = 3;
			$config['num_links'] = 3;

			// Style Pagination
			// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
			$config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
			$config['full_tag_close']  = '</ul>';

			$config['first_link']      = 'First';
			$config['first_tag_open']  = '<li>';
			$config['first_tag_close'] = '</li>';

			$config['last_link']       = 'Last';
			$config['last_tag_open']   = '<li>';
			$config['last_tag_close']  = '</li>';

			$config['next_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-right"></i>&nbsp;';
			$config['next_tag_open']   = '<li>';
			$config['next_tag_close']  = '</li>';

			$config['prev_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-left"></i>&nbsp;';
			$config['prev_tag_open']   = '<li>';
			$config['prev_tag_close']  = '</li>';

			$config['cur_tag_open']    = '<li class="active"><a href="#">';
			$config['cur_tag_close']   = '</a></li>';

			$config['num_tag_open']    = '<li>';
			$config['num_tag_close']   = '</li>';
			// End style pagination

			$this->pagination->initialize($config); // Set konfigurasi paginationnya

			$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
			$query .= " LIMIT " . $page . ", " . $config['per_page'];

			$data['limit'] = $config['per_page'];
			$data['total_rows'] = $config['total_rows'];
			$data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
			$data['login'] = $this->db->query($query)->result();

			return $data;
		}

		public function cariPembayaran($keyword, $metode, $tanggal)
		{
			if ($metode == "1") {
				$this->db->like('nama', $keyword)->or_like('no_transaksi', $keyword); //mencari data yang serupa dengan keyword
				return $this->db->get('pembayaran')->result();
			} else if ($metode != NULL) {
				if ($metode == "Harian") {
					$this->db->where('tgl_bayar', $tanggal);
					return $this->db->get('pembayaran')->result();
				} else if ($metode == "Mingguan") {
					$this->db->where('tgl_bayar >=', $tanggal);
					$this->db->where('tgl_bayar <=', date('Y-m-d', strtotime($tanggal . ' + 7 days')));
					return $this->db->get('pembayaran')->result();
				} else if ($metode == "Bulanan") {
					$this->db->where('tgl_bayar >=', $tanggal);
					$this->db->where('tgl_bayar <=', date('Y-m-d', strtotime($tanggal . ' +30 days')));
					return $this->db->get('pembayaran')->result();
				} else {
					return "GOING WRONG!!";
				}
			} else {
				$this->db->like('nama', $keyword)->or_like('no_transaksi', $keyword); //mencari data yang serupa dengan keyword
				return $this->db->get('pembayaran')->result();
			}

			$this->load->library('pagination'); // Load librari paginationnya

			$config['base_url'] = base_url('page/pembayaran?metode=1');
			$config['total_rows'] = $this->db->query($query)->num_rows();
			$config['per_page'] = 5;
			$config['uri_segment'] = 3;
			$config['num_links'] = 3;

			// Style Pagination
			// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
			$config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
			$config['full_tag_close']  = '</ul>';

			$config['first_link']      = 'First';
			$config['first_tag_open']  = '<li>';
			$config['first_tag_close'] = '</li>';

			$config['last_link']       = 'Last';
			$config['last_tag_open']   = '<li>';
			$config['last_tag_close']  = '</li>';

			$config['next_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-right"></i>&nbsp;';
			$config['next_tag_open']   = '<li>';
			$config['next_tag_close']  = '</li>';

			$config['prev_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-left"></i>&nbsp;';
			$config['prev_tag_open']   = '<li>';
			$config['prev_tag_close']  = '</li>';

			$config['cur_tag_open']    = '<li class="active"><a href="#">';
			$config['cur_tag_close']   = '</a></li>';

			$config['num_tag_open']    = '<li>';
			$config['num_tag_close']   = '</li>';
			// End style pagination

			$this->pagination->initialize($config); // Set konfigurasi paginationnya

			$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
			$query .= " LIMIT " . $page . ", " . $config['per_page'];

			$data['limit'] = $config['per_page'];
			$data['total_rows'] = $config['total_rows'];
			$data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
			$data['pembayaran'] = $this->db->query($query)->result();

			return $data;
		}

		public function cariZona($keyword)
		{
			$this->db->like('zona', $keyword)->or_like('wilayah', $keyword); //mencari data yang serupa dengan keyword
			return $this->db->get('zona')->result();

			$this->load->library('pagination'); // Load librari paginationnya

			$config['base_url'] = base_url('page/pembayaran?metode=1');
			$config['total_rows'] = $this->db->query($query)->num_rows();
			$config['per_page'] = 5;
			$config['uri_segment'] = 3;
			$config['num_links'] = 3;

			// Style Pagination
			// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
			$config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
			$config['full_tag_close']  = '</ul>';

			$config['first_link']      = 'First';
			$config['first_tag_open']  = '<li>';
			$config['first_tag_close'] = '</li>';

			$config['last_link']       = 'Last';
			$config['last_tag_open']   = '<li>';
			$config['last_tag_close']  = '</li>';

			$config['next_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-right"></i>&nbsp;';
			$config['next_tag_open']   = '<li>';
			$config['next_tag_close']  = '</li>';

			$config['prev_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-left"></i>&nbsp;';
			$config['prev_tag_open']   = '<li>';
			$config['prev_tag_close']  = '</li>';

			$config['cur_tag_open']    = '<li class="active"><a href="#">';
			$config['cur_tag_close']   = '</a></li>';

			$config['num_tag_open']    = '<li>';
			$config['num_tag_close']   = '</li>';
			// End style pagination

			$this->pagination->initialize($config); // Set konfigurasi paginationnya

			$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
			$query .= " LIMIT " . $page . ", " . $config['per_page'];

			$data['limit'] = $config['per_page'];
			$data['total_rows'] = $config['total_rows'];
			$data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
			$data['pembayaran'] = $this->db->query($query)->result();

			return $data;
		}

		public function cariPelanggan($keyword, $zonaCari)
		{
			if ($zonaCari == 1) {
				$this->db->like('nama', $keyword)->or_like('no_pelanggan', $keyword); //mencari data yang serupa dengan keyword
				return $this->db->get('pelanggan')->result();
			} else if ($zonaCari != NULL) {
				$this->db->where('zona', $zonaCari);
				return $this->db->get('pelanggan')->result();
			} else {
				$this->db->like('nama', $keyword)->or_like('no_pelanggan', $keyword); //mencari data yang serupa dengan keyword
				return $this->db->get('pelanggan')->result();
			}

			$this->load->library('pagination'); // Load librari paginationnya

			$query = "SELECT * FROM pelanggan"; // Query untuk menampilkan semua data siswa

			$config['base_url'] = base_url('page/pengguna');
			$config['total_rows'] = $this->db->query($query)->num_rows();
			$config['per_page'] = 5;
			$config['uri_segment'] = 3;
			$config['num_links'] = 3;

			// Style Pagination
			// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
			$config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
			$config['full_tag_close']  = '</ul>';

			$config['first_link']      = 'First';
			$config['first_tag_open']  = '<li>';
			$config['first_tag_close'] = '</li>';

			$config['last_link']       = 'Last';
			$config['last_tag_open']   = '<li>';
			$config['last_tag_close']  = '</li>';

			$config['next_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-right"></i>&nbsp;';
			$config['next_tag_open']   = '<li>';
			$config['next_tag_close']  = '</li>';

			$config['prev_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-left"></i>&nbsp;';
			$config['prev_tag_open']   = '<li>';
			$config['prev_tag_close']  = '</li>';

			$config['cur_tag_open']    = '<li class="active"><a href="#">';
			$config['cur_tag_close']   = '</a></li>';

			$config['num_tag_open']    = '<li>';
			$config['num_tag_close']   = '</li>';
			// End style pagination

			$this->pagination->initialize($config); // Set konfigurasi paginationnya

			$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
			$query .= " LIMIT " . $page . ", " . $config['per_page'];

			$data['limit'] = $config['per_page'];
			$data['total_rows'] = $config['total_rows'];
			$data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
			$data['login'] = $this->db->query($query)->result();

			return $data;
		}

		public function cariCekMeteran($keyword, $metode, $tanggal)
		{
			if ($metode == "1") {
				$this->db->like('nama', $keyword)->or_like('tgl_cek', $keyword)->or_like('zona', $keyword); //mencari data yang serupa dengan keyword
				return $this->db->get('checker')->result();
			} else if ($metode != NULL) {
				if ($metode == "Harian") {
					$this->db->where('tgl_cek', $tanggal);
					return $this->db->get('checker')->result();
				} else if ($metode == "Mingguan") {
					$this->db->where('tgl_cek >=', $tanggal);
					$this->db->where('tgl_cek <=', date('Y-m-d', strtotime($tanggal . ' + 7 days')));
					return $this->db->get('checker')->result();
				} else if ($metode == "Bulanan") {
					$this->db->where('tgl_cek >=', $tanggal);
					$this->db->where('tgl_cek <=', date('Y-m-d', strtotime($tanggal . ' +30 days')));
					return $this->db->get('checker')->result();
				} else {
					return "GOING WRONG!!";
				}
			} else {
				$this->db->like('nama', $keyword)->or_like('tgl_cek', $keyword)->or_like('zona', $keyword); //mencari data yang serupa dengan keyword
				return $this->db->get('checker')->result();
			}

			$this->load->library('pagination'); // Load librari paginationnya

			$config['base_url'] = base_url('page/checker');
			$config['total_rows'] = $this->db->query($query)->num_rows();
			$config['per_page'] = 5;
			$config['uri_segment'] = 3;
			$config['num_links'] = 3;

			// Style Pagination
			// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
			$config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
			$config['full_tag_close']  = '</ul>';

			$config['first_link']      = 'First';
			$config['first_tag_open']  = '<li>';
			$config['first_tag_close'] = '</li>';

			$config['last_link']       = 'Last';
			$config['last_tag_open']   = '<li>';
			$config['last_tag_close']  = '</li>';

			$config['next_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-right"></i>&nbsp;';
			$config['next_tag_open']   = '<li>';
			$config['next_tag_close']  = '</li>';

			$config['prev_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-left"></i>&nbsp;';
			$config['prev_tag_open']   = '<li>';
			$config['prev_tag_close']  = '</li>';

			$config['cur_tag_open']    = '<li class="active"><a href="#">';
			$config['cur_tag_close']   = '</a></li>';

			$config['num_tag_open']    = '<li>';
			$config['num_tag_close']   = '</li>';
			// End style pagination

			$this->pagination->initialize($config); // Set konfigurasi paginationnya

			$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
			$query .= " LIMIT " . $page . ", " . $config['per_page'];

			$data['limit'] = $config['per_page'];
			$data['total_rows'] = $config['total_rows'];
			$data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
			$data['pembayaran'] = $this->db->query($query)->result();

			return $data;
		}

		# untuk Zona
		public function tambahDatazona()
		{
			$data = [
				'zona' => htmlspecialchars($this->input->post('zona', ENT_QUOTES, 'UTF-8', true)),
				'wilayah' => htmlspecialchars($this->input->post('wilayah', ENT_QUOTES, 'UTF-8', true)),
				'kategori' => htmlspecialchars($this->input->post('kategori', ENT_QUOTES, 'UTF-8', true)),
				'tarif' => htmlspecialchars($this->input->post('tarif', ENT_QUOTES, 'UTF-8', true)),
				'user_create' => htmlspecialchars($this->input->post('user_create', ENT_QUOTES, 'UTF-8', true)),
				'create_date' => htmlspecialchars($this->input->post('create_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			return $this->db->insert('zona', $data);
		}
		public function hapusDatazona($id)
		{
			$this->db->delete('zona', ['id' => $id]);
		}
		public function ubahDatazona()
		{
			$data = [
				'zona' => htmlspecialchars($this->input->post('zona', ENT_QUOTES, 'UTF-8', true)),
				'wilayah' => htmlspecialchars($this->input->post('wilayah', ENT_QUOTES, 'UTF-8', true)),
				'kategori' => htmlspecialchars($this->input->post('kategori', ENT_QUOTES, 'UTF-8', true)),
				'tarif' => htmlspecialchars($this->input->post('tarif', ENT_QUOTES, 'UTF-8', true)),
				'user_update' => htmlspecialchars($this->input->post('user_update', ENT_QUOTES, 'UTF-8', true)),
				'update_date' => htmlspecialchars($this->input->post('update_date', ENT_QUOTES, 'UTF-8', true)),

			];
			$data = $this->security->xss_clean($data);
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('zona', $data);
		}
		public function getDatazona($id)
		{
			return $this->db->get_where('zona', ['id' => $id])->row_array();
		}
		public function getAllDatazona()
		{
			return $this->db->get('zona')->result_array();
		}
		# untuk Pelanggan
		public function tambahDatapelanggan()
		{
			$data = [
				'no_pelanggan' => htmlspecialchars($this->input->post('no_pelanggan', ENT_QUOTES, 'UTF-8', true)),
				'nama' => htmlspecialchars($this->input->post('nama', ENT_QUOTES, 'UTF-8', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', ENT_QUOTES, 'UTF-8', true)),
				'email' => htmlspecialchars($this->input->post('email', ENT_QUOTES, 'UTF-8', true)),
				'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', ENT_QUOTES, 'UTF-8', true)),
				'jk' => htmlspecialchars($this->input->post('jk', ENT_QUOTES, 'UTF-8', true)),
				'no_ktp' => htmlspecialchars($this->input->post('no_ktp', ENT_QUOTES, 'UTF-8', true)),
				'no_telp' => htmlspecialchars($this->input->post('no_telp', ENT_QUOTES, 'UTF-8', true)),
				'telp_rumah' => htmlspecialchars($this->input->post('telp_rumah', ENT_QUOTES, 'UTF-8', true)),
				'zona' => htmlspecialchars($this->input->post('zona', ENT_QUOTES, 'UTF-8', true)),
				'tarif' => htmlspecialchars($this->input->post('tarif', ENT_QUOTES, 'UTF-8', true)),
				'kategori' => htmlspecialchars($this->input->post('kategori', ENT_QUOTES, 'UTF-8', true)),
				'pakai_meter' => htmlspecialchars($this->input->post('pakai_meter', ENT_QUOTES, 'UTF-8', true)),
				'tgl_reg' => htmlspecialchars($this->input->post('tgl_reg', ENT_QUOTES, 'UTF-8', true)),
				'status' => htmlspecialchars($this->input->post('status', ENT_QUOTES, 'UTF-8', true)),
				'biaya_instalasi' => htmlspecialchars($this->input->post('biaya_instalasi', ENT_QUOTES, 'UTF-8', true)),
				'nama_pegawai' => htmlspecialchars($this->input->post('nama_pegawai', ENT_QUOTES, 'UTF-8', true)),
				'user_create' => htmlspecialchars($this->input->post('user_create', ENT_QUOTES, 'UTF-8', true)),
				'create_date' => htmlspecialchars($this->input->post('create_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			return $this->db->insert('pelanggan', $data);
		}
		public function hapusDatapelanggan($id)
		{
			$this->db->delete('pelanggan', ['id' => $id]);
		}
		public function ubahDatapelanggan()
		{
			$data = [
				'no_pelanggan' => htmlspecialchars($this->input->post('no_pelanggan', ENT_QUOTES, 'UTF-8', true)),
				'nama' => htmlspecialchars($this->input->post('nama', ENT_QUOTES, 'UTF-8', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', ENT_QUOTES, 'UTF-8', true)),
				'email' => htmlspecialchars($this->input->post('email', ENT_QUOTES, 'UTF-8', true)),
				'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', ENT_QUOTES, 'UTF-8', true)),
				'jk' => htmlspecialchars($this->input->post('jk', ENT_QUOTES, 'UTF-8', true)),
				'no_ktp' => htmlspecialchars($this->input->post('no_ktp', ENT_QUOTES, 'UTF-8', true)),
				'no_telp' => htmlspecialchars($this->input->post('no_telp', ENT_QUOTES, 'UTF-8', true)),
				'telp_rumah' => htmlspecialchars($this->input->post('telp_rumah', ENT_QUOTES, 'UTF-8', true)),
				'zona' => htmlspecialchars($this->input->post('zona', ENT_QUOTES, 'UTF-8', true)),
				'tarif' => htmlspecialchars($this->input->post('tarif', ENT_QUOTES, 'UTF-8', true)),
				'kategori' => htmlspecialchars($this->input->post('kategori', ENT_QUOTES, 'UTF-8', true)),
				'pakai_meter' => htmlspecialchars($this->input->post('pakai_meter', ENT_QUOTES, 'UTF-8', true)),
				'tgl_reg' => htmlspecialchars($this->input->post('tgl_reg', ENT_QUOTES, 'UTF-8', true)),
				'status' => htmlspecialchars($this->input->post('status', ENT_QUOTES, 'UTF-8', true)),
				'biaya_instalasi' => htmlspecialchars($this->input->post('biaya_instalasi', ENT_QUOTES, 'UTF-8', true)),
				'nama_pegawai' => htmlspecialchars($this->input->post('nama_pegawai', ENT_QUOTES, 'UTF-8', true)),
				'user_update' => htmlspecialchars($this->input->post('user_update', ENT_QUOTES, 'UTF-8', true)),
				'update_date' => htmlspecialchars($this->input->post('update_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('pelanggan', $data);
		}
		public function getDatapelanggan($id)
		{
			return $this->db->get_where('pelanggan', ['id' => $id])->row_array();
		}
		public function getAllDatapelanggan()
		{
			return $this->db->get('pelanggan')->result_array();
		}
		#untuk checker
		public function tambahDatacek()
		{
			$data = [
				'tgl_cek' => htmlspecialchars($this->input->post('tgl_cek', ENT_QUOTES, 'UTF-8', true)),
				'no_pelanggan' => htmlspecialchars($this->input->post('no_pelanggan', ENT_QUOTES, 'UTF-8', true)),
				'nama' => htmlspecialchars($this->input->post('nama', ENT_QUOTES, 'UTF-8', true)),
				'zona' => htmlspecialchars($this->input->post('zona', ENT_QUOTES, 'UTF-8', true)),
				'tarif' => htmlspecialchars($this->input->post('tarif', ENT_QUOTES, 'UTF-8', true)),
				'pakai_meter' => htmlspecialchars($this->input->post('pakai_meter', ENT_QUOTES, 'UTF-8', true)),
				'catat_meter' => htmlspecialchars($this->input->post('catat_meter', ENT_QUOTES, 'UTF-8', true)),
				'user_create' => htmlspecialchars($this->input->post('user_create', ENT_QUOTES, 'UTF-8', true)),
				'create_date' => htmlspecialchars($this->input->post('create_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			return $this->db->insert('checker', $data);
		}
		public function hapusDatacek($id)
		{
			$this->db->delete('checker', ['id' => $id]);
		}
		public function ubahDatacek()
		{
			$data = [
				'tgl_cek' => htmlspecialchars($this->input->post('tgl_cek', ENT_QUOTES, 'UTF-8', true)),
				'no_pelanggan' => htmlspecialchars($this->input->post('no_pelanggan', ENT_QUOTES, 'UTF-8', true)),
				'nama' => htmlspecialchars($this->input->post('nama', ENT_QUOTES, 'UTF-8', true)),
				'zona' => htmlspecialchars($this->input->post('zona', ENT_QUOTES, 'UTF-8', true)),
				'tarif' => htmlspecialchars($this->input->post('tarif', ENT_QUOTES, 'UTF-8', true)),
				'pakai_meter' => htmlspecialchars($this->input->post('pakai_meter', ENT_QUOTES, 'UTF-8', true)),
				'catat_meter' => htmlspecialchars($this->input->post('catat_meter', ENT_QUOTES, 'UTF-8', true)),
				'user_update' => htmlspecialchars($this->input->post('user_update', ENT_QUOTES, 'UTF-8', true)),
				'update_date' => htmlspecialchars($this->input->post('update_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('checker', $data);
		}
		public function getDatacek($id)
		{
			return $this->db->get_where('checker', ['id' => $id])->row_array();
		}
		public function getAllDatacek()
		{
			return $this->db->get('checker')->result_array();
		}
		#untuk databayar
		public function tambahDatabayar()
		{
			$data = [
				'no_transaksi' => htmlspecialchars($this->input->post('no_transaksi', ENT_QUOTES, 'UTF-8', true)),
				'tgl_bayar' => htmlspecialchars($this->input->post('tgl_bayar', ENT_QUOTES, 'UTF-8', true)),
				'no_pelanggan' => htmlspecialchars($this->input->post('no_pelanggan', ENT_QUOTES, 'UTF-8', true)),
				'nama' => htmlspecialchars($this->input->post('nama', ENT_QUOTES, 'UTF-8', true)),
				'zona' => htmlspecialchars($this->input->post('zona', ENT_QUOTES, 'UTF-8', true)),
				'tarif' => htmlspecialchars($this->input->post('tarif', ENT_QUOTES, 'UTF-8', true)),
				'catat_meter' => htmlspecialchars($this->input->post('catat_meter', ENT_QUOTES, 'UTF-8', true)),
				'total_bayar' => htmlspecialchars($this->input->post('total_bayar', ENT_QUOTES, 'UTF-8', true)),
				'biaya_admin' => htmlspecialchars($this->input->post('biaya_admin', ENT_QUOTES, 'UTF-8', true)),
				'denda' => htmlspecialchars($this->input->post('denda', ENT_QUOTES, 'UTF-8', true)),
				'grand_total' => htmlspecialchars($this->input->post('grand_total', ENT_QUOTES, 'UTF-8', true)),
				'user_create' => htmlspecialchars($this->input->post('user_create', ENT_QUOTES, 'UTF-8', true)),
				'create_date' => htmlspecialchars($this->input->post('create_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			return $this->db->insert('pembayaran', $data);
		}
		public function hapusDatabayar($id)
		{
			$this->db->delete('pembayaran', ['id' => $id]);
		}
		public function ubahDatabayar()
		{
			$data = [
				'no_transaksi' => htmlspecialchars($this->input->post('no_transaksi', ENT_QUOTES, 'UTF-8', true)),
				'tgl_bayar' => htmlspecialchars($this->input->post('tgl_bayar', ENT_QUOTES, 'UTF-8', true)),
				'no_pelanggan' => htmlspecialchars($this->input->post('no_pelanggan', ENT_QUOTES, 'UTF-8', true)),
				'nama' => htmlspecialchars($this->input->post('nama', ENT_QUOTES, 'UTF-8', true)),
				'zona' => htmlspecialchars($this->input->post('zona', ENT_QUOTES, 'UTF-8', true)),
				'tarif' => htmlspecialchars($this->input->post('tarif', ENT_QUOTES, 'UTF-8', true)),
				'catat_meter' => htmlspecialchars($this->input->post('catat_meter', ENT_QUOTES, 'UTF-8', true)),
				'total_bayar' => htmlspecialchars($this->input->post('total_bayar', ENT_QUOTES, 'UTF-8', true)),
				'biaya_admin' => htmlspecialchars($this->input->post('biaya_admin', ENT_QUOTES, 'UTF-8', true)),
				'denda' => htmlspecialchars($this->input->post('denda', ENT_QUOTES, 'UTF-8', true)),
				'grand_total' => htmlspecialchars($this->input->post('grand_total', ENT_QUOTES, 'UTF-8', true)),
				'user_update' => htmlspecialchars($this->input->post('user_update', ENT_QUOTES, 'UTF-8', true)),
				'update_date' => htmlspecialchars($this->input->post('update_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('pembayaran', $data);
		}
		public function getDatabayar($id)
		{
			return $this->db->get_where('pembayaran', ['id' => $id])->row_array();
		}
		public function getAllDatabayar()
		{
			return $this->db->get('pembayaran')->result_array();
		}

		#untuk pegawai
		public function tambahDatapegawai()
		{
			$data = [
				'no_ktp' => htmlspecialchars($this->input->post('no_ktp', ENT_QUOTES, 'UTF-8', true)),
				'no_telp' => htmlspecialchars($this->input->post('no_telp', ENT_QUOTES, 'UTF-8', true)),
				'nama_pegawai' => htmlspecialchars($this->input->post('nama_pegawai', ENT_QUOTES, 'UTF-8', true)),
				'jk' => htmlspecialchars($this->input->post('jk', ENT_QUOTES, 'UTF-8', true)),
				'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', ENT_QUOTES, 'UTF-8', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', ENT_QUOTES, 'UTF-8', true)),
				'email' => htmlspecialchars($this->input->post('email', ENT_QUOTES, 'UTF-8', true)),
				'tgl_masuk' => htmlspecialchars($this->input->post('tgl_masuk', ENT_QUOTES, 'UTF-8', true)),
				'kontrak' => htmlspecialchars($this->input->post('kontrak', ENT_QUOTES, 'UTF-8', true)),
				'status_pegawai' => htmlspecialchars($this->input->post('status_pegawai', ENT_QUOTES, 'UTF-8', true)),
				'user_create' => htmlspecialchars($this->input->post('user_create', ENT_QUOTES, 'UTF-8', true)),
				'create_date' => htmlspecialchars($this->input->post('create_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			return $this->db->insert('pegawai', $data);
		}
		public function hapusDatapegawai($id)
		{
			$this->db->delete('pegawai', ['id' => $id]);
		}
		public function ubahDatapegawai()
		{
			$data = [
				'no_ktp' => htmlspecialchars($this->input->post('no_ktp', ENT_QUOTES, 'UTF-8', true)),
				'no_telp' => htmlspecialchars($this->input->post('no_telp', ENT_QUOTES, 'UTF-8', true)),
				'nama_pegawai' => htmlspecialchars($this->input->post('nama_pegawai', ENT_QUOTES, 'UTF-8', true)),
				'jk' => htmlspecialchars($this->input->post('jk', ENT_QUOTES, 'UTF-8', true)),
				'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', ENT_QUOTES, 'UTF-8', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', ENT_QUOTES, 'UTF-8', true)),
				'email' => htmlspecialchars($this->input->post('email', ENT_QUOTES, 'UTF-8', true)),
				'tgl_masuk' => htmlspecialchars($this->input->post('tgl_masuk', ENT_QUOTES, 'UTF-8', true)),
				'kontrak' => htmlspecialchars($this->input->post('kontrak', ENT_QUOTES, 'UTF-8', true)),
				'status_pegawai' => htmlspecialchars($this->input->post('status_pegawai', ENT_QUOTES, 'UTF-8', true)),
				'user_update' => htmlspecialchars($this->input->post('user_update', ENT_QUOTES, 'UTF-8', true)),
				'update_date' => htmlspecialchars($this->input->post('update_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('pegawai', $data);
		}
		public function getDatapegawai($id)
		{
			return $this->db->get_where('pegawai', ['id' => $id])->row_array();
		}
		public function getAllDatapegawai()
		{
			return $this->db->get('pegawai')->result_array();
		}
		# untuk Pengaduan
		public function tambahDatapengaduan($upload)
		{
			$data = [
				'no_pengaduan' => htmlspecialchars($this->input->post('no_pengaduan', ENT_QUOTES, 'UTF-8', true)),
				'tgl' => htmlspecialchars($this->input->post('tgl', ENT_QUOTES, 'UTF-8', true)),
				'no_pelanggan' => htmlspecialchars($this->input->post('no_pelanggan', ENT_QUOTES, 'UTF-8', true)),
				'keluhan' => htmlspecialchars($this->input->post('keluhan', ENT_QUOTES, 'UTF-8', true)),
				// 'bukti_foto' => htmlspecialchars($this->input->post('bukti_foto', ENT_QUOTES, 'UTF-8', true)),
				'bukti_foto' => $this->input->post('input_bukti_foto'),
				'nama_file' => $upload['file']['file_name'],
				'ukuran_file' => $upload['file']['file_size'],
				'tipe_file' => $upload['file']['file_type'],
				'user_create' => htmlspecialchars($this->input->post('user_create', ENT_QUOTES, 'UTF-8', true)),
				'create_date' => htmlspecialchars($this->input->post('create_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			return $this->db->insert('pengaduan', $data);
		}
		public function hapusDatapengaduan($id)
		{
			$this->db->delete('pengaduan', ['id' => $id]);
		}
		public function ubahDatapengaduan($upload)
		{
			$data = [
				'no_pengaduan' => htmlspecialchars($this->input->post('no_pengaduan', ENT_QUOTES, 'UTF-8', true)),
				'tgl' => htmlspecialchars($this->input->post('tgl', ENT_QUOTES, 'UTF-8', true)),
				'no_pelanggan' => htmlspecialchars($this->input->post('no_pelanggan', ENT_QUOTES, 'UTF-8', true)),
				'keluhan' => htmlspecialchars($this->input->post('keluhan', ENT_QUOTES, 'UTF-8', true)),
				// 'bukti_foto' => htmlspecialchars($this->input->post('bukti_foto', ENT_QUOTES, 'UTF-8', true)),
				'bukti_foto' => $this->input->post('input_bukti_foto'),
				'nama_file' => $upload['file']['file_name'],
				'ukuran_file' => $upload['file']['file_size'],
				'tipe_file' => $upload['file']['file_type'],
				'user_update' => htmlspecialchars($this->input->post('user_update', ENT_QUOTES, 'UTF-8', true)),
				'update_date' => htmlspecialchars($this->input->post('update_date', ENT_QUOTES, 'UTF-8', true))

			];
			$data = $this->security->xss_clean($data);
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('pengaduan', $data);
		}
		public function getDatapengaduan($id)
		{
			return $this->db->get_where('pengaduan', ['id' => $id])->row_array();
		}
		public function getAllDatapengaduan()
		{
			return $this->db->get('pengaduan')->result_array();
		}


		// Fungsi untuk melakukan proses upload file
		public function upload()
		{
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '2048';
			$config['remove_space'] = TRUE;

			$this->load->library('upload', $config); // Load konfigurasi uploadnya
			if ($this->upload->do_upload('input_gambar')) { // Lakukan upload dan Cek jika proses upload berhasil
				// Jika berhasil :
				$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
				return $return;
			} else {
				// Jika gagal :
				$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
				return $return;
			}
		}

		// Fungsi untuk menyimpan data ke database
		// public function save($upload){
		// 	$data = array(
		// 		'bukti_foto'=>$this->input->post('input_bukti_foto'),
		// 		'nama_file' => $upload['file']['file_name'],
		// 		'ukuran_file' => $upload['file']['file_size'],
		// 		'tipe_file' => $upload['file']['file_type']
		// 	);

		// 	$this->db->insert('gambar', $data);
		// }
		#import zona
		public function view()
		{
			return $this->db->get('zona')->result(); // Tampilkan semua data yang ada di tabel siswa
		}

		// Fungsi untuk melakukan proses upload file
		public function upload_file($filename)
		{
			$this->load->library('upload'); // Load librari upload

			$config['upload_path'] = './excel/';
			$config['allowed_types'] = 'xlsx';
			$config['max_size']	= '2048';
			$config['overwrite'] = true;
			$config['file_name'] = $filename;

			$this->upload->initialize($config); // Load konfigurasi uploadnya
			if ($this->upload->do_upload('file')) { // Lakukan upload dan Cek jika proses upload berhasil
				// Jika berhasil :
				$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
				return $return;
			} else {
				// Jika gagal :
				$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
				return $return;
			}
		}

		// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
		public function insert_multiple($data)
		{
			$this->db->insert_batch('zona', $data);
		}
		#untuk penanganan
		public function tambahDatapenanganan()
		{
			$data = [
				'no_penanganan' => htmlspecialchars($this->input->post('no_penanganan', ENT_QUOTES, 'UTF-8', true)),
				'tgl' => htmlspecialchars($this->input->post('tgl', ENT_QUOTES, 'UTF-8', true)),
				'no_pengaduan' => htmlspecialchars($this->input->post('no_pengaduan', ENT_QUOTES, 'UTF-8', true)),
				'nama_pegawai' => htmlspecialchars($this->input->post('nama_pegawai', ENT_QUOTES, 'UTF-8', true)),
				'biaya_perbaikan' => htmlspecialchars($this->input->post('biaya_perbaikan', ENT_QUOTES, 'UTF-8', true)),
				'user_create' => htmlspecialchars($this->input->post('user_create', ENT_QUOTES, 'UTF-8', true)),
				'create_date' => htmlspecialchars($this->input->post('create_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			return $this->db->insert('penanganan', $data);
		}
		public function hapusDatapenanganan($id)
		{
			$this->db->delete('penanganan', ['id' => $id]);
		}
		public function ubahDatapenanganan()
		{
			$data = [
				'no_penanganan' => htmlspecialchars($this->input->post('no_penanganan', ENT_QUOTES, 'UTF-8', true)),
				'tgl' => htmlspecialchars($this->input->post('tgl', ENT_QUOTES, 'UTF-8', true)),
				'no_pengaduan' => htmlspecialchars($this->input->post('no_pengaduan', ENT_QUOTES, 'UTF-8', true)),
				'nama_pegawai' => htmlspecialchars($this->input->post('nama_pegawai', ENT_QUOTES, 'UTF-8', true)),
				'biaya_perbaikan' => htmlspecialchars($this->input->post('biaya_perbaikan', ENT_QUOTES, 'UTF-8', true)),
				'user_update' => htmlspecialchars($this->input->post('user_update', ENT_QUOTES, 'UTF-8', true)),
				'update_date' => htmlspecialchars($this->input->post('update_date', ENT_QUOTES, 'UTF-8', true))
			];
			$data = $this->security->xss_clean($data);
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('penanganan', $data);
		}
		public function getDatapenanganan($id)
		{
			return $this->db->get_where('penanganan', ['id' => $id])->row_array();
		}
		public function getAllDatapenanganan()
		{
			return $this->db->get('penanganan')->result_array();
		}
		#import Pelanggan

		public function view2()
		{
			return $this->db->get('pelanggan')->result(); // Tampilkan semua data yang ada di tabel siswa
		}

		// Fungsi untuk melakukan proses upload file
		public function upload_pelanggan($filename)
		{
			$this->load->library('upload'); // Load librari upload

			$config['upload_path'] = './excel/';
			$config['allowed_types'] = 'xlsx';
			$config['max_size']	= '2048';
			$config['overwrite'] = true;
			$config['file_name'] = $filename;

			$this->upload->initialize($config); // Load konfigurasi uploadnya
			if ($this->upload->do_upload('file')) { // Lakukan upload dan Cek jika proses upload berhasil
				// Jika berhasil :
				$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
				return $return;
			} else {
				// Jika gagal :
				$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
				return $return;
			}
		}

		// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
		public function insert_multiple_pelanggan($data)
		{
			$this->db->insert_batch('pelanggan', $data);
		}
		//model untuk laporan periode pelanggan
		public function cari_checker($keyword)
		{
			$this->db->like('no_pelanggan', $keyword)->or_like('nama', $keyword)->or_like('zona', $keyword); //mencari data yang serupa dengan keyword
			return $this->db->get('checker')->result();
		}

		public function laporan_checker_default()
		{
			return $this->db->get('checker')->result();
		}

		public function laporan_berkala($tanggal1, $tanggal2)
		{
			$query = "SELECT * from checker where tgl_cek between '$tanggal1' and '$tanggal2'";
			return $this->db->query($query);
		}
		public function laporan_berkala1($tanggal1, $tanggal2)
		{
			$query = "SELECT * from checker where tgl_cek between '$tanggal1' and '$tanggal2'";
			return $this->db->query($query);
		}
		#pembayaran laporan periode
		public function cari_pembayaran($keyword)
		{
			$this->db->like('no_transaksi', $keyword)->or_like('no_pelanggan', $keyword)->or_like('nama', $keyword)->or_like('zona', $keyword)->or_like('kategori', $keyword); //mencari data yang serupa dengan keyword
			return $this->db->get('pembayaran')->result();
		}

		public function laporan_pembayaran_default()
		{
			return $this->db->get('pembayaran')->result();
		}

		public function laporan_berkala_pb($tanggal1, $tanggal2)
		{
			$query = "SELECT * from pembayaran where tgl_bayar between '$tanggal1' and '$tanggal2'";
			return $this->db->query($query);
		}
		public function laporan_berkala1_pb($tanggal1, $tanggal2)
		{
			$query = "SELECT * from pembayaran where tgl_bayar between '$tanggal1' and '$tanggal2'";
			return $this->db->query($query);
		}
	}
// select * from (nama_tabel) where (nama_field_yang_akan_difilter) between ‘tanggal awal’ and ‘tanggal akhir’