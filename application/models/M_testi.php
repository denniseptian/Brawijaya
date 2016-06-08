<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_testi extends CI_Model {

	function save($data){
		$this->db->insert('testi', $data);
	}
	function view() {
		$this->db->order_by('date', 'desc');
		$ambil = $this->db->get('testi');
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
}

/* End of file M_frontcontact.php */
/* Location: ./application/models/M_frontcontact.php */