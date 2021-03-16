<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function get_admin($where)
	{
		return $this->db->get_where('petugas',$where);
	}
	public function get_masyarakat($where)
	{
		return $this->db->get_where('masyarakat',$where);
	}
}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */