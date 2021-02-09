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

	public function polling($slug = null)
	{
		if ($slug == null) {
			show_404();
		}

		if ($this->user == false) {
			redirect('registrasi');
		}

		$data['user'] = $this->user;

		$data['polling'] = $this->db->get_where('event_pollings', ['epolling_slug' => $slug])->row();
		if ($data['polling']) {
			$data['polling_item'] = $this->db->order_by('rand()')->get_where('event_polling_items', ['epolling_polling_id' => $data['polling']->epolling_id, 'epolling_item_status' => 1])->result();
			$data['title'] = $data['polling']->epolling_judul;
			$this->load->view('pages/event/polling', $data);
		} else {
			show_404();
		}
	}

	public function polling_add($id_polling = null, $id_item = null)
	{
		if ($id_item == null || $id_polling == null) {
			show_404();
		}

		if ($this->user == false) {
			redirect('registrasi');
		}

		$data['user'] = $this->user;

		$data['polling'] = $this->db->get_where('event_polling_items', ['epolling_item_id' => $id_item])->row();
		if ($data['polling']) {

			$data['title'] = 'Vote';
			$this->load->library('recaptcha');

			$this->form_validation->set_rules('g-recaptcha-response', 'Google Recaptcha', 'required');
			if ($this->form_validation->run() == false) {
				$this->load->view('pages/event/konfirm_polling', $data);
			} else {
				$captcha_answer = $this->input->post('g-recaptcha-response');
				$response = $this->recaptcha->verifyResponse($captcha_answer);
				if ($response['success']) {
					$checkresult =
						$this->db->get_where('event_polling_results', ['epolling_user_id' => $this->user->user_id, 'epolling_polling_id' => $id_polling])->row();

					if ($checkresult) {
						$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'Kamu sudah melakukan voting itu sebelumnya.']);
						redirect('event');
					} else {
						$this->db->insert('event_polling_results', ['epolling_item_id' => $id_item, 'epolling_user_id' => $this->user->user_id, 'epolling_polling_id' => $id_polling]);

						if ($this->db->affected_rows() > 0) {
							$this->session->set_flashdata('alert', ['type' => 'success', 'message' => 'Voting berhasil direkam.']);
							redirect('event');
						}
					}
				} else {
					$this->session->set_flashdata('alert', ['type' => 'danger', 'message' => 'Google recaptcha gagal dikonfirmasi, coba voting ulang.']);
					redirect('event');
				}
			}
		} else {
			show_404();
		}
	}

	public function registrasi($slug = null)
	{
		if ($slug == null) {
			show_404();
		}

		if ($slug == 'festival-keuangan-negara') {
			$data['title'] = 'Festival Keuangan Negara';
			$this->load->view('pages/event/registrasi', $data);
		}
	}
}
