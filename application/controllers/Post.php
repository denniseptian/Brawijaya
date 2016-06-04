<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_post');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Jakarta"); 
		
	}

	var $limit=10;
	var $offset=10;

	public function index(){
		//the-sampleproject!
		$this->load->model('M_post');
	}

	public function save(){
		$date = date("Y/m/d");
		$id_post = time();
		
		$data = array(
			'id_post' => $id_post,
			'title' => $this->input->post('title'),
			'subject' => $this->input->post('subject'),
			'date' => $date,
			'duration' => $this->input->post('duration'),
			'task' => $this->input->post('task'),
			'opencount' => 0
			);
		$this->m_post->addpost($data);
		$data['data_get'] = $this->m_post->view();
    	$this->load->view('back/backheader');
		$this->load->view('back/postlist', $data);
		$this->load->view('back/backfooter');
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
	function save_() {
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

