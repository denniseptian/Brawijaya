<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contact extends CI_Model {

	function view()
	{
		# code...
		$this->db->select('*');
		$this->db->from('contact');
		$this->db->order_by('date', 'desc');
		$ambil = $this->db->get();
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	function viewmessage($id){
		$data = $this->db->get_where('contact', array('id_contact' => $id))->row();
		return $data;
	}
	function countmessage(){
		$count = 0;
		$this->db->select('*');
		$this->db->from('contact');
		$ambil = $this->db->get();
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$count++;
			}
			return $count;
		}
	}
	function star($data){
		$this->db->set('star', TRUE, FALSE);
        $this->db->where('id_contact', $data);
        $this->db->update('contact');
	}
	function unstar($data){
		$this->db->set('star', 0, FALSE);
        $this->db->where('id_contact', $data);
        $this->db->update('contact');
	}
	function viewstaredmessage()
	{
		# code...
		$this->db->select('*');
		$this->db->from('contact');
		$this->db->where('star', TRUE);
		$this->db->order_by('date', 'desc');
		$ambil = $this->db->get();
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	function countmessagestared(){
		$count = 0;
		$this->db->select('*');
		$this->db->from('contact');
		$this->db->where('star', 1);
		$ambil = $this->db->get();
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$count++;
			}
			return $count;
		}
	}
	function delete($a) {
		$this->db->delete('contact', array('id_contact' => $a));
	}
}

/* End of file M_contact.php */
/* Location: ./application/models/M_contact.php */