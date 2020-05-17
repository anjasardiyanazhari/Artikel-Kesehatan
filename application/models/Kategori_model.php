<?php 
/**
* 
*/
class Kategori_model extends CI_Model{
	//load database
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	
	//listing kategori
	public function listing(){
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('urutan','ASC');

		$query=$this->db->get();
		return $query->result();
	}
	//detail
	public function detail($id_kategori){
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori',$id_kategori);
		$this->db->order_by('id_kategori');

		$query=$this->db->get();
		return $query->row();
	}

	

   //tambah data
	public function tambah($data){
		$this->db->insert('kategori',$data);
	}

	//edit
	public function edit($data){
		$this->db->where('id_kategori',$data['id_kategori']);
		$this->db->update('kategori',$data);
	}
	//hapus
	public function delete($data){
		$this->db->where('id_kategori',$data['id_kategori']);
		$this->db->delete('kategori',$data);
	}
}

 ?>