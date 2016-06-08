<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_searching extends CI_Model {

	function listtravel(){
		$this->db->select('destination');
		$this->db->from('indexpost');
		$this->db->group_by('destination');
		$ambil = $this->db->get();

		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	function view($data) {
		$this->db->where('destination', $data);
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

/* End of file M_searching.php */
/* Location: ./application/models/M_searching.php */