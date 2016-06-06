<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Useraccount extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_useraccount');
		$this->load->model('login_log');
	}

	function index(){

		$dt = $this->m_useraccount->view();
		
		$data['u_name'] = $dt->u_name;
		$data['u_passwd'] = $dt->u_passwd;
		$data['id_user'] = $dt->id_user;

		$this->load->view('back/backheader');
		$this->load->view('back/edituseraccount', $data);
		$this->load->view('back/backfooter');
	}

	function update() {
		if ($this->input->post('mit')) {
			$old = $this->m_useraccount->view();
			$oldpassword = $old->u_passwd;
			$id = $this->input->post('id');
			$opasswd = md5($this->input->post('opasswd'));
			$newpasswd = md5($this->input->post('npasswd'));
			$rnewpasswd = md5($this->input->post('nnpasswd'));
			if ($oldpassword == $opasswd && $newpasswd == $rnewpasswd) {
				# code...
				$this->m_useraccount->update($id);
				$this->session->sess_destroy();
				$this->session->set_flashdata('result_login', '<br>Silakan login kembali!.');
				redirect('admin');
			}else if ($oldpassword != $opasswd || $newpasswd != $rnewpasswd) {
				# code...
				$this->session->set_flashdata('ganti', '<br>Salah! Perhatikan password anda.');
				redirect('useraccount');
			}

		} else{
			redirect('admin/userset');
		}
	}
	public function view() {
		$data['adminlog'] = $this->login_log->viewAdminLog();
		$this->load->view('back/backheader');
		$this->load->view('back/adminlog', $data);
		$this->load->view('back/backfooter');
	}
	
}