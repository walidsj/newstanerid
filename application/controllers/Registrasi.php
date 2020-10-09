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
		//blocking npm
		if ($this->session->npm) {
			redirect('registrasi/lengkapi');
		}

		//blocking login
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
				redirect('registrasi/npm');
			}
		} else {
			//user tidak login akun google
			redirect('registrasi/oauth2');
		}
	}

	public function lengkapi()
	{
		//blocking session
		if (empty($this->session->npm)) {
			redirect('registrasi');
		}

		//blocking google login
		if ($this->google->isLoggedIn() == false) {
			$this->session->unset_userdata('npm');
			redirect('registrasi/oauth2');
		}

		$this->load->library('curl');

		//user telah login akun google
		$data['akun'] = json_decode($this->google->getUserInfo());
		$data['user'] = json_decode(json_encode(json_decode($this->curl->simple_get(getenv('REST_SERVER') . '/mahasiswa?access_token=' . getenv('REST_TOKEN') . '&npm=' . $this->session->npm), true)['data'][0]));
		$this->form_validation->set_rules('whatsapp', 'No. WhatsApp', 'required|numeric|min_length[9]|max_length[13]');
		$this->form_validation->set_rules('line', 'ID Line', 'required|max_length[32]');
		if ($this->form_validation->run() == false) {

			$data['title'] = 'Lengkapi datamu';
			$this->load->view('pages/welcome/lengkapi', $data);
		} else {
			$datauser = [
				'user_uid' => $data['akun']->id,
				'user_email' => $data['akun']->email,
				'user_npm' => $data['user']->npm,
				'user_whatsapp' => $this->input->post('whatsapp', true),
				'user_line' => $this->input->post('line', true),
				'user_image' => $data['akun']->picture,
				'user_created' => date('Y-m-d H:i:s', now()),
				'user_status' => 1,
			];
			$this->db->insert('users', $datauser);
			if ($this->db->affected_rows() > 0) {
				$userlagi = $this->db->get_where('users', ['user_email' => $datauser['user_email']])
					->row();
				if (setloginstate($userlagi->user_id, $userlagi->user_email) == true) {
					$this->session->unset_userdata('npm');
					$this->session->set_flashdata('alert', ['type' => 'success', 'message' => 'Selamat! Pendaftaran berhasil.']);
					redirect('akun');
				} else {
					redirect('/');
				}
			} else {
				$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'Maaf, pendaftaran gagal. Hubungi administrasi jika masalah masih berlanjut.']);
				redirect('/');
			}
		}
	}

	public function npm()
	{
		$this->load->library('recaptcha');

		//blocking npm
		if ($this->session->npm) {
			redirect('registrasi/lengkapi');
		}

		//blocking google login
		if ($this->google->isLoggedIn() == false) {
			redirect('registrasi/oauth2');
		}

		//user telah login akun google
		$this->form_validation->set_rules('npm', 'NPM', 'required|numeric|exact_length[10]');
		$this->form_validation->set_rules('g-recaptcha-response', 'Google Recaptcha', 'required');
		if ($this->form_validation->run() == false) {
			$data['user'] = null;
			$data['title'] = 'Lengkapi datamu';
			$this->load->view('pages/welcome/npm', $data);
		} else {
			$captcha_answer = $this->input->post('g-recaptcha-response');
			$npm = $this->input->post('npm', true);
			$response = $this->recaptcha->verifyResponse($captcha_answer);
			if ($response['success']) {
				$checkdb = $this->db->get_where('users', ['user_npm' => $npm])->row();
				if ($checkdb) {
					$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'NPM telah didaftarkan! Hubungi administrator jika kamu merasa belum pernah mendaftar dengan NPM ini.']);
					redirect('registrasi/npm');
				} else {
					$data['user'] = json_decode(json_encode(json_decode($this->curl->simple_get(getenv('REST_SERVER') . '/mahasiswa?access_token=' . getenv('REST_TOKEN') . '&npm=' . $this->session->npm), true)['data'][0]));
					if ($data['user']) {
						$this->session->set_userdata('npm', $npm);
						redirect('registrasi/lengkapi');
					} else {
						$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'NPM dengan nomor itu ngga ada. Hubungi administrator jika kamu yakin npm sudah diisi benar.']);
						redirect('registrasi/npm');
					}
				}
			} else {
				$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'Google recaptcha salah!']);
				redirect('registrasi/npm');
			}
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

	public function logout()
	{
		if (setlogoutstate() == true) {
			if ($this->google->isLoggedIn() == true) {
				if ($this->google->logout() == true) {
					redirect('/');
				} else {
					redirect('akun');
				}
			} else {
				redirect('/');
			}
		}
	}
}
