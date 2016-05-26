<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('email');
	}

	public function index()
	{
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'dennix.apk@gmail.com',
			'smtp_pass' => 'saya26jan@dennix.apk',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
			);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('dennix.apk@gmail.com', 'Dennis');
		$this->email->to('denniseptian@gmail.com');
		$this->email->cc('');
		$this->email->bcc('');
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		$this->email->send();

		echo $this->email->print_debugger();

	}

}

/* End of file email.php */
/* Location: ./application/controllers/email.php */