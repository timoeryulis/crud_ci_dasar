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
		
		$this->load->view("tambah_data");
	}
	public function proses_tambah_data(){
		
		print_r("masuk");die();
	}

	

	public function edit($id){
		
	}


	public function delete($id){
		
	}



}