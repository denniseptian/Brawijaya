<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('m_visitors');
        $this->load->model('m_frontpost');
        $this->load->model('m_promo');
        $this->load->model('M_frontpromo');
        $this->load->model('m_searching');
        $this->m_visitors->increment();
    }

	public function index()
	{
		$data['data_popularPost'] = $this->m_frontpost->viewPostCount();
		$data['data_get'] = $this->m_frontpost->view();
		$data['data_get_promo'] = $this->M_frontpromo->view();
		$data['data_search'] = $this->m_searching->listtravel();
		$this->load->view('front/header');
		$this->load->view('front/index', $data);
		$this->load->view('front/footer');
	}
	public function about(){
		redirect('testi');
	}
	public function tour(){
		redirect('frontgallery');
	}
	public function contact(){
		redirect('frontcontact');
	}
}
