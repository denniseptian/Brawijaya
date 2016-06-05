<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_contact');
	}

	public function index()
	{
		$count = 0;
		$data['totalmessage'] = $this->m_contact->countmessage();
		$data['totalmessagestared'] = $this->m_contact->countmessagestared();
		$data['data_get'] = $this->m_contact->view();
		$this->load->view('back/backheader');
        $this->load->view('back/contact', $data);
        $this->load->view('back/backfooter');
	}
	public function viewContact(){
		$id = $this->uri->segment(3);
		$dt= $this->m_contact->viewmessage($id);

		$data['name'] = $dt->name;
		$data['email'] = $dt->email;
		$data['subject'] = $dt->subject;
		$data['date'] = $dt->date;
		$data['message'] = $dt->message;

		$data['totalmessage'] = $this->m_contact->countmessage();
		$this->load->view('back/backheader');
        $this->load->view('back/viewcontact', $data);
        $this->load->view('back/backfooter');
	}
	public function viewstarmessage(){
		$count = 0;
		$data['totalmessage'] = $this->m_contact->countmessage();
		$data['totalmessagestared'] = $this->m_contact->countmessagestared();
		$data['data_get'] = $this->m_contact->viewstaredmessage();
		$this->load->view('back/backheader');
        $this->load->view('back/viewstarmessage', $data);
        $this->load->view('back/backfooter');
	}
	function starmessage(){
		$dt = $this->uri->segment(3);

		$this->m_contact->star($dt);
		redirect('contact');
	}
	function unstarmessage(){
		$dt = $this->uri->segment(3);

		$this->m_contact->unstar($dt);
		redirect('contact/viewstarmessage');
	}
}

/* End of file contac.php */
/* Location: ./application/controllers/contac.php */