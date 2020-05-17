<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	
	public function index()
	{
		$data=array('title' => 'Lokasi Kami',
					'isi'    => 'lokasi/list'

					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}
	