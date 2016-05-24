<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Model {

	public function insertimage($imgdata) {
		$id = rand();
    $imgdata = file_get_contents($imgdata['full_path']);//get the content of the image using its path
    $data = array(
      'id' => $id,
      'image' => $imgdata
      );
    $this->db->insert('gallery', $data);
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