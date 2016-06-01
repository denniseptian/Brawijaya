<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_file_handler extends CI_Model {

	function view() {
		$this->db->order_by('dateinsert', 'desc');
		$ambil = $this->db->get('file');
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	function get_insert($data){
		$this->db->insert($this->tabel, $data);
		return TRUE;
	}

	

}

/* End of file M_file_handler.php */
/* Location: ./application/models/M_file_handler.php */