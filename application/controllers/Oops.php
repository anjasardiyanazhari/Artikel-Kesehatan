<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oops extends CI_Controller {

	
	public function index()
	{
		$data=array('title' => 'Oops....',
					'isi'    => 'oops/list'

					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}
		