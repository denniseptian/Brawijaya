<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Model {

  var $tabel = 'upload_img';

  function __construct() {
    parent::__construct();
  }
  
    //fungsi untuk menampilkan semua data dari tabel database
  function get_allimage() {
    $this->db->from($this->tabel);
    $query = $this->db->get();
    return $query->result();

  }

    //fungsi insert ke database
  function get_insert($data){
   $this->db->insert($this->tabel, $data);
   return TRUE;
 }
 
 function viewGroups() {
  $this->db->order_by('grups', 'desc');
  $ambil = $this->db->get('gallery');
  if ($ambil->num_rows() > 0) {
    foreach ($ambil->result() as $data) {
      $hasil[] = $data;
    }
    return $hasil;
  }
}
}

/* End of file gallery.php */
/* Location: ./application/models/gallery.php */