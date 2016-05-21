<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_count extends CI_Model {

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

}
