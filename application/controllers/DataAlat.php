<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataAlat extends CI_Controller {

	public function index()
	{
		$data = array('judul' => "Sarpras | Data Peralatan",'isi' => "dataAlat/index");
		$this->load->view('layout/wrapper', $data);
	}

	public function tkj()
	{
		$data = array('judul' => "Sarpras | Data Peralatan TKJ",'isi' => "dataAlat/tkj");
		$this->load->view('layout/wrapper', $data);
	}

}

/* End of file DataAlat.php */
/* Location: ./application/controllers/DataAlat.php */