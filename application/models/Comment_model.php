<?php
class Comment_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function create_comment($post_id, $username) {
		$data = array(
			'post_id' => $post_id,
			'body' => $this->input->post('body'),
			'username' => $username,
		);

		$this->db->insert('comments', $data);
		return $data;
	}

	public function get_comments($post_id) {
		$query = $this->db->get_where('comments', array('post_id' => $post_id));
		return $query->result_array();
	}
}