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
		//blocking login
		if (checkloginstate() == true) {
			redirect('akun');
		}

		//user belum login staner
		if ($this->google->isLoggedIn() == true) {
			//user telah login akun google
			$userlogin = json_decode($this->google->getUserInfo());
			$user = $this->db->get_where('users', ['email_user' => $userlogin->email])
				->row();
			if ($user) {
				//jika user login dan terdaftar di dalam data user database
				if (setloginstate($user->email_user) == true) {
					redirect('akun');
				} else {
					redirect('/');
				}
			} else {
				//jika user login tetapi belum terdaftar
				$this->session->set_userdata('lengkapi_user', 'yes');
				redirect('registrasi/lengkapi');
			}
		} else {
			//user tidak login akun google
			redirect('registrasi/oauth2');
		}
	}

	public function lengkapi()
	{
		$this->load->library('recaptcha');

		if (empty($this->session->lengkapi_user)) {
			redirect('registrasi');
		}

		//blocking google login
		if ($this->google->isLoggedIn() == false) {
			redirect('registrasi/oauth2');
		}

		//user telah login akun google
		$akungoogle = json_decode($this->google->getUserInfo());

		//get data mahasiswa
		$mahasiswa = $this->db
			->join('semesters', 'mahasiswas.semester_mahasiswa = semesters.id_semester')
			->join('prodis', 'semesters.prodi_semester = prodis.id_prodi')
			->join('jurusans', 'prodis.jurusan_prodi = jurusans.id_jurusan')
			->get_where('mahasiswas', ['email_mahasiswa' => $akungoogle->email])->row();

		if (!empty($mahasiswa)) {
			$this->form_validation->set_rules('whatsapp', 'No. WhatsApp', 'required|numeric|min_length[9]|max_length[13]');
			$this->form_validation->set_rules('g-recaptcha-response', 'Google Recaptcha', 'required');
			if ($this->form_validation->run() == false) {

				$data['title'] = 'Lengkapi datamu';
				$data['mahasiswa'] = $mahasiswa;
				$data['akun'] = $akungoogle;
				$this->load->view('pages/welcome/lengkapi', $data);
			} else {
				$captcha_answer = $this->input->post('g-recaptcha-response');
				$response = $this->recaptcha->verifyResponse($captcha_answer);
				if ($response['success']) {
					$datauser = [
						'uid_user' => $akungoogle->id,
						'email_user' => $mahasiswa->email_mahasiswa,
						'whatsapp_user' => $this->input->post('whatsapp', true),
						'image_user' => $akungoogle->picture,
						'created_at_user' => date('Y-m-d H:i:s', now()),
						'updated_at_user' => date('Y-m-d H:i:s', now())
					];
					$this->db->insert('users', $datauser);
					if ($this->db->affected_rows() > 0) {
						if (setloginstate($mahasiswa->email_mahasiswa) == true) {
							$this->session->set_flashdata('alert', ['type' => 'success', 'message' => 'Selamat! Pendaftaran berhasil.']);
							$this->session->unset_userdata('lengkapi_user');
							redirect('akun');
						} else {
							redirect('/');
						}
					} else {
						$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'Maaf, pendaftaran gagal. Coba lagi atau hubungi administrator jika masalah masih berlanjut.']);
						$this->session->unset_userdata('lengkapi_user');
						redirect('/');
					}
				} else {
					$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'Google recaptcha salah!']);
					redirect('registrasi/lengkapi');
				}
			}
		} else {
			$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'Pendaftaran gagal. Email kampus tidak dapat ditemukan. Hubungi administrator untuk mendaftarkan email kamu.']);
			redirect('/');
		}
	}

	// private function npm()
	// {
	// 	$this->load->library('recaptcha');

	// 	//blocking npm
	// 	if ($this->session->npm) {
	// 		redirect('registrasi/lengkapi');
	// 	}

	// 	//blocking google login
	// 	if ($this->google->isLoggedIn() == false) {
	// 		redirect('registrasi/oauth2');
	// 	}

	// 	//user telah login akun google
	// 	$this->form_validation->set_rules('npm', 'NPM', 'required|numeric|exact_length[10]');
	// 	$this->form_validation->set_rules('g-recaptcha-response', 'Google Recaptcha', 'required');
	// 	if ($this->form_validation->run() == false) {
	// 		$data['user'] = null;
	// 		$data['title'] = 'Lengkapi datamu';
	// 		$this->load->view('pages/welcome/npm', $data);
	// 	} else {
	// 		$captcha_answer = $this->input->post('g-recaptcha-response');
	// 		$npm = $this->input->post('npm', true);
	// 		$response = $this->recaptcha->verifyResponse($captcha_answer);
	// 		if ($response['success']) {
	// 			$checkdb = $this->db->get_where('users', ['user_npm' => $npm])->row();
	// 			if ($checkdb) {
	// 				$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'NPM telah didaftarkan! Hubungi administrator jika kamu merasa belum pernah mendaftar dengan NPM ini.']);
	// 				redirect('registrasi/npm');
	// 			} else {
	// 				$data['user'] = json_decode(json_encode(json_decode($this->curl->simple_get(getenv('REST_SERVER') . '/mahasiswa?access_token=' . getenv('REST_TOKEN') . '&npm=' . $npm), true)['data'][0]));
	// 				if (!empty($data['user'])) {
	// 					$this->session->set_userdata('npm', $npm);
	// 					redirect('registrasi/lengkapi');
	// 				} else {
	// 					$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'NPM dengan nomor itu ngga ada. Hubungi administrator jika kamu yakin npm sudah diisi benar.']);
	// 					redirect('registrasi/npm');
	// 				}
	// 			}
	// 		} else {
	// 			$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'Google recaptcha salah!']);
	// 			redirect('registrasi/npm');
	// 		}
	// 	}
	// }

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
