<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->user = checkloginstate();
	}

	public function index()
	{

		$data['user'] = $this->user;
		$data['event'] = $this->db->order_by('event_tanggalstart', 'ASC')
			->get_where('events', ['event_status' => 1])->result();

		$data['title'] = 'Event Terbaru';
		$this->load->view('pages/event/index', $data);
	}
}
