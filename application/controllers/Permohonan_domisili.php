<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Permohonan_domisili extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Permohonan_domisili_model');
    }

    public function index() 
    {
        $data['permohonan_domisili'] = $this->Permohonan_domisili_model->view();
        $this->load->view('header');
        $this->load->view('permohonan_domisili/data_permohonan_domisili',$data);
        $this->load->view('footer');
    }

    public function tambah(){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_domisili_model->validation("save")) {
                if($this->Permohonan_domisili_model->cek_nik($this->input->post('input_nik'))){
                    $this->Permohonan_domisili_model->save();
                    redirect('permohonan_domisili');
                }
            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">NIK tidak ada!</div>');
            }
        }
        $this->load->view('header');
        $this->load->view('permohonan_domisili/tambah_permohonan_domisili');
        $this->load->view('footer');
    }

    public function ubah($id){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_domisili_model->validation("update")) {
                if($this->Permohonan_domisili_model->cek_nik($this->input->post('input_nik'))){
                    $this->Permohonan_domisili_model->edit($id);
                    redirect('permohonan_domisili');
                }
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">NIK tidak ada!</div>');
            }
        }
        $data['permohonan_domisili'] = $this->Permohonan_domisili_model->view_by($id);
        $this->load->view('header');
        $this->load->view('permohonan_domisili/ubah_permohonan_domisili',$data);
        $this->load->view('footer');
    }

    public function hapus($id){
        $this->Permohonan_domisili_model->delete($id);
        redirect('permohonan_domisili');
    }

}