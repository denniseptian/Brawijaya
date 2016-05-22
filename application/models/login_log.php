<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_log extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function insertLog($id){
		$id_log = rand(10000000000, 99999990000);
		date_default_timezone_set("	Asia/Jakarta"); 
		$date = date("Y/m/d");
		$id_user = $id;
		$time = date("h:i:sa");
		$ip = $this->input->ip_address();
		
		$data = array(
			'id_log' => $id_log,
			'date' => $date,
			'id_user' => $id_user,
			'time' => $time,
			'ip_address' => $ip
			);
		$this->db->insert('login_log', $data);
	}
	public function viewAllLog() {
		$ambil = $this->db->get('indexpost');
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function view() {
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function ceck($id){
		$ambil = $this->db->like('id_log', $id);
		if ($ambil->num_rows() > 0) { 
			return $hasil;
		}
	}
	public function daily(){
		$date = date("Y/m/d");
		$this->db->select('*')->from('login_log')->where('date',$date);
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
	public function viewAdminLog() {
		$this->db->order_by('date', 'desc');
		$data = $this->db->get('login_log');
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
}

/* End of file login_log.php */
/* Location: ./application/models/login_log.php */