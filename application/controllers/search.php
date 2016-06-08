<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_visitors');
        $this->load->model('m_frontpost');
        $this->load->model('m_promo');
        $this->load->model('M_frontpromo');
        $this->load->model('m_searching');
	}
	function cemonsearch(){
		$destination = $this->input->post('destination');

		if ($destination == "null") {
			# code...
			redirect('home');
		}else if ($destination != "null") {
			# code...
			$data['data_popularPost'] = $this->m_frontpost->viewPostCount();
			$data['data_get'] = $this->m_searching->view($destination);
			$data['data_get_promo'] = $this->M_frontpromo->view();
			$data['data_search'] = $this->m_searching->listtravel();
			$this->load->view('front/header');
			$this->load->view('front/index', $data);
			$this->load->view('front/footer');
		}
		//redirect('home');
	}

}

/* End of file search.php */
/* Location: ./application/controllers/search.php */