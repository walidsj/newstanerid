<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{

		$this->load->library('recaptcha');
		$captcha_answer = $this->input->post('g-recaptcha-response');
		$response = $this->recaptcha->verifyResponse($captcha_answer);

		if ($response['success']) {
			// Your success code here
		} else {
			// Something goes wrong
		}

		$this->load->view('pages/welcome/index');
	}
}
