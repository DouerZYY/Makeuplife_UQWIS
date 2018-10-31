<?php
class Pages extends CI_Controller {
	public function view($page = 'home') {
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header');
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer');
	}

	public function view_login($page = array('users/', 'login')) {
		if (!file_exists(APPPATH . 'views/' . $page[0] . $page[1] . '.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page[1]);

		// $this->load->view('templates/header');
		// $this->load->view('pages/'.$page, $data);
		// $this->load->view('templates/footer');

		$this->load->view('templates/header');
		$this->load->view($page[0] . $page[1], $data);
		$this->load->view('templates/footer');
	}
}