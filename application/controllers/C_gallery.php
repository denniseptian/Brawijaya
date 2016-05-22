<?php

class C_gallery extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('back/edGallery', array('error' => ' ' ));
        }

        public function uploadImagesGallery()
        {
                $config['upload_path']          = './uploads/images/gallery';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 8000;
                $config['max_width']            = 3456;
                $config['max_height']           = 2304;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('back/edGallery', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('back/edsGallery', $data);
                }
        }
}
?>