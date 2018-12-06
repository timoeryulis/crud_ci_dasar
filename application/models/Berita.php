<?php 

Class Berita extends CI_Model{


	function tampil_data($tabel){
		return $this->db->get($tabel);
	}
}

 ?>