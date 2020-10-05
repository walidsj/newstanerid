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
		if (checkloginstate() == true) {
			redirect('akun');
		}

		//user belum login staner
		if ($this->google->isLoggedIn() == true) {
			//user telah login akun google
			$userlogin = json_decode($this->google->getUserInfo());
			$user = $this->db->get_where('users', ['user_email' => $userlogin->email])
				->row();
			if ($user) {
				//jika user login dan terdaftar di dalam data user database
				if (setloginstate($user->user_id, $user->user_email) == true) {
					redirect('akun');
				} else {
					redirect('/');
				}
			} else {
				//jika user login tetapi belum terdaftar
				redirect('registrasi/lengkapi');
			}
		} else {
			//user tidak login akun google
			redirect('registrasi/oauth2');
		}
	}

	public function lengkapi()
	{
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

	public function logout()
	{
		if (setlogoutstate() == true) {
			if ($this->google->logout() == true) {
				redirect('/');
			}
		}
	}
}
