<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//load Database
	public function __construct(){
		parent:: __construct();
		$this->load->model('user_model');
	}

	//listing data user
	public function index()
	{
		$user=$this->user_model->listing();
		$data=array('title' => 'Data User Administrator('.count($user).')',
					'user' => $user,
					'isi'    => 'admin/user/list'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		//validasi
		$valid=$this->form_validation;

		$valid->set_rules('nama','Nama','required', array('required' => '%s harus di isi'));

		$valid->set_rules('email','Email','required|valid_email', 
			array('required'	 => '%s harus di isi',
				  'valid_email'  => 'format %s tidak Valid'));

		$valid->set_rules('username','Username','required|trim|is_unique[user.username]',
			 array('required'	 => '%s harus di isi',
			 	   'is_unique'   => '%s <strong>'.$this->input->post('username').'</strong> sudah di gunakan. Buat Username Baru'));

		$valid->set_rules('password','Password','required|trim', 
			array('required'     => '%s harus di isi'));

		//cek validasi
		if ($valid->run() === FALSE) {
		//end validasi
		$data=array('title' => 'Tambah User Administrator',
					
					'isi'    => 'admin/user/tambah'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		//masuk Database
		}else{
			$i=$this->input;
			$data=array('nama'			 => $i->post('nama'),
						'email'			 => $i->post('email'),
						'username' 		 => $i->post('username'),
						'password' 		 => sha1($i->post('password')),
						'akses_level'	 => $i->post('akses_level')
			);

			$this->user_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah di tambah');
			redirect(base_url('admin/user'),'refresh');
		}
	}

// edit
	public function edit($id_user)
	{

		//ambil id user
		$user=$this->user_model->detail($id_user);
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
		$data=array('title' => 'Edit User Administrator :'.$user->nama,
					'user' => $user,
					'isi'    => 'admin/user/edit'

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
						'akses_level'	 => $i->post('akses_level')
			);

			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah di Update');
			redirect(base_url('admin/user'),'refresh');
		}
	}

	//fungsi delete
	public function delete($id_user)
		{

			//proteksi delete
			$this->check_login->check();

			$user=$this->user_model->detail($id_user);
			$data=array('id_user' => $user->id_user);

			$this->user_model->delete($data);
			$this->session->set_flashdata('sukses', 'Data telah di Hapus');
			redirect(base_url('admin/user'),'refresh');
			
		}


}
	