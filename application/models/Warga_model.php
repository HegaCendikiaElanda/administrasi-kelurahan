<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Warga_model extends CI_Model
{
	public function view(){
		return $this->db->get('warga')->result();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if ($mode == "save"){
			$this->form_validation->set_rules('input_nama','Nama','required');
			$this->form_validation->set_rules('input_nik','NIK','required|numeric|max_length[16]');
			$this->form_validation->set_rules('input_alamat','Alamat','required');
			$this->form_validation->set_rules('input_tempat_lahir','Tempat Lahir','required');
			$this->form_validation->set_rules('input_tanggal_lahir','Tanggal Lahir','required');
			$this->form_validation->set_rules('input_pekerjaan','Pekerjaan','required');
			$this->form_validation->set_rules('input_pendidikan','Pendidikan','required');
			$this->form_validation->set_rules('input_agama','Agama','required');
			$this->form_validation->set_rules('input_status','Status Perkawinan','required');
		}
		if ($mode == "update"){
			$this->form_validation->set_rules('input_nama','Nama','required');
			$this->form_validation->set_rules('input_nik','NIK','required|numeric|max_length[16]');
			$this->form_validation->set_rules('input_alamat','Alamat','required');
			$this->form_validation->set_rules('input_tempat_lahir','Tempat Lahir','required');
			$this->form_validation->set_rules('input_tanggal_lahir','Tanggal Lahir','required');
			$this->form_validation->set_rules('input_pekerjaan','Pekerjaan','required');
			$this->form_validation->set_rules('input_pendidikan','Pendidikan','required');
			$this->form_validation->set_rules('input_agama','Agama','required');
			$this->form_validation->set_rules('input_status','Status Perkawinan','required');
		}
		if ($this->form_validation->run()) 
			return TRUE;
		else
			return FALSE;
	}

	public function save(){
		$data = array(
			"nama" => $this->input->post('input_nama'),
			"nik" => $this->input->post('input_nik'),
			"alamat" => $this->input->post('input_alamat'),
			"tempat_lahir" => $this->input->post('input_tempat_lahir'),
			"tanggal_lahir" => $this->input->post('input_tanggal_lahir'),
			"pekerjaan" => $this->input->post('input_pekerjaan'),
			"pendidikan" => $this->input->post('input_pendidikan'),
			"agama" => $this->input->post('input_agama'),
			"status_perkawinan" => $this->input->post('input_status')
			
		);
		$this->db->insert('warga',$data);
	}

	public function view_by($id){
		$this->db->where('id_warga',$id);
		return $this->db->get('warga')->row();
	}

	public function edit($id){
		$data = array(
			"nama" => $this->input->post('input_nama'),
			"nik" => $this->input->post('input_nik'),
			"alamat" => $this->input->post('input_alamat'),
			"tempat_lahir" => $this->input->post('input_tempat_lahir'),
			"tanggal_lahir" => $this->input->post('input_tanggal_lahir'),
			"pekerjaan" => $this->input->post('input_pekerjaan'),
			"pendidikan" => $this->input->post('input_pendidikan'),
			"agama" => $this->input->post('input_agama'),
			"status_perkawinan" => $this->input->post('input_status')
			
		);
		$this->db->where('id_warga',$id);
		$this->db->update('warga',$data);
	}

	public function delete($id){
		$this->db->where('id_warga',$id);
		$this->db->delete('warga');
	}

}