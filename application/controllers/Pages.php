<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'about')
	{
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page);
		$data['site_name'] = 'IDF Blog';

		$this->load->view('pages/'.$page, $data, FALSE);
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */