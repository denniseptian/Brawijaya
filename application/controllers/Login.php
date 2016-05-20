<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        //youre magic code here
        
        if(!isset($_SESSION)){
            session_start();
        }
        $this->load->model(array('Ulogin'));
        if ($this->session->userdata('u_name')) {
            redirect('admin/dashboard');
        }
    }
    function index() {
        $this->load->view('back/login');
    }

    function proses() {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('back/login');
        } else {
            $usr = $this->input->post('username');
            $psw = $this->input->post('password');
            $u = $usr;
            $p = md5($psw);
            $cek = $this->Ulogin->cek($u, $p);
            if ($cek->num_rows() > 0) {
                //login berhasil, buat session
                foreach ($cek->result() as $qad) {
                    $sess_data['u_id'] = $qad->u_id;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['u_name'] = $qad->u_name;
                    $sess_data['role'] = $qad->role;
                    $this->session->set_userdata($sess_data);
                }
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                redirect('back/login');
            }
        }
    }
    function logout() {
            $this->session->sess_destroy();
            redirect('back/login');
    }
}
