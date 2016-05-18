<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('m_count');
        $this->m_count->increment();
    }

	public function index()
	{
		$this->load->view('front/header');
		$this->load->view('front/index');
		$this->load->view('front/footer');
	}
	public function about(){
		$this->load->view('front/header');
		$this->load->view('front/about');
		$this->load->view('front/footer');
	}
	public function tour(){
		$this->load->view('front/header');
		$this->load->view('front/tour');
		$this->load->view('front/footer');
	}
	public function contact(){
		$this->load->view('front/header');
		$this->load->view('front/contact');
		$this->load->view('front/footer');
	}
}
