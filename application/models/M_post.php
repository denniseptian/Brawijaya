<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class M_post extends CI_Model {
	function __construc(){
		
	}
	
	function addpost() {
		$id_post = rand();
		$title = $this->input->post('title');
		$subject = $this->input->post('subject');
		$date = $this->input->post('date');
		$duration = $this->input->post('duration');
		$content = $this->input->post('content');
		$task = $this->input->post('task');
		
		$data = array(
			'id_post' => $id_post,
			'title' => $title,
			'subject' => $subject,
			'date' => $date,
			'duration' => $duration,
			'content' => $content,
			'task' => $task
			);
		$this->db->insert('indexpost', $data);
	}
	function view() {
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
			'content' => $content,
			'task' => $task
			);
		$this->db->where('id_post', $id);
		$this->db->update('indexpost', $data);
	}
}
