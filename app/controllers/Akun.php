<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->user = checkloginstate();

		if ($this->user == false) {
			redirect('/');
		}
	}

	public function index()
	{
		$data['title'] = 'Akunku';
		$this->load->view('pages/akun/index', $data);
	}
}
