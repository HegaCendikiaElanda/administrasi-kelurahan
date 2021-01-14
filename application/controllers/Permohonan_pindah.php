<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Permohonan_pindah extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('Permohonan_pindah_model');
	}

    public function index() 
    {
    	$data['permohonan_pindah'] = $this->Permohonan_pindah_model->view();
    	$this->load->view('header');
        $this->load->view('permohonan_pindah/data_permohonan_pindah',$data);
        $this->load->view('footer');
    }

    public function tambah(){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_pindah_model->validation("save")) {
                $this->Permohonan_pindah_model->save();
                redirect('permohonan_pindah');
            }
        }
        $this->load->view('header');
        $this->load->view('permohonan_pindah/tambah_permohonan_pindah');
        $this->load->view('footer');
    }

    public function ubah($id){
        if ($this->input->post('submit')) {
            if ($this->Permohonan_pindah_model->validation("update")) {
                $this->Permohonan_pindah_model->edit($id);
                redirect('permohonan_pindah');
            }
        }
        $data['permohonan_pindah'] = $this->Permohonan_pindah_model->view_by($id);
        $this->load->view('header');
        $this->load->view('permohonan_pindah/ubah_permohonan_pindah',$data);
        $this->load->view('footer');
    }

    public function hapus($id){
        $this->Permohonan_pindah_model->delete($id);
        redirect('permohonan_pindah');
    }

}