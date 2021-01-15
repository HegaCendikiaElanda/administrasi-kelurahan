<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Warga extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('Warga_model');
	}

    public function index() 
    {
        if (!$this->session->has_userdata('id_pegawai')) {
            redirect('auth');
        }
    	$data['warga'] = $this->Warga_model->view();
    	$this->load->view('header');
        $this->load->view('warga/data_warga',$data);
        $this->load->view('footer');
    }

    public function tambah(){
        if ($this->input->post('submit')) {
            if ($this->Warga_model->validation("save")) {
                $this->Warga_model->save();
                redirect('warga');
            }
        }
        $this->load->view('header');
        $this->load->view('warga/tambah_warga');
        $this->load->view('footer');
    }

    public function ubah($id){
        if ($this->input->post('submit')) {
            if ($this->Warga_model->validation("update")) {
                $this->Warga_model->edit($id);
                redirect('warga');
            }
        }
        $data['warga'] = $this->Warga_model->view_by($id);
        $this->load->view('header');
        $this->load->view('warga/ubah_warga',$data);
        $this->load->view('footer');
    }

    public function hapus($id){
        $this->Warga_model->delete($id);
        redirect('warga');
    }

}