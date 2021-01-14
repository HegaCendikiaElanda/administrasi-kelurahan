<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pegawai extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('Pegawai_model');
	}

    public function index() 
    {
    	$data['pegawai'] = $this->Pegawai_model->view();
    	$this->load->view('header');
        $this->load->view('pegawai/data_pegawai',$data);
        $this->load->view('footer');
    }

    public function tambah(){
        if ($this->input->post('submit')) {
            if ($this->Pegawai_model->validation("save")) {
                $this->Pegawai_model->save();
                redirect('pegawai');
            }
        }
        $this->load->view('header');
        $this->load->view('pegawai/tambah_pegawai');
        $this->load->view('footer');
    }

    public function ubah($id){
        if ($this->input->post('submit')) {
            if ($this->Pegawai_model->validation("update")) {
                $this->Pegawai_model->edit($id);
                redirect('pegawai');
            }
        }
        $data['pegawai'] = $this->Pegawai_model->view_by($id);
        $this->load->view('header');
        $this->load->view('pegawai/ubah_pegawai',$data);
        $this->load->view('footer');
    }

    public function hapus($id){
        $this->Pegawai_model->delete($id);
        redirect('pegawai');
    }

}