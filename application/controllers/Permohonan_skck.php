<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Permohonan_skck extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('Permohonan_skck_model');
	}

    public function index() 
    {
    	$data['permohonan_skck'] = $this->Permohonan_skck_model->view();
    	$this->load->view('header');
        $this->load->view('permohonan_skck/data_permohonan_skck',$data);
        $this->load->view('footer');
    }

    public function tambah(){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_skck_model->validation("save")) {
                if($this->Permohonan_skck_model->cek_nik($this->input->post('input_nik'))){
                    $this->Permohonan_skck_model->save();
                    redirect('permohonan_skck');
                }
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">NIK tidak ada!</div>');
            }
        }
        $this->load->view('header');
        $this->load->view('permohonan_skck/tambah_permohonan_skck');
        $this->load->view('footer');
    }

    public function ubah($id){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_skck_model->validation("update")) {
                if($this->Permohonan_skck_model->cek_nik($this->input->post('input_nik'))){
                    $this->Permohonan_skck_model->edit($id);
                    redirect('permohonan_skck');
                }
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">NIK tidak ada!</div>');
            }
        }
        $data['permohonan_skck'] = $this->Permohonan_skck_model->view_by($id);
        $this->load->view('header');
        $this->load->view('permohonan_skck/ubah_permohonan_skck',$data);
        $this->load->view('footer');
    }

    public function hapus($id){
        $this->Permohonan_skck_model->delete($id);
        redirect('permohonan_skck');
    }

}