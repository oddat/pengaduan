<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_nya extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_admin_nya');

			if ($this->session->userdata('level') != 'admin_nya') {
				echo '<script>alert("silahkan login")</script>';
				redirect('login','refresh');
			}
		}
		public function index()
		{
			$data['page_name'] = 'halaman_admin';

			$data['petugas.'] = $this->model_admin_nya->petugas()->num_rows();
			$data['jumlah_admin'] = $this->model_admin_nya->jumlah_admin();
			$data['jumlah_petugas'] = $this->model_admin_nya->jumlah_petugas();

			$data['masyarakat'] = $this->model_admin_nya->masyarakat()->num_rows();
			$data['jumlah_aktif'] = $this->model_admin_nya->jumlah_aktif();
			$data['jumlah_nonaktif'] =$this->model_admin_nya->jumlah_nonaktif();

			$this->load->view('admin_nya');
		}
	}


/* End of file admin_nya.php */
/* Location: ./application/controllers/admin_nya.php */