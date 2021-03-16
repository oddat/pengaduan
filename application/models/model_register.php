<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model 
	{
		function register($data)
		{
			$this->db->insert('masyarakat',$data);
		}
	}

/* End of file model_register.php */
/* Location: ./application/models/model_register.php */