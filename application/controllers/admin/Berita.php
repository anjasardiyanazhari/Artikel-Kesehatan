<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	//load Database
	public function __construct(){
		parent:: __construct();
		$this->load->model('berita_model');
		$this->load->model('kategori_model');
	}

	//listing data berita
	public function index()
	{
		$berita=$this->berita_model->listing();
		$data=array('title' => 'Data Berita ('.count($berita).')',
					'berita' => $berita,
					'isi'    => 'admin/berita/list'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{	
		$kategori=$this->kategori_model->listing();
		//validasi
		$valid=$this->form_validation;

		$valid->set_rules('judul_berita','judul berita','required', array('required' => '%s harus di isi'));

		$valid->set_rules('isi_berita','isi berita','required', array('required' => '%s harus di isi'));

		

		//cek validasi
		if ($valid->run()) {
			//fungsi upload
			 	$config['upload_path']          = './assets/upload/image/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;//dalam kilobyte
                $config['max_width']            = 5000;//dalam pixel
                $config['max_height']           = 5000;//dalam pixel 

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar')){
               
		//end validasi
		$data=array('title' => 'Tambah Berita',
					'kategori' => $kategori,
					'error_upload' =>$this->upload->display_errors(),
					'isi'    => 'admin/berita/tambah'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		//masuk Database
		}else{
			//proses manipulasi gambar
			$upload_data =array('upload' => $this->upload->data());
			//end manipulasi

			//gambar asli di simpan di folder assets/upload/image
			//lalu gambar itu di copy untuk versi mini size ke folder assets/upload/image/thumb
			$config['image_library'] = 'gd2';
			$config['source_image'] = './assets/upload/image/'.$upload_data['upload']['file_name'];
			//gambar versi kecil di pindahkan
			$config['new_image'] = './assets/upload/image/thumb/'.$upload_data['upload']['file_name'];
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 200;
			$config['height']       = 200;
			$config['thumb_marker']    = '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

			$i=$this->input;
			$data=array('id_user'		 => $this->session->userdata('id_user'),
						'id_kategori'	 => $i->post('id_kategori'),
						'slug_berita' 	 => url_title($this->input->post('judul_berita'), 'dash', TRUE),
						'judul_berita' 	 => $i->post('judul_berita'),
						'isi_berita' 	 => $i->post('isi_berita'),
						'gambar'		 => $upload_data['upload']['file_name'],
						'status_berita'	 => $i->post('status_berita'),
						'jenis_berita' 	 => $i->post('jenis_berita'),
						'keywords' 		 => $i->post('keywords'),
						'tanggal_post'	 => date('Y-m-d H:i:s')
			);

			$this->berita_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah di tambah');
			redirect(base_url('admin/berita'),'refresh');
		}}

		//end masuk database
		$data=array('title' => 'Tambah Berita',
					'kategori' => $kategori,
					'isi'    => 'admin/berita/tambah'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

	}

// edit
	public function edit($id_berita)
	{

		//ambil id berita
		$berita=$this->berita_model->detail($id_berita);
		
		$kategori=$this->kategori_model->listing();
		//validasi
		$valid=$this->form_validation;

		$valid->set_rules('judul_berita','judul berita','required', array('required' => '%s harus di isi'));

		$valid->set_rules('isi_berita','isi berita','required', array('required' => '%s harus di isi'));

		

		//cek validasi
		if ($valid->run()) {
			//kalau nggaq ganti gambar
			if(!empty($_FILES['gambar']['name'])){
			 	$config['upload_path']          = './assets/upload/image/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;//dalam kilobyte
                $config['max_width']            = 5000;//dalam pixel
                $config['max_height']           = 5000;//dalam pixel 

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar')){
               
		//end validasi
		$data=array('title' => 'Edit Berita',
					'kategori' => $kategori,
					'berita' => $berita,
					'error_upload' =>$this->upload->display_errors(),
					'isi'    => 'admin/berita/edit'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		//masuk Database
		}else{
			//proses manipulasi gambar
			$upload_data =array('upload' => $this->upload->data());
			//end manipulasi

			//gambar asli di simpan di folder assets/upload/image
			//lalu gambar itu di copy untuk versi mini size ke folder assets/upload/image/thumb
			$config['image_library'] = 'gd2';
			$config['source_image'] = './assets/upload/image/'.$upload_data['upload']['file_name'];
			//gambar versi kecil di pindahkan
			$config['new_image'] = './assets/upload/image/thumb/'.$upload_data['upload']['file_name'];
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 200;
			$config['height']       = 200;
			$config['thumb_marker']    = '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

			$i=$this->input;

			//hapus gambar lama jika ada upload gambar baru
			if($berita->gambar!=""){
				unlink('./assets/upload/image/'.$berita->gambar);
				unlink('./assets/upload/image/thumb/'.$berita->gambar);
			}


			$data=array( 'id_berita'     => $id_berita,
						'id_user'		 => $this->session->userdata('id_user'),
						'id_kategori'	 => $i->post('id_kategori'),
						'slug_berita' 	 => url_title($this->input->post('judul_berita'), 'dash', TRUE),
						'judul_berita' 	 => $i->post('judul_berita'),
						'isi_berita' 	 => $i->post('isi_berita'),
						'gambar'		 => $upload_data['upload']['file_name'],
						'status_berita'	 => $i->post('status_berita'),
						'keywords' 		 => $i->post('keywords'),
						'jenis_berita' 	 => $i->post('jenis_berita')
					
			);

			$this->berita_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah di update');
			redirect(base_url('admin/berita'),'refresh');
		}}else{
			//update berita tanpa ganti gambar baru
			$i=$this->input;

			$data=array( 'id_berita'     => $id_berita,
						'id_user'		 => $this->session->userdata('id_user'),
						'id_kategori'	 => $i->post('id_kategori'),
						'slug_berita' 	 => url_title($this->input->post('judul_berita'), 'dash', TRUE),
						'judul_berita' 	 => $i->post('judul_berita'),
						'isi_berita' 	 => $i->post('isi_berita'),
						// 'gambar'		 => $upload_data['upload']['file_name'],
						'status_berita'	 => $i->post('status_berita'),
						'keywords' 		 => $i->post('keywords'),
						'jenis_berita' 	 => $i->post('jenis_berita')
						
			);

			$this->berita_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah di update');
			redirect(base_url('admin/berita'),'refresh');

		}}

		//end masuk database
		$data=array('title' => 'Edit Berita',
					'kategori' => $kategori,
					'berita' => $berita,
					'isi'    => 'admin/berita/edit'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//fungsi delete
	public function delete($id_berita)
		{

			//proteksi delete
			$this->check_login->check();

			$berita=$this->berita_model->detail($id_berita);

			//Hapus gambar
			if($berita->gambar!=""){
				unlink('./assets/upload/image/'.$berita->gambar);
				unlink('./assets/upload/image/thumb/'.$berita->gambar);
			}

			//end hapus gambar
			$data=array('id_berita' => $berita->id_berita);

			$this->berita_model->delete($data);
			$this->session->set_flashdata('sukses', 'Data telah di Hapus');
			redirect(base_url('admin/berita'),'refresh');
			
		}


}
	