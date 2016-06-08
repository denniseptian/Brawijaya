<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontgallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('gallery');
	}

	public function index()
	{
		$data['data_get'] = $this->gallery->get_allimage();
		$this->load->view('front/header');
		$this->load->view('front/tour', $data);
		$this->load->view('front/footer');
	}

}

/* End of file frontgallery.php */
/* Location: ./application/controllers/frontgallery.php */