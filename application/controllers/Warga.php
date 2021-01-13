<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Warga extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('Warga_model');
	}

    public function index() 
    {
    	$data['warga'] = $this->Warga_model->view();
    	$this->load->view('header');
        $this->load->view('data_warga',$data);
        $this->load->view('footer');
    }
}