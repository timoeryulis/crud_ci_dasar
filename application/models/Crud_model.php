<?php 

class Crud_model extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function tampil_data(){
		$q = $this->db->get('tb_berita');
        return $q->result();
	}


}