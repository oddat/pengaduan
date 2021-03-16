<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_saya extends CI_Model {

	function get_masyarakat()
	{
		return $this->db->get('masyarakat');
	}

	function verfikasi_user($where,$data)
	{
		$this->db->where($where);
		$this->db->update('masyarakat',$data);
	}

	function get_petugas()
	{
		return $this->db->get('petugas');
	}

	function save_petugas($data)
	{
		$this->db->insert('petugas',$data);
	}	

	function hapus_petugas($where)
	{
		$this->db->delete('petugas', $where);
	}

	function get_petugas_by_id($where)
	{
		return $this->db->get_where('petugas',$where);
	}

	function update_petugas($where,$data)
	{
		$this->db->where($where);
		$this->db->update('petugas',$data);
	}
}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */