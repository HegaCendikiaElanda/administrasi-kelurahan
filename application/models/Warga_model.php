<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Warga_model extends CI_Model
{
	public function view(){
		return $this->db->get('warga')->result();
	}
}