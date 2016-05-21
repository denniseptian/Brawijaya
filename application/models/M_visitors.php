<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_visitors extends CI_Model {

	function increment(){
        $date = date("Y/m/d");

        $this->db->order_by('date', 'desc');
        $this->db->select('date')->from('visitors')->where('date',$date);
        $ambil = $this->db->get();
        if ($ambil->num_rows() > 0) {
           $this->db->set('total', 'total+1', FALSE);
           $this->db->where('date', $date);
           $this->db->update('visitors');
       }else{
        $date = date("Y/m/d");
        $total = 1;
        
        $data = array(
            'date' => $date,
            'total' => $total
            );
        $this->db->insert('visitors', $data);
        }
    }

    function getall(){
        $date = date("Y/m/d");
        $this->db->select_sum('total');
        $this->db->from('visitors');
        $query = $this->db->get();
        
        return $query->row()->total;
    }
    function getThisMonth(){
        $date = date("Y/m/d");
        $this->db->select_sum('total');
        $this->db->where('YEAR(date) = YEAR(NOW()) AND MONTH(date)=MONTH(NOW())');
        $this->db->from('visitors');
        $query = $this->db->get();
        
        return $query->row()->total;
    }
    function getThisWeek(){
        $date = date("Y/m/d");
        $this->db->select_sum('total');
        $this->db->where('WEEKOFYEAR(date) = WEEKOFYEAR(NOW())');
        $this->db->from('visitors');
        $query = $this->db->get();
        
        return $query->row()->total;
    }
    function getThisDay(){
        $date = date("Y/m/d");
        $this->db->select('total')->from('visitors')->where('date',$date);
        $query = $this->db->get();
        $hasil = $query->row();
        
        return $hasil->total;
    }
	//SELECT * FROM jokes WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date)=MONTH(NOW());

}

/* End of file M_visitors.php */
/* Location: ./application/models/M_visitors.php */