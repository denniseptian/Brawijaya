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
	function viewPostCount(){
		$this->db->select('*');
		$this->db->from('indexpost');
		$this->db->order_by('opencount', 'desc');
		$ambil = $this->db->get();
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	function viewpost($a) {
		$d = $this->db->get_where('indexpost', array('id_post' => $a))->row();
		return $d;
	}
	function increasepost($id) {
		$this->db->set('opencount', 'opencount+1', FALSE);
		$this->db->where('id_post', $id);
        $this->db->update('indexpost');
	}

}

/* End of file M_frontpost.php */
/* Location: ./application/models/M_frontpost.php */