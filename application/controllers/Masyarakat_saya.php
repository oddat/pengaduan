<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat_saya extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
			//Do your magic here
		$this->load->model('model_masyarakat_saya');

		if ($this->session->userdata('level' != 'masyarakat')) {
			echo "<script>alert('silahkan login masyarakat') </script>";
			redirect('login','refresh');
		}	
	}


	function index()
	{
		$pengguna = $this->session->userdata('nik');

		$data['page_name'] = 'tulis_pengaduan';
		$data['list_pengaduan'] = $this->model_masyarakat_saya->pengaduan($pengguna)->result();
		$data['pengaduan'] = $this->model_masyarakat_saya->pengaduan($pengguna)->num_rows();
		$data['blm_di_proses'] = $this->model_masyarakat_saya->blm_di_proses($pengguna);
		$data['di_proses'] = $this->model_masyarakat_saya->di_proses($pengguna);
		$data['sukses'] = $this->model_masyarakat_saya->sukses($pengguna);

		$this->load->view('masyarakat/utamakan',$data);
	}
	function tulis_pengaduan()
	{
		$data['page_name'] = 'tulis_pengaduan';
		$this->load->view('masyarakat/tulis_pengaduan_saya');
	}
	function upload()
	{
		$config['upload_path'] = './assets/upload/pengaduan/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = uniqid();
		// $config['max_size'] = 100;
		// $config['max_width'] = 1024;
		// $cinfig['max_height'] = 768;
		$config['encrypt_name'] = false;

		$this->load->library('upload',$config);
		if (! $this->upload->do_upload('image')) 
		{
			print_r($this->upload->display_errors());
		}
		else
		{
			return $this->upload->data('file_name');
		}
	}
	function save_pengaduan()
	{
		$isi = $this->input->post('isi');
		$foto = $this->upload();

		$data = array(
			'tgl_pengaduan' =>date('Y-m-d'),
			'nik'			=>$this->session->userdata('nik'),
			'isi_laporan'	=>$isi,
			'foto'			=>$foto,
			'status' 		=>'0'
		);
		$this->model_masyarakat_saya->save_pengaduan($data);
		redirect('masyarakat_saya','refresh');
	}
	function edit_pengaduan($id)
	{
		$where = array('id_pengaduan' => $id);
		$data['page_name'] = 'edit_data_pengaduan';
		$data['pengaduan'] = $this->model_masyarakat_saya->get_pengaduan($where)->result();

		$this->load->view('masyarakat/edit_pengaduan_saya',$data);

	}
	function update_pengaduan()
	{
		$id = $this->input->post('id_pengaduan');
		$isi = $this->input->post('isi');

		if (!empty($_FILES['image']['name'])) {
			$foto = $this->upload();
		}else{
			$foto = $this->input->post('old_image');
		}

		$data = array(
			'isi_laporan' => $isi,
			'foto'        => $foto 
		);
		$where = array('id_pengaduan' => $id );

		$this->model_masyarakat_saya->update_pengaduan($where,$data);
		redirect('masyarakat_saya');
	}
	function hapus_pengaduan($id)
	{
		$where = array('id_pengaduan' => $id );
		$this->deleteImage($id);
		$this->model_masyarakat_saya->hapus_pengaduan($where,);
		redirect('masyarakat_saya');
	}
	function deleteImage($id)
	{
		$file = $this->model_masyarakat_saya->get_file($id);
		if ($file->foto != 'default.jpg') {
			$file_name = explode(".", $file->foto)[0];
			return array_map('unlink',glob(FCPATH."/assets/upload/pengaduan/$file_name.*"));
		}
	}
	function lihat_tanggapan($id)
	{
			$data['page_name'] = 'lihat_tanggapan';
			$data['pengaduan'] = $this->model_masyarakat_saya->ambil_pengaduan($id)->result();
			$data['tanggapan'] = $this->model_masyarakat_saya->ambil_tanggapan($id)->result();
			$this->load->view('masyarakat/masyarakat_lihat_tanggapan',$data);
	}
}

/* End of file masyarakat_saya.php */
/* Location: ./application/controllers/masyarakat_saya.php */