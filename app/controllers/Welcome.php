<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->user = checkloginstate();
	}

	public function index()
	{
		$data['event'] = $this->db->order_by('event_tanggalstart', 'ASC')
			->get_where('events', ['event_status' => 1])->result();
		$data['slide'] = $this->db->get_where('slides', ['slide_status' => 1])->result();

		$this->load->view('pages/welcome/index', $data);
	}
}
