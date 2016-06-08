<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_outputfiles extends CI_Model {

	function contactselect($id){
		$data = $this->db->get_where('contact', array('id_contact' => $id))->row();
		return $data;
	}

}

/* End of file M_outputfiles.php */
/* Location: ./application/models/M_outputfiles.php */