<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_masyarakat_saya extends CI_Model 
{
	function pengaduan($pengguna)
	{
		$where = array('nik' => $pengguna);
		return $this->db->get_where('pengaduan',$where);
	}

	function blm_di_proses($pengguna)
	{
		$where = array(
			'nik' => $pengguna,
			'status' =>'0' 
		);
		return $this->db->get_where('pengaduan',$where)->num_rows();
	}
	function di_proses($pengguna)
	{
		$where = array(
			'nik' => $pengguna,
			'status' => 'proses' 
		);
		return $this->db->get_where('pengaduan',$where)->num_rows();
	}
	function sukses($pengguna)
	{
		$where = array(
			'nik' => $pengguna,
			'status' => 'selesai' 
		);
		return $this->db->get_where('pengaduan',$where)->num_rows();
	}
	function save_pengaduan($data)
	{
		$this->db->insert('pengaduan',$data);
	}
	function get_pengaduan($where)
	{
		return $this->db->get_where('pengaduan',$where);
	}
	function update_pengaduan($where,$data)
	{
		$this->db->where($where);
		$this->db->update('pengaduan',$data);
	}
	function get_file($id)
	{
		return $this->db->where('id_pengaduan',$id)->get('pengaduan')->row();
	}
	function hapus_pengaduan($where)
	{
		$this->db->delete('pengaduan',$where);
	}
	function lihat_taggapan($id)
	{
		return $this->db->where('id_pengaduan',$id)->get('tanggapan');
	}
	function ambil_pengaduan($id_pengaduan)
	{
		return $this->db->where('id_pengaduan',$id_pengaduan)->get('pengaduan');
	}

	function ambil_tanggapan($id_pengaduan)
	{
		return $this->db->where('id_pengaduan',$id_pengaduan)->get('tanggapan');
	}
}
/* End of file model_masyarakat_saya.php */
/* Location: ./application/models/model_masyarakat_saya.php */