<?php

class M_useraccount extends CI_Model {

	private $table = "user";

	function update($id) {
		$u_name = $this->session->userdata('u_name');
		$u_passwd = md5($this->input->post('npasswd'));
		
		$data = array(
			'u_name' => $u_name,
			'u_passwd' => $u_passwd
			);
		
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}
	function view() {

		$username = $this->session->userdata('u_name');

		$d = $this->db->get_where('user', array('u_name' => $username))->row();

		return $d;
	}
}