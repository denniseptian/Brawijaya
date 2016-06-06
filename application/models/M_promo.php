<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_promo extends CI_Model {

	function save($data) {
		
		$this->db->insert('promo', $data);
	}
	function view() {
		$this->db->order_by('date', 'desc');
		$ambil = $this->db->get('promo');
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	function edit($a) {
		$d = $this->db->get_where('promo', array('id_promo' => $a))->row();
		return $d;
	}
	function delete($a) {
		$this->load->helper("file");

		$this->db->where('id_promo',$a);
		$query = $this->db->get('promo');
		$row = $query->row();
		//unlink(".assets/uploads/imgepost/$row->namafile");
		$this->db->delete('promo', array('id_promo' => $a));
		return;
	}
	function update($id) {
		$title = $this->input->post('title');
		$subject = $this->input->post('subject');
		$destination = $this->input->post('destination');
		$promolimitdate = $this->input->post('promolimitdate');
		$duration = $this->input->post('duration');
		$task = $this->input->post('task');
		
		$data = array(
			'title' => $title,
			'subject' => $subject,
			'destination' => $destination,
			'promolimitdate' => $promolimitdate,
			'duration' => $duration,
			'task' => $task
			);
		$this->db->where('id_promo', $id);
		$this->db->update('promo', $data);
	}
}

/* End of file M_promo.php */
/* Location: ./application/models/M_promo.php */