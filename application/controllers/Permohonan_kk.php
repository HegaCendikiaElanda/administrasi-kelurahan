<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Permohonan_kk extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('Permohonan_kk_model');
	}

    public function index() 
    {
        if (!$this->session->has_userdata('id_pegawai')) {
            redirect('auth');
        }
    	$data['permohonan_kk'] = $this->Permohonan_kk_model->view();
    	$this->load->view('header');
        $this->load->view('permohonan_kk/data_permohonan_kk',$data);
        $this->load->view('footer');
    }

    public function tambah(){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_kk_model->validation("save")) {
                if($this->Permohonan_kk_model->cek_nik($this->input->post('input_nik'))){
                    $this->Permohonan_kk_model->save();
                    redirect('permohonan_kk');
                }
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">NIK tidak ada!</div>');
            }
        }
        $this->load->view('header');
        $this->load->view('permohonan_kk/tambah_permohonan_kk');
        $this->load->view('footer');
    }

    public function ubah($id){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_kk_model->validation("update")) {
                if($this->Permohonan_kk_model->cek_nik($this->input->post('input_nik'))){
                    $this->Permohonan_kk_model->edit($id);
                    redirect('permohonan_kk');
                }
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">NIK tidak ada!</div>');
            }
        }
        $data['permohonan_kk'] = $this->Permohonan_kk_model->view_by($id);
        $this->load->view('header');
        $this->load->view('permohonan_kk/ubah_permohonan_kk',$data);
        $this->load->view('footer');
    }

    public function hapus($id){
        $this->Permohonan_kk_model->delete($id);
        redirect('permohonan_kk');
    }

}