<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Permohonan_ktp extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('Permohonan_ktp_model');
	}

    public function index() 
    {
    	$data['permohonan_ktp'] = $this->Permohonan_ktp_model->view();
    	$this->load->view('header');
        $this->load->view('permohonan_ktp/data_permohonan_ktp',$data);
        $this->load->view('footer');
    }

    public function tambah(){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_ktp_model->validation("save")) {
                $this->Permohonan_ktp_model->save();
                redirect('permohonan_ktp');
            }
        }
        $this->load->view('header');
        $this->load->view('permohonan_ktp/tambah_permohonan_ktp');
        $this->load->view('footer');
    }

    public function ubah($id){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_ktp_model->validation("update")) {
                $this->Permohonan_ktp_model->edit($id);
                redirect('permohonan_ktp');
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