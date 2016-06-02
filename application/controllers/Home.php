<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('m_visitors');
        $this->load->model('m_frontpost');
        $this->m_visitors->increment();
    }

	public function index()
	{
		$data['data_popularPost'] = $this->m_frontpost->viewPostCount();
		$data['data_get'] = $this->m_frontpost->view();
		$this->load->view('front/header');
		$this->load->view('front/index', $data);
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
