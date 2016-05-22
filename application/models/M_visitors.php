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
        
        if ($query->num_rows() > 0 ) {
            # code...
            return $query->row()->total;
        }

        return $null;
    }
    function getThisMonth(){
        $date = date("Y/m/d");
        $this->db->select_sum('total');
        $this->db->where('YEAR(date) = YEAR(NOW()) AND MONTH(date)=MONTH(NOW())');
        $this->db->from('visitors');
        $query = $this->db->get();
        
        if ($query->num_rows() > 0 ) {
            # code...
            return $query->row()->total;
        }

        return $null;
    }
    function getThisWeek(){
        $date = date("Y/m/d");
        $this->db->select_sum('total');
        $this->db->where('WEEKOFYEAR(date) = WEEKOFYEAR(NOW())');
        $this->db->from('visitors');
        $query = $this->db->get();
        
        if ($query->num_rows() > 0 ) {
            # code...
            return $query->row()->total;
        }

        return $null;
    }
    function getThisDay(){
        $null = 0;
        $date = date("Y/m/d");
        $this->db->select('total');
        $this->db->from('visitors');
        $this->db->where('date',$date);
        $query = $this->db->get();

        if ($query->num_rows() > 0 ) {
            # code...
            return $query->row()->total;
        }

        return $null;
        
        
    }

}

/* End of file M_visitors.php */
/* Location: ./application/models/M_visitors.php */