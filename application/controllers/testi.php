<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_testi');
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$data = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
            );
		$data['data_get'] = $this->m_testi->view();
		$this->load->view('front/header');
		$this->load->view('front/about', $data);
		$this->load->view('front/footer');
	}

	public function save()
	{
		$recaptcha = $this->input->post('g-recaptcha-response');
		if (!empty($recaptcha)) {
			$response = $this->recaptcha->verifyResponse($recaptcha);
			if (isset($response['success']) and $response['success'] === true) {
				$id_testi = time();
				$name = $this->input->post('contact_name');
				$message = $this->input->post('contact_message');
				$date = date("Y/m/d");

				$data = array(
					'id_testi' => $id_testi,
					'name' => $name,
					'message' => str_replace('<br />', "\n", $message),
					'date' => $date
					);
				$this->m_testi->save($data);
				redirect('home');
			}
		}
		redirect('testi');
	}
}

/* End of file frontcontact.php */
/* Location: ./application/controllers/frontcontact.php */