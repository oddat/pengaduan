<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_petugas_saya extends CI_Model 
{
	function pengaduan()
	{
		return $this->db->get('pengaduan');
	}
	function blm_di_proses()
	{
		return $this->db->get_where('pengaduan',array('status' =>'0'))->num_rows();
	}
	function di_proses()
	{
		return $this->db->get_where('pengaduan',array('status' => 'proses'))->num_rows();
	}
	function sukses()
	{
		return $this->db->get_where('pengaduan',array('status' => 'sukses'))->num_rows();
	}
	function get_pengaduan($id)
	{
		return $this->db->where('id_pengaduan',$id)->get('pengaduan');
	}
	function get_tanggapan($id)
	{
		return $this->db->where('id_pengaduan',$id)->get('tanggapan');
	}
	function save_tanggapan($data)
	{
		$this->db->insert('tanggapan',$data);
	}
	function proses_pengaduan($id)
	{
		$data = array('status' => 'proses' );
		$this->db->where('id_pengaduan',$id)->update('pengaduan',$data);
	}
	function selesai_pengaduan($id)
	{
		$data = array('status' => 'selesai' );
		$this->db->where('id_pengaduan',$id)->update('pengaduan',$data);
	}
}


/* End of file model_petugas_saya.php */
/* Locatuion: ./application/models/model_petugas_saya.php */