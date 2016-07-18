<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataRuangan extends CI_Controller {

	public function index()
	{
		$this->load->model('Sarpras');
		$lokasi = $this->Sarpras->data()->result();
		$data = array('judul' => "Data Ruangan dan Bangunan", 'isi' => "dataRuangan/index.php", 'lokasi' => $lokasi);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file DataRuangan.php */
/* Location: ./application/controllers/DataRuangan.php */