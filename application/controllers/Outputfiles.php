<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outputfiles extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('fpdf');
	}

	public function index()
	{
		
	}
	public function pdf(){
		$hasil = $this->db->get('indexpost');
		$this->fpdf->FPDF("p", "cm", "A4");
		$this->fpdf->SetMargins(0.5, 0.5, 0.5, 0.5);
		$this->fpdf->AliasNbPages();
		$this->fpdf->AddPage();
		$this->fpdf->Cell(19, 0.7, 'Daftar post', 0, 0, 'c');
		$this->fpdf->Ln();
		$this->fpdf->Ln();
		$this->fpdf->SetFont('Times', '',12);
		$this->fpdf->Cell(1, 1, 'no', 1, 'LR', 'L');
		$this->fpdf->Cell(7, 1, 'Judul', 1, 'LR', 'L');
		$this->fpdf->Cell(7, 1, 'Subject', 1, 'LR', 'L');
		$this->fpdf->Cell(4, 1, 'Tanggal Posting', 1, 'LR', 'L');
		$nomor = 1;
		foreach ($hasil->result() as $data) {
			# code...
			$this->fpdf->Ln();
			$this->fpdf->Cell(1, 0.7, $nomor, 1, 'LR', 'L');
			$this->fpdf->Cell(7, 0.7, $data->title , 1, 'LR', 'L');
			$this->fpdf->Cell(7, 0.7, $data->subject, 1, 'LR', 'L');
			$this->fpdf->Cell(4, 0.7, $data->date , 1, 'LR', 'L');
			$nomor++;
		}
		$this->fpdf->Output("posting.pdf","I");

	}

}

/* End of file outputfiles.php */
/* Location: ./application/controllers/outputfiles.php */