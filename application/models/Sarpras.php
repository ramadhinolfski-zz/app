<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sarpras extends CI_Model {

	function data() {
		$lokasi = $this->db->get('lokasi');
		return $lokasi;
	}

}

/* End of file mSarpras.php */
/* Location: ./application/models/mSarpras.php */