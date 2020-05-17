<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	//load model
	public function __construct(){
		parent:: __construct();
		$this->load->model('user_model'); 
	}
	//update profil
	public function index()
	{
		 $id_user=$this->session->userdata('id_user');
		 $user   =$this->user_model->detail($id_user);

		 //validasi
		$valid=$this->form_validation;

		$valid->set_rules('nama','Nama','required', array('required' => '%s harus di isi'));

		$valid->set_rules('email','Email','required|valid_email', 
			array('required'	 => '%s harus di isi',
				  'valid_email'  => 'format %s tidak Valid'));

		

		$valid->set_rules('password','Password','required|trim', 
			array('required'     => '%s harus di isi'));

		//cek validasi
		if ($valid->run() === FALSE) {
		//end validasi
		$data=array('title' => 'Update profil :'.$user->nama,
					'user' => $user,
					'isi'    => 'admin/profile/list'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		//masuk Database
		}else{
			$i=$this->input;
			$data=array('id_user'		 => $id_user,
						'nama'			 => $i->post('nama'),
						'email'			 => $i->post('email'),
						'username' 		 => $i->post('username'),
						'password' 		 => sha1($i->post('password')),
						' akses_level'	 => $i->post('akses_level')
			);

			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses', 'Profil telah di Update');
			redirect(base_url('admin/profile'),'refresh');
		}
		
	}
}
	