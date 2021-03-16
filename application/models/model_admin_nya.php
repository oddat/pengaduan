<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_nya extends CI_Model {

	function petugas()
	{
	return $this->db->get('petugas');
	}
	function jumlah_admin()
	{
		return $this->db->where('level','admin')->get('petugas')
		->num_rows('');
	}
	function jumlah_petugas()
	{
		return $this->db->where('level','petugas')->get('petugas')
		->num_rows();
	}
	function masyarakat()
	{
		return $this->db->get('masyarakat');
	}
	function jumlah_aktif()
	{
		return $this->db->where('status','aktif')->get('masyarakat')
		->num_rows();
	}
	function jumlah_nonaktif()
	{
		return $this->db->where('status','non_Aktif')->get('masyarakat')
		->num_rows();
	}
}

/* End of file model_admin_nya.php */
/* Location: ./application/models/model_admin_nya.php */
 