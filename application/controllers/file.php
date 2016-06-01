<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_gallery extends CI_Controller {

    var $limit=10;
    var $offset=10;

    public function __construct() {
        parent::__construct();
        $this->load->model('m_file_handler'); //load model model_upldgbr yang berada di folder model
        $this->load->helper(array('url')); //load helper url 

    }
    public function insert(){
        $this->load->library('upload');
        $id = rand(0, 999).time();
        $nmfile = "file_".time();
        $config['upload_path'] = './assets/uploads/file';
        $config['allowed_types'] = 'doc|pdf';
        $config['file_name'] = $nmfile;

        $this->upload->initialize($config);
        
        if ($this->upload->do_upload('file')){
            $gbr = $this->upload->data();
            $data = array(
                'id_file' = $id,
                'namafile' =>$gbr['file_name'],
                'type' =>$gbr['file_type'],
                'name' => $this->input->post('name'),
                'dateinsert' = date("Y/m/d")
                'subject' = $this->input->post('subject');
              );
            $this->gallery->get_insert($data);
            
        }else{
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
            redirect('admin/uploadgallery');
        }
    }
    
}
