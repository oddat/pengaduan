<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_saya extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_petugas_saya');

		if ($this->session->userdata('level' != 'petugas_saya')) {
			echo "<script>alert('selamad datang admin') </script>";
			redirect('login','refresh');
		}
	}

	function index()
	{
		$data['page_name'] = "halaman_petugas";
		$data['list_pengaduan'] = $this->model_petugas_saya->pengaduan()->result();
		$data['pengaduan'] = $this->model_petugas_saya->pengaduan()->num_rows();
		$data['blm_di_proses'] = $this->model_petugas_saya->blm_di_proses();
		$data['di_proses'] = $this->model_petugas_saya->di_proses();
		$data['sukses'] = $this->model_petugas_saya->sukses();

		$this->load->view('petugas/petugas_utama',$data);
	}
	function tulis_tanggapan()
	{
		$data['pengaduan'] = $this->model_petugas_saya->pengaduan()->num_rows();

		$this->load->view('petugas/petugas_tulis_tanggapan',$data);
	}
	function lihat_pengaduan($id)
	{
		$data['pengaduan'] = $this->model_petugas_saya->get_pengaduan($id)->result();
		$data['tanggapan'] = $this->model_petugas_saya->get_tanggapan($id)->result();
		$this->load->view('petugas/petugas_tulis_tanggapan',$data);
	}
	function save_tanggapan()
	{
		$id  = $this->input->post('id');
		$isi = $this->input->post('isi');

		$data = array(
			'id_pengaduan' => $id,
			'tgl_tanggapan'=> date("Y-m-d"),
			'tanggapan'	   => $isi,
			'id_petugas'   => $this->session->userdata('id')
		);

		$this->model_petugas_saya->save_tanggapan($data);
		redirect('petugas_saya/lihat_pengaduan/'.$id);
	}
	function proses_pengaduan($id)
	{
		$this->model_petugas_saya->proses_pengaduan($id);
		redirect('petugas_saya','refresh');
	}
	function selesai_pengaduan($id)
	{
		$this->model_petugas_saya->selesai_pengaduan($id);
		redirect('petugas_saya','refresh');
	}
}

/* End of file petugas_saya.php */
/* Location: ./application/controllers/petugas_saya.php */