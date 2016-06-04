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
		$this->load->model('m_useraccount');
		$data['data_get'] = $this->m_useraccount->view();
		$this->load->view('back/backheader');
		$this->load->view('back/userset', $data);
		$this->load->view('back/backfooter');

	}

	function update() {
		if ($this->input->post('mit')) {
			$id = $this->input->post('id_user');
			if ($this->input->post('npasswd') == $this->input->post('nnpasswd')) {
				# code...
				$this->m_useraccount->update($id);
				redirect('admin');
			}
			$this->session->set_flashdata("Pesan","Password tidak sama");
		} else{
			redirect('admin/edit/'.$id);
		}
	}

	function edit() {
		$kd = $this->uri->segment(3);
		if ($kd == NULL) {
			redirect('admin');
		}
		$dt = $this->m_useraccount->edit($kd);
		$data['u_name'] = $dt->u_name;
		$data['u_passwd'] = $dt->u_passwd;
		$data['id_user'] = $kd;

		$this->load->view('back/backheader');
		$this->load->view('back/edituseraccount', $data);
		$this->load->view('back/backfooter');

	}
	public function view() {
		$data['adminlog'] = $this->login_log->viewAdminLog();
		$this->load->view('back/backheader');
		$this->load->view('back/adminlog', $data);
		$this->load->view('back/backfooter');
	}
	
}