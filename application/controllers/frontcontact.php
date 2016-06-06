<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontcontact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_frontcontact');
	}

	public function index()
	{
		
	}

	public function save()
	{
		$id_contact = time();
		$name = $this->input->post('contact_name');
		$email = $this->input->post('contact_email');
		$subject = $this->input->post('contact_subject');
		$message = $this->input->post('contact_message');
		$date = date('Y/M/D');

		$data = array(
			'id_contact' => $id_contact,
			'name' => $name,
			'email' => $email,
			'subject' => $subject,
			'message' => str_replace('<br />', "\n", $message),
			'date' => $date,
			'star' => 0
		);
		$this->m_frontcontact->save($data);
		redirect('home');
	}

}

/* End of file frontcontact.php */
/* Location: ./application/controllers/frontcontact.php */