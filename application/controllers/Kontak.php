<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	
	public function index()
	{
		$data=array('title' => 'Kontak Kami',
					'isi'    => 'kontak/list'

					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}
		