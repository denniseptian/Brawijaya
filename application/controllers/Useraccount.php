<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Useraccount extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_useraccount');
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
			$this->m_useraccount->update($id);
			redirect('admin/postlist');
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
	function proses() {
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		$usr = $this->input->post('username');
		$psw = $this->input->post('password');
		$u = $usr;
		$p = md5($psw);
		$cek = $this->Ulogin->cek($u, $p);
		if ($cek->num_rows() > 0) {
                //login berhasil, buat session
			foreach ($cek->result() as $qad) {
				$sess_data['u_id'] = $qad->u_id;
				$sess_data['nama'] = $qad->nama;
				$sess_data['u_name'] = $qad->u_name;
				$sess_data['role'] = $qad->role;
				$this->session->set_userdata($sess_data);
			}
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
			redirect('back/login');
		}
		
	}


}