<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
        parent::__construct();

        $this->load->model('m_post');
        $this->load->model('login_log');
        $this->load->model('m_visitors');
        $this->load->model('m_file_handler');
        $this->load->model('gallery');
        
        if(!isset($_SESSION)){
            session_start();
        }
        $this->load->model(array('Ulogin'));
        if ($this->session->userdata('u_name')) {
        }
        else{
        	redirect('login');
        }
    }

	public function index(){
        $k = 0;
        $i = 0;
        $data1=array();
        foreach($this->m_visitors->get()->result_array() as $row){
            $data1[] = (int) $row['total'];
            $dateObj   = DateTime::createFromFormat('!m', $row['month']);
            $bulan[] = $dateObj->format('F');
            if ($k >=12 ) {
                # code...
                break;
            }
            $k++;
        }
        foreach($this->m_post->viewPostCountasChart()->result_array() as $row){
            $opencount[] = (int) $row['opencount'];
            $tittle[] = substr($row['title'], 0, 15);
            if ($i >= 6) {
                    # code...
                    break;
                }
                $i++;
        }
    
		$data['visitors_all'] = $this->m_visitors->getall();
		$data['visitors_month'] = $this->m_visitors->getThisMonth();
		$data['visitors_week'] = $this->m_visitors->getThisWeek();
		$data['visitors_day'] = $this->m_visitors->getThisDay();
		$data['postcount'] = $this->m_post->viewPostCount();
		$data['log'] = $this->login_log->daily();
		
		$this->load->view('back/backheader');
		$this->load->view('back/backdashboard',$data);
		$this->load->view('back/backfooter',array('data'=>$data1, 'bulan' => $bulan, 'opencount' => $opencount, 'tittle' => $tittle));
	}
	public function newpost(){
		$this->load->view('back/backheader');
		$this->load->view('back/newpost');
		$this->load->view('back/backfooter');
	}
	public function userset(){
		$this->load->view('back/backheader');
		$this->load->view('back/userset');
		$this->load->view('back/backfooter');
	}
	public function dashboard(){
		
	}
	public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
    public function postlist(){
    	$data['data_get'] = $this->m_post->view();
    	$this->load->view('back/backheader');
		$this->load->view('back/postlist', $data);
		$this->load->view('back/backfooter');
    }
    public function galery(){
        $data['grouplist'] = $this->gallery->viewGroups();
        $data['imagelist'] = $this->gallery->get_allimage();
        $data['countgallery'] = $this->gallery->countGallery();

    	$this->load->view('back/backheader');
    	$this->load->view('back/galery', $data);
    	$this->load->view('back/backfooter');
    }
    public function galeryby(){
        $category = $this->uri->segment(3);
        $data['grouplist'] = $this->gallery->viewGroups();
        $data['imagelist'] = $this->gallery->getimagescategory($category);
        $data['countgallery'] = $this->gallery->countGallery();

        $this->load->view('back/backheader');
        $this->load->view('back/galery', $data);
        $this->load->view('back/backfooter');
    }
    public function file(){
    	$data['data_get'] = $this->m_file_handler->view();

    	$this->load->view('back/backheader');
    	$this->load->view('back/file', $data);
    	$this->load->view('back/backfooter');
    }
    public function uploadgallery(){

        $this->load->view('back/backheader');
        $this->load->view('back/uploadgallery');
        $this->load->view('back/backfooter');
    }
}