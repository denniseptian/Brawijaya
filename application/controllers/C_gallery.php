<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_gallery extends CI_Controller {

    var $limit=10;
    var $offset=10;

    public function __construct() {
        parent::__construct();
        $this->load->model('gallery'); //load model model_upldgbr yang berada di folder model
        $this->load->helper(array('url')); //load helper url 

    }
    public function insert(){
        $this->load->library('upload');
        $nmfile = "file_gallery".time();
        $config['upload_path'] = './assets/uploads/gallery';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size'] = '10000';
        $config['max_width']  = '10000';
        $config['max_height']  = '10000';
        $config['file_name'] = $nmfile;

        $category = $this->input->post('category');
        if($category == NULL){
            $category = 'Gambar-lain';
        }
        $category = str_replace(' ', '-', $category);

        $this->upload->initialize($config);
        
        if ($this->upload->do_upload('filefoto')){
            $gbr = $this->upload->data();
            $data = array(
              'namafile' =>$gbr['file_name'],
              'type' =>$gbr['file_type'],
              'keterangan' =>$this->input->post('textket'),
              'name' => $this->input->post('name'),
              'category' => $category
              );
            $this->gallery->get_insert($data);
            
            $config2['image_library'] = 'gd2'; 
            $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
            $config2['new_image'] = './assets/hasil_resize/';
            $config2['maintain_ratio'] = FALSE;
            $config2['width'] = 800; 
            $config2['height'] = 600;
            $this->load->library('image_lib',$config2); 

            if ( !$this->image_lib->resize()){
                $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
            }

            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
            redirect('admin/galery'); 
        }else{
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
            redirect('admin/uploadgallery');
        }
    }
    
}
