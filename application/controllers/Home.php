<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//load Database/model
	public function __construct(){
		parent:: __construct();
		$this->load->model('berita_model');
	}
	
	public function index()
	{
		//listing berita dengan pagination
		$this->load->library('pagination');

		$config['base_url'] = base_url('berita/index/');
		$config['total_rows'] = count($this->berita_model->total());
		$config['per_page'] = 6;
		$config['uri_segment'] = 3;
		$limit		= $config['per_page'];
		$start		= ($this->uri->segment(3)) ? ($this->uri->segment(3)):0;

		$this->pagination->initialize($config);

		$berita 	= $this->berita_model->berita($limit,$start);
		//end pagination
		// $berita2   = $this->berita_model->home(); //ini aja dulu sisanya menyusul
		

		$data=array('title' => 'Khaerul yasin Kesehatan',
					'pagination'  => $this->pagination->create_links(),
					'berita' 	=> $berita,
					'limit'		=>$limit,
					'total'		=>$config['total_rows'],
					'berita' =>$berita, //ini aja dulu sisanya menyusul
					// 'berita2' =>$berita2,
					'isi'    => 'home/list'

					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}
		