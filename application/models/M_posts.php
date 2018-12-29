<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_posts extends CI_Model {

	public function get_posts($slug = FALSE)
	{
		if ($slug === FALSE) {
			$this->db->order_by('post_id', 'desc');
			$query = $this->db->get('posts');
			return $query->result_array();
		}

		$query = $this->db->get_where('posts', array('slug' => $slug));
		return $query->row_array();
		
	}

}

/* End of file M_posts.php */
/* Location: ./application/models/M_posts.php */