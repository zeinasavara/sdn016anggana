<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->model('galeri_m');

		$data = [
			'galeri' => $this->galeri_m->getLimit()
		];

		$this->template->load('template', 'home', $data);
	}
}
