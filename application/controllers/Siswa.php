<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$data = array('judul' => "Akademik | Siswa", 'isi' => 'siswa/index');
		$this->load->view('layout/wrapper', $data);
	}

}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */