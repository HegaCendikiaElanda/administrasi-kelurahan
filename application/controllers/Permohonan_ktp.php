<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Permohonan_ktp extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('Permohonan_ktp_model');
	}

    public function index() 
    {
        if (!$this->session->has_userdata('id_pegawai')) {
            redirect('auth');
        }
    	$data['permohonan_ktp'] = $this->Permohonan_ktp_model->view();
    	$this->load->view('header');
        $this->load->view('permohonan_ktp/data_permohonan_ktp',$data);
        $this->load->view('footer');
    }

    public function tambah(){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_ktp_model->validation("save")) {
                if($this->Permohonan_ktp_model->cek_nik($this->input->post('input_nik'))){
                    $this->Permohonan_ktp_model->save();
                    redirect('permohonan_ktp');
                }
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">NIK tidak ada!</div>');
            }
        }
        $this->load->view('header');
        $this->load->view('permohonan_ktp/tambah_permohonan_ktp');
        $this->load->view('footer');
    }

    public function ubah($id){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_ktp_model->validation("update")) {
                if($this->Permohonan_ktp_model->cek_nik($this->input->post('input_nik'))){
                    $this->Permohonan_ktp_model->edit($id);
                    redirect('permohonan_ktp');
                }
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">NIK tidak ada!</div>');
            }
        }
        $data['permohonan_ktp'] = $this->Permohonan_ktp_model->view_by($id);
        $this->load->view('header');
        $this->load->view('permohonan_ktp/ubah_permohonan_ktp',$data);
        $this->load->view('footer');
    }

    public function hapus($id){
        $this->Permohonan_ktp_model->delete($id);
        redirect('permohonan_ktp');
    }

}