<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
	public function  __construct()
	{
		parent::__construct();
		$this->load->library('google');
	}

	public function index()
	{
		if ($this->google->isLoggedIn() == true) {
			set_cookie('key', json_encode($this->session->access_token), 30 * 24 * 60 * 60);
			var_dump(json_decode(get_cookie('key'), true));
			// var_dump($this->google->getUserInfo());
		} else {
			redirect('registrasi/oauth2');
		}
	}

	public function oauth2()
	{
		if ($this->google->isLoggedIn() == false) {
			redirect($this->google->getUrlLogin());
		} else {
			redirect('registrasi');
		}
	}

	public function oauth2_callback()
	{
		if ($this->google->setAccessToken() == true) {
			redirect('registrasi');
		} else {
			show_404();
		}
	}
}
