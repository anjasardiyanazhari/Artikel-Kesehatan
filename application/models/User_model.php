<?php 
/**
* 
*/
class User_model extends CI_Model{
	//load database
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	
	//listing user
	public function listing(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id_user');

		$query=$this->db->get();
		return $query->result();
	}
	//detail
	public function detail($id_user){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user',$id_user);
		$this->db->order_by('id_user');

		$query=$this->db->get();
		return $query->row();
	}

		//login
	public function login($username,$password ){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('username'  => $username,
								'password'  => sha1($password)));
		$this->db->order_by('id_user');

		$query=$this->db->get();
		return $query->row();
	}

   //tambah data
	public function tambah($data){
		$this->db->insert('user',$data);
	}

	//edit
	public function edit($data){
		$this->db->where('id_user',$data['id_user']);
		$this->db->update('user',$data);
	}
	//hapus
	public function delete($data){
		$this->db->where('id_user',$data['id_user']);
		$this->db->delete('user',$data);
	}
}

 ?>