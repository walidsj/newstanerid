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

		$data['user'] = $this->user;

		$data['title'] = 'Halo!';
		$this->load->view('pages/welcome/index', $data);
	}
}
