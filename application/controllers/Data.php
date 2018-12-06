<?php
Class Data extends CI_Controller{
	 public function __construct()
    {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                $this->load->helper('url');

		$this->load->model('berita');
    }
	public function index(){
		$this->load->model("berita");
		$data['berita'] = $this->berita->tampil_data('tb_berita')->result();

		$this->load->view("index",$data);
	}


	public function lihat_data(){

		$this->load->model("model_data");
		$data['berita'] = $this->model_data->load_karyawan();

		$this->load->view("lihat_data",$data);


	}


	public function tambah_data(){
		// $this->load->model("berita");
		// $data['tipe'] = "Add";

		// if(isset($_POST['tombol_submit'])){
		// 	//proses simpan dilakukan
		// 	$this->model_data->simpan($_POST);
		// 	redirect("data");
		// }

		$this->load->view("tambah_data");
	}

	

	public function edit($id){
		$this->load->model("model_data");
		$data['tipe'] = "Edit";
		$data['default'] = $this->model_data->get_default($id);

		if(isset($_POST['tombol_submit'])){
			$this->model_data->update($_POST, $id);
			redirect("data");
		}

		$this->load->view("form_karyawan",$data);
	}


	public function delete($id){
		$this->load->model("model_data");
		$this->model_data->hapus($id);
		redirect("data");
	}



}