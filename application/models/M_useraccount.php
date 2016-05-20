<?php

class M_useraccount extends CI_Model {

	private $table = "user";

	function update($id) {
		$u_name = $this->input->post('u_uname');
		$u_passwd = $this->input->post('u_passwd');
		
		$data = array(
			'u_name' => $u_name,
			'u_passwd' => $u_passwd
			);
		
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}
	function view() {
		$ambil = $this->db->get('user');
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	function edit($a) {
		$d = $this->db->get_where('user', array('id_user' => $a))->row();
		return $d;
	}

}