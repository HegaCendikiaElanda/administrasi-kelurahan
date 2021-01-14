<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth extends CI_Controller {
    
    public function index(){

    	$this->form_validation->set_rules('input_username','Username','trim|required');
    	$this->form_validation->set_rules('input_password','Password','trim|required');

    	if ($this->form_validation->run() == false) {
    		$this->load->view('login_page');
    	}else{
    		$this->_login();
    	}
    }

    private function _login(){
    	$username = $this->input->post('input_username');
    	$password = $this->input->post('input_password');

    	$user = $this->db->get_where('pegawai', ['username' => $username])->row_array();
    	if ($user) {
    		if (password_verify($password, $user['password'])) {
    			$data = [
    				'username' => $user['username'],
    				'nama' => $user['nama'],
    				'id_pegawai' => $user['id_pegawai']
    			];
    			$this->session->set_userdata($data);
    			redirect('welcome');
    		}else{
    			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password salah!</div>');
    		redirect('auth');
    		}
    	}else{
    		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">User tidak ada!</div>');
    		redirect('auth');
    	}
    }

    public function logout(){
    	$this->session->unset_userdata('username');
    	$this->session->unset_userdata('nama');
    	$this->session->unset_userdata('id_pegawai');
    	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
    	redirect('auth');
    }

}