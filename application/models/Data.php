<?php 
/**
* 
*/
class Data extends CI_Model
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	function tampil_data(){
		return $this->db->get('tb_berita');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function proses_update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function proses_hapus_user($where,$table){

		$this->db->where($where);
		$this->db->delete($table);
	}

}

 ?>