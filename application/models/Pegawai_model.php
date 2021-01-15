<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pegawai_model extends CI_Model
{
	public function view(){
		return $this->db->get('pegawai')->result();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if ($mode == "save"){
			$this->form_validation->set_rules('input_nama','Nama','required');
			$this->form_validation->set_rules('input_nip','NIP','required');
			$this->form_validation->set_rules('input_username','Username','required');
			$this->form_validation->set_rules('input_password','Password','required');
			$this->form_validation->set_rules('input_no_hp','Nomor Handphone','required');
			$this->form_validation->set_rules('input_email','E-Mail','required');
		}
		if ($mode == "update"){
			$this->form_validation->set_rules('input_nama','Nama','required');
			$this->form_validation->set_rules('input_nip','NIP','required');
			$this->form_validation->set_rules('input_username','Username','required');
			$this->form_validation->set_rules('input_password','Password','required');
			$this->form_validation->set_rules('input_no_hp','Nomor Handphone','required');
			$this->form_validation->set_rules('input_email','E-Mail','required');
		}
		if ($this->form_validation->run()) 
			return TRUE;
		else
			return FALSE;
	}

	public function save(){
		$data = array(
			"nama" => $this->input->post('input_nama'),
			"nip" => $this->input->post('input_nip'),
			"username" => $this->input->post('input_username'),
			"password" => password_hash($this->input->post('input_password'), PASSWORD_DEFAULT),
			"no_hp" => $this->input->post('input_no_hp'),
			"email" => $this->input->post('input_email')
		);
		$this->db->insert('pegawai',$data);
	}

	public function view_by($id){
		$this->db->where('id_pegawai',$id);
		return $this->db->get('pegawai')->row();
	}

	public function edit($id){
		$data = array(
			"nama" => $this->input->post('input_nama'),
			"nip" => $this->input->post('input_nip'),
			"username" => $this->input->post('input_username'),
			"password" => $this->input->post('input_password'),
			"no_hp" => $this->input->post('input_no_hp'),
			"email" => $this->input->post('input_email')
			
		);
		$this->db->where('id_pegawai',$id);
		$this->db->update('pegawai',$data);
	}

	public function delete($id){
		$this->db->where('id_pegawai',$id);
		$this->db->delete('pegawai');
	}

}