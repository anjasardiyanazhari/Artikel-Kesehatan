<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbor extends CI_Controller {

		//load Database
	public function __construct(){
		parent:: __construct();
		$this->load->model('berita_model');
		$this->load->model('kategori_model');
		$this->load->model('user_model');
	}

	
	public function index()
	{

		$berita= $this->berita_model->listing();
		$kategori= $this->kategori_model->listing();
		$user= $this->user_model->listing();

		$data=array('title' => 'Administrator',
					'berita' => $berita,
					'kategori' => $kategori,
					'user' => $user,
					'isi'    => 'admin/dashbor/list'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
}
	