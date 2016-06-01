<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_frontpost extends CI_Model {

	function view() {
		$this->db->order_by('date', 'desc');
		$ambil = $this->db->get('indexpost');
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}

}

/* End of file M_frontpost.php */
/* Location: ./application/models/M_frontpost.php */