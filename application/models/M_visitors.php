<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_visitors extends CI_Model {

	function increment(){
		$date = date("Y/m/d");

		if(){
			$d = $this->db->get_where('visitors', array('date' => $date))->row();
				return $d;
		}
        $this->db->set('date', 'total+1', FALSE);
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

/* End of file M_visitors.php */
/* Location: ./application/models/M_visitors.php */