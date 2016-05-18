<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_count extends CI_Model {
    
    function increment(){
        $this->db->set('total', 'total+1', FALSE);
        $this->db->update('count');
    }

    function get_total(){
        $query = $this->db->get('count');
        if($query->num_rows()>0){
            $row = $query->row();
            return str_pad($row->total, 6 , "0", STR_PAD_LEFT);
        } else {
            return FALSE;
        }
    }
}
