<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataset extends CI_Controller
{
	public function index()
	{

		$data['count_dataset'] = $this->db->get('dataset')
			->num_rows();
		$data['count_mahasiswa'] = $this->db->get('mahasiswa')
			->num_rows();
		$data['count_elkam'] = $this->db->get('elkam')
			->num_rows();
		$data['count_sso'] = $this->db->get('user')
			->num_rows();
		$this->load->view('pages/welcome/index', $data);
	}
}
