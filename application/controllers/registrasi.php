<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {

	function __construct()
 	{
 		parent::__construct();

 		$this->load->model('model_register');
 	}

	public function index()
	{
		$this->load->view('registrasi');
	}
	function registrasi()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$telp = $this->input->post('telp');

		$data = array(
			"nik" => $nik,
			"nama" => $nama,
			"username" => $username,
			"password" => $password,
			"telp" => $telp,
			"status" => 'nonAktif'
		);
		$this->model_register->register($data);
		echo '<script>alert("selesai")</script>';
		redirect('login');
	}
}

/* End of file registrasi.php */
/* Location: ./application/controllers/registrasi.php */