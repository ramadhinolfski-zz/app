<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataInstruktur extends CI_Controller {

	public function index()
	{
		$data = array('judul' => "Instruktur | Data", 'isi' => 'dataInstruktur/index');

		$this->load->view('layout/wrapper', $data);
	}

}