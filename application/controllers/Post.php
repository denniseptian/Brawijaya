<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index(){
		//the-sampleproject!
	}
	function add() {
		
		$this->load->view('back/dashboardHead');
		$this->load->view('back/newpost');
		$this->load->view('back/dashboardFoot');
	}
	function edit() {
		$kd = $this->uri->segment(3);
		if ($kd == NULL) {
			redirect('admin');
		}
		$dt = $this->m_post->edit($kd);
		$data['title'] = $dt->title;
		$data['subject'] = $dt->subject;
		$data['date'] = $dt->date;
		$data['duration'] = $dt->duration;
		$data['content'] = $dt->content;
		$data['task'] = $dt->task;
		$data['id_post'] = $kd;

		$this->load->view('back/backheader');
		$this->load->view('back/editpost', $data);
		$this->load->view('back/backfooter');

	}
	function delete($confirm) {
		if($confirm){
		$u = $this->uri->segment(3);
		$this->m_post->delete($u);
		
		}
		redirect('admin/postlist');
	}
	function save() {
		if ($this->input->post('mit')) {
			$this->m_post->addpost();
			redirect('admin/postlist');
		} else{
			redirect('admin/newpost');
		}
	}
	function update() {
		if ($this->input->post('mit')) {
			$id = $this->input->post('id');
			$this->m_post->update($id);
			redirect('admin/postlist');
		} else{
			redirect('admin/edit/'.$id);
		}
	}
}

