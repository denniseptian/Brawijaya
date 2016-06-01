<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	var $limit=10;
	var $offset=10;

	public function index(){
		//the-sampleproject!
		$this->load->model('M_post');
	}

	public function save(){
		$this->load->library('upload');
		$id_post = rand();

		$nmfile = "file_post".time();
		$config['upload_path'] = './assets/uploads/post';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '10000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';
		$config['file_name'] = $nmfile;

		$this->upload->initialize($config);

		
		if ($this->upload->do_upload('filefoto')){
			$gbr = $this->upload->data();
			$data = array(
				'namafile' =>$gbr['file_name'],
				'type' =>$gbr['file_type'],
				'id_post' => $id_post,
				'title' => $this->input->post('title'),
				'subject' => $this->input->post('subject'),
				'date' => $this->input->post('date'),
				'duration' => $this->input->post('duration'),
				'content' => $this->input->post('content'),
				'task' => $this->input->post('task')
				);
			$this->m_post->addpost($data);

			$config2['image_library'] = 'gd2'; 
			$config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			$config2['new_image'] = './assets/hasil_resize/';
			$config2['maintain_ratio'] = TRUE;
			$config2['width'] = 800; 
			$config2['height'] = 600;
			$this->load->library('image_lib',$config2); 

			if ( !$this->image_lib->resize()){
				$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
			}

			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
			redirect('admin/galery'); 
		}else{
			$error = array('error' => $this->upload->display_errors()); 

			$this->session->set_flashdata("pesan", $error);
			redirect('admin/newpost');

		}
		
	}

	function add() {
		
		$this->load->view('back/dashboardHead');
		$this->load->view('back/newpost');
		$this->load->view('back/dashboardFoot');
	}
	function edit() {
		$kd = $this->uri->segment(3);
		if ($kd == NULL) {
			redirect('admin');
		}
		$dt = $this->m_post->edit($kd);
		$data['title'] = $dt->title;
		$data['subject'] = $dt->subject;
		$data['date'] = $dt->date;
		$data['duration'] = $dt->duration;
		$data['task'] = $dt->task;
		$data['id_post'] = $kd;

		$this->load->view('back/backheader');
		$this->load->view('back/editpost', $data);
		$this->load->view('back/backfooter');

	}
	function delete($confirm) {
		if($confirm){
			$u = $this->uri->segment(3);
			$this->m_post->delete($u);

		}
		redirect('admin/postlist');
	}
	function save_() {
		if ($this->input->post('mit')) {
			$this->m_post->addpost();
			redirect('admin/postlist');
		} else{
			redirect('admin/newpost');
		}
	}
	function update() {
		if ($this->input->post('mit')) {
			$id = $this->input->post('id');
			$this->m_post->update($id);
			redirect('admin/postlist');
		} else{
			redirect('admin/edit/'.$id);
		}
	}
}

