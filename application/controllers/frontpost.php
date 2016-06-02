<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpost extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_frontpost');
	}

	public function index()
	{
		
	}
	public function post()
	{
		$kd = $this->uri->segment(3);

		$dt = $this->m_frontpost->viewpost($kd);
		$this->m_frontpost->increasepost($kd);
		$data['data_popularPost'] = $this->m_frontpost->viewPostCount();

		$data['title'] = $dt->title;
		$data['subject'] = $dt->subject;
		$data['date'] = $dt->date;
		$data['duration'] = $dt->duration;
		$data['task'] = $dt->task;
		$data['id_post'] = $kd;

		$this->load->view('front/header');
		$this->load->view('front/post', $data);
		$this->load->view('front/footer');
	}

}

/* End of file frontpost.php */
/* Location: ./application/controllers/frontpost.php */