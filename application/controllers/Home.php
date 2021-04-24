<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->model(['galeri_m', 'tentangkami_m', 'gtk_m']);



		$data = [
			'galeri' => $this->galeri_m->getGaleri(8, 0),
			'visimisi' => $this->tentangkami_m->getSVM()->row(),
			'guru' => $this->gtk_m->get('gtk', 1)->result(),
			'tendik' => $this->gtk_m->get('gtk', 2)->result(),
			'pengunjunghariini' => $this->fungsi->visitors()['pengunjunghariini'],
			'pengunjungonline' => $this->fungsi->visitors()['pengunjungonline'],
			'totalpengunjung' => $this->fungsi->visitors()['totalpengunjung']
		];

		$this->template->load('template', 'home', $data);
	}
}
