<?php 
defined('BASEPATH')OR exit('no direct script access allowed');

 class admin_saya extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		if ($this->session->userdata('login')!= true) {
 			redirect(site_url('login'));
 		}

 		$this->load->model('model_admin_saya');
 	}
 	function index()
 	{
 		if ($this->session->userdata('level') == 'admin' ) 
 		{
 			$data['page_name'] = 'administator';
 			$data['masyarakat'] = $this->model_admin_saya->get_masyarakat()->result();
 			$data['petugas'] =    $this->model_admin_saya->get_petugas()->result();

 			$this->load->view('admin_saya',$data);
 		}
 } 
 	function verfikasi($nik)
 	{
 		$where = array('nik' => $nik );
 		$data = array('status' => "aktif");

 		$this->model_admin_saya->verfikasi_user($where,$data);

 		redirect(site_url('admin_saya/masyarakat'));
 	}

 	function masyarakat()
 	{
 		if ($this->session->userdata('level') == 'admin')
 		{
 				$data['page_name'] = 'masyarakat';
 				$data['masyarakat'] = $this->model_admin_saya->get_masyarakat()->result();

 				$this->load->view('masyarakat_saya',$data);
 		}else{
 			show_404();
 		}
 	}
 	function petugas()
 	{
 		if ($this->session->userdata('level') == 'admin') 
 		{
 			$data['page_name'] = 'petugas';
 			$data['petugas'] = $this->model_admin_saya->get_petugas()->result();

 			$this->load->view('petugas_saya',$data);	
 		}else{
 			show_404();
 		}
 	}

 	function tambah_petugas()
 	{
 		if ($this->session->userdata('level') == 'admin')
 		{
 			$data['page_name'] = 'tambah_petugas';

 			$this->load->view('tambah_petugas_saya',$data);
 		}else{
 			show_404();
 		}
 	}
 	function save_petugas()
 	{
 		if ($this->session->userdata('level') == 'admin')
 		{
 			$nama_petugas = $this->input->post('nama_petugas');
 			$username = $this->input->post('username');
 			$password = $this->input->post('password');
 			$telp = $this->input->post('telp');
 			$level = $this->input->post('level');

 			$data = array(
 				"nama_petugas" => $nama_petugas,
 				"username" => $username,
 				"password" => $password,
 				"telp" => $telp,
 				"level" => $level  			
 			);

 			$this->model_admin_saya->save_petugas($data);

 			redirect(site_url('admin_saya/petugas/'),'refresh');
 		}else{
 			show_404();
 		}
 	}

 	function hapus_petugas($id)
 	{
 		$where = array('id_petugas' => $id );

 		$this->model_admin_saya->hapus_petugas($where);

 		redirect(site_url('admin_saya/petugas/'),'refresh');
 	}
 	function edit_petugas($id)
 	{
 		$where = array('id_petugas' => $id );
 		$data['page_name'] = 'edit_petugas';
 		$data['petugas'] = $this->model_admin_saya->get_petugas_by_id($where)->result();

 		$this->load->view('edit_petugas_saya',$data);
 	}
 	function update_petugas()
 	{
 		$id_petugas = $this->input->post('id_petugas');
 		$nama_petugas = $this->input->post('nama_petugas');
 		$username = $this->input->post('username');
 		$password = $this->input->post('password');
 		$telp = $this->input->post('telp');
 		$level = $this->input->post('level');

 		$data = array(

 			"nama_petugas" => $nama_petugas,
 			"username" => $username,
 			"password" => $password,
 			"telp" => $telp,
 			"level" => $level
 		);

 		$where = array('id_petugas' => $id_petugas);
 		$this->model_admin_saya->update_petugas($where,$data);

 		redirect(site_url('admin_saya/petugas/'));
 	}
}