<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class M_post extends CI_Model {
	function __construc(){
		
	}
	
	function addpost($data) {
		
		$this->db->insert('indexpost', $data);
	}
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
	function edit($a) {
		$d = $this->db->get_where('indexpost', array('id_post' => $a))->row();
		return $d;
	}
	function delete($a) {
		$this->db->delete('indexpost', array('id_post' => $a));
		return;
	}
	function update($id) {
		$title = $this->input->post('title');
		$subject = $this->input->post('subject');
		$date = $this->input->post('date');
		$duration = $this->input->post('duration');
		$content = $this->input->post('content');
		$task = $this->input->post('task');
		
		$data = array(
			'title' => $title,
			'subject' => $subject,
			'date' => $date,
			'duration' => $duration,
			'task' => $task
			);
		$this->db->where('id_post', $id);
		$this->db->update('indexpost', $data);
	}
	function viewPostCount(){
		$this->db->select('*')->from('indexpost');
		$query = $this->db->get();
		$lup = 0;
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
				$lup++;
			}
			return $lup;
		}
	}
	function viewPostCountasChart(){
		$this->db->select('*');
		$this->db->from('indexpost');
		$this->db->order_by('opencount', 'desc');
		return $this->db->get();
		
	}
}
