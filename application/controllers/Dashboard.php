<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                
		$this->load->model('data');
    }
    function index(){
    	$this->load->view('index');
    }
}