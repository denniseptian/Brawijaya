<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Useraccount extends CI_Controller {

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
		$dt = $this->m_post->edit($kd);
		$data['u_name'] = $dt->title;
		$data['u_passwd'] = $dt->subject;
		$data['id_user'] = $kd;

		$this->load->view('back/backheader');
		$this->load->view('back/editpost', $data);
		$this->load->view('back/backfooter');

	}


}