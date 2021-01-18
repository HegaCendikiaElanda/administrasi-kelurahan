<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Permohonan_ktp_model extends CI_Model
{
	public function view(){
		$this->db->select('permohonan_ktp.*,warga.nik, warga.nama as nama_warga, pegawai.nama as nama_pegawai')
			 ->from('permohonan_ktp')
			 ->join('warga','warga.id_warga = permohonan_ktp.id_warga')
			 ->join('pegawai','pegawai.id_pegawai = permohonan_ktp.id_pegawai');
		return $this->db->get()->result();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if ($mode == "save"){
			$this->form_validation->set_rules('input_tanggal','Tanggal','required');
			$this->form_validation->set_rules('input_nik','NIK','required|numeric|exact_length[16]');
		}
		if ($mode == "update"){
			$this->form_validation->set_rules('input_tanggal','Tanggal','required');
			$this->form_validation->set_rules('input_nik','NIK','required|numeric|exact_length[16]');
		}
		if ($this->form_validation->run()) 
			return TRUE;
		else
			return FALSE;
	}

	public function save(){
		$warga = $this->get_warga_by($this->input->post('input_nik'));
		$data = array(
			"tanggal" => $this->input->post('input_tanggal'),
			"id_warga" => $warga['id_warga'],
			"id_pegawai" => $this->session->userdata('id_pegawai')
		);
		$this->db->insert('permohonan_ktp',$data);
	}

	public function cek_nik($nik){
		$this->db->where('nik',$nik);
		$result = $this->db->get('warga')->row_array();
		if ($result)
			return TRUE;
		else
			return FALSE;
	}

	public function get_warga_by($nik){
		$this->db->where('nik',$nik);
		return $this->db->get('warga')->row_array();
	}

	public function view_by($id){
		$this->db->select('permohonan_ktp.*,warga.nik, warga.nama as nama_warga, pegawai.nama as nama_pegawai')
			 ->from('permohonan_ktp')
			 ->join('warga','warga.id_warga = permohonan_ktp.id_warga')
			 ->join('pegawai','pegawai.id_pegawai = permohonan_ktp.id_pegawai');
		$this->db->where('no_pktp',$id);
		return $this->db->get()->row();
	}

	public function edit($id){
		$warga = $this->get_warga_by($this->input->post('input_nik'));
		$data = array(
			"tanggal" => $this->input->post('input_tanggal'),
			"id_warga" => $warga['id_warga'],
			"id_pegawai" => $this->session->userdata('id_pegawai')
		);
		$this->db->where('no_pktp',$id);
		$this->db->update('permohonan_ktp',$data);
	}

	public function delete($id){
		$this->db->where('no_pktp',$id);
		$this->db->delete('permohonan_ktp');
	}
}