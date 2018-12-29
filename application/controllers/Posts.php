<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_posts', 'posts');
	}

	public function index()
	{
		$data['title'] = 'Posts';
		$data['site_name'] = 'IDF Blog';

		$data['posts'] = $this->posts->get_posts();

		$this->load->view('posts/index', $data, FALSE);
	}

	public function view($slug)
	{
		$data['title'] = 'Post Detail';
		$data['site_name'] = 'IDF Blog';

		$data['posts'] = $this->posts->get_posts($slug);
		

		$this->load->view('posts/view', $data, FALSE);
	}

}