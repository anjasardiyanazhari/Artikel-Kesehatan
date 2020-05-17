<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {


	//load Database/model
	public function __construct(){
		parent:: __construct();
		$this->load->model('berita_model');
	} 

	//main page dari berita
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
		$data=array('title' => 'Artikel Kesehatan',
					'pagination'  => $this->pagination->create_links(),
					'berita' 	=> $berita,
					'limit'		=>$limit,
					'total'		=>$config['total_rows'],
					'isi'    => 'berita/list'

					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	//detail Berita
	public function read($slug_berita)
	{
		$berita = $this->berita_model->read($slug_berita);
		$listing = $this->berita_model->home();

		$data=array('title' => $berita->judul_berita,
					'berita' => $berita,
					'listing' => $listing,
					'isi'    => 'berita/read'

					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}
		