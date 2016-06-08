<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_promo');
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		
	}
	public function newpromo()
	{
		$this->load->view('back/backheader');
		$this->load->view('back/newpromo');
		$this->load->view('back/backfooter');	
	}
	public function listpromo()
	{
		$data['data_get'] = $this->m_promo->view();
		$this->load->view('back/backheader');
		$this->load->view('back/promolist', $data);
		$this->load->view('back/backfooter');
	}
	public function save(){
		$date = date("Y/m/d");
		$id_promo = time();

		$this->load->library('upload');
		$nmfile = "file_gallery".time();
		$config['upload_path'] = './assets/uploads/promo/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '10000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';
		$config['file_name'] = $nmfile;

		$this->upload->initialize($config);

		if ($this->upload->do_upload('filefoto')){
			$gbr = $this->upload->data();
			$data = array(
				'id_promo' => $id_promo,
				'title' => $this->input->post('title'),
				'subject' => $this->input->post('subject'),
				'date' => $date,
				'promolimitdate' => $this->input->post('promolimitdate'),
				'duration' => $this->input->post('duration'),
				'destination' => $this->input->post('destination'),
				'task' => $this->input->post('task'),
				'namafile' =>$gbr['file_name'],
				'type' =>$gbr['file_type']
				);

			$this->m_promo->save($data);

			$config2['image_library'] = 'gd2'; 
			$config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			$config2['new_image'] = './assets/uploads/imagepromo_resize/';
			$config2['maintain_ratio'] = FALSE;
			$config2['width'] = 347; 
			$config2['height'] = 348;
			$this->load->library('image_lib',$config2); 

			if ( !$this->image_lib->resize()){
				$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
			}
			redirect('admin/listpromo');
		}else{
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
			redirect('admin/newpromo');
		}
	}
	function edit() {
		$kd = $this->uri->segment(3);
		if ($kd == NULL) {
			redirect('admin');
		}
		$dt = $this->m_promo->edit($kd);
		$data['title'] = $dt->title;
		$data['subject'] = $dt->subject;
		$data['promolimitdate'] = $dt->promolimitdate;
		$data['duration'] = $dt->duration;
		$data['destination'] = $dt->destination;
		$data['namafile'] = $dt->namafile;
		$data['task'] = $dt->task;
		$data['id_promo'] = $kd;

		$this->load->view('back/backheader');
		$this->load->view('back/editpromo', $data);
		$this->load->view('back/backfooter');

	}
	function delete($confirm) {
		if($confirm){
			$u = $this->uri->segment(3);
			$this->m_promo->delete($u);

		}
		redirect('admin/listpromo');
	}
	function update() {
		if ($this->input->post('mit')) {
			$id = $this->input->post('id');
			$this->m_promo->update($id);
			redirect('promo/listpromo');
		} else{
			redirect('promo/edit/'.$id);
		}
	}
}

/* End of file promo.php */
/* Location: ./application/controllers/promo.php */