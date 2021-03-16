<?php
/**
  * 
  */
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model_login');
	}

	function index(){
		$this->load->view('login');
	}

	function ceklogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => $password
		);

		$cek_admin = $this->model_login->get_admin($where)->num_rows();
		$cek_masyarakat = $this->model_login->get_masyarakat($where)->num_rows();

		if ($cek_admin > 0) {
			$cek = $this->model_login->get_admin($where)->row_array();

			if ($cek['level'] == 'admin')
			{
				$data_session = array(
					'login' => TRUE,
					'username' => $cek['username'],
					'nama' => $cek['nama_petugas'],
					'id' => $cek['id_petugas'],
					'level' => $cek['level']
				);

				$this->session->set_userdata($data_session);
				redirect(site_url('admin_saya'));
			}
			elseif($cek['level'] == 'petugas')
			{
				$data_session = array(
					'login' => TRUE,
					'username' => $cek['username'],
					'nama' => $cek['nama_petugas'],
					'id' => $cek['id_petugas'],
					'level' => $cek['level']
				);
				$this->session->set_userdata($data_session);
				redirect(site_url('petugas_saya'));
			}
		}elseif($cek_masyarakat > 0)
		{
			$cek = $this->model_login->get_masyarakat($where)->row_array();
			if ($cek['status'] == 'nonAktif') {
				echo "<script>alert('akun anda tidak aktif')</script>";
				redirect('login','refresh');
			}
			$data_session = array(
				'login' => TRUE,
				'nik' => $cek['nik'],
				'username' => $cek['username'],
				'nama' => $cek['nama'],
				'level' => 'masyarakat'
			);
			$this->session->set_userdata($data_session);
			redirect(site_url('masyarakat_saya'));
		}else{
			echo '<script>alert("password salah")</script>';
			redirect('login','refresh');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('Login'));
	}
} 
?>




















