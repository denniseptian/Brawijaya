<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_frontcontact extends CI_Model {

	function save($data){
		$this->db->insert('contact', $data);
	}

}

/* End of file M_frontcontact.php */
/* Location: ./application/models/M_frontcontact.php */