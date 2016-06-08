<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_frontpromo extends CI_Model {

	function view() {
		$this->db->order_by('promolimitdate', 'desc');
		$ambil = $this->db->get('promo');
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}	

}

/* End of file M_frontpromo.php */
/* Location: ./application/models/M_frontpromo.php */