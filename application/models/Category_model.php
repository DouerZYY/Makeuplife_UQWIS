<?php
class Category_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function get_categories() {
		$this->db->order_by('name');
		$query = $this->db->get('categories');
		return $query->result_array();
	}

	public function create_category() {
		$data = array(
			'name' => $this->input->post('name'),
			'user_id' => $this->session->userdata('user_id'),
		);

		return $this->db->insert('categories', $data);
	}

	public function get_category($id) {
		$query = $this->db->get_where('categories', array('id' => $id));
		return $query->row();
	}

	public function get_category_id($name) {
		$this->db->select('id');
		$query = $this->db->get_where('categories', array('name' => $name));

		return $query->row();
	}

	public function delete_category($id) {
		$this->db->where('id', $id);
		$this->db->delete('categories');
		return true;
	}

	public function check_category_exists($name) {
		$query = $this->db->get_where('categories', array('name' => $name, 'user_id' => $this->session->userdata('user_id')));
		if (empty($query->row_array())) {
			return true;
		} else {
			return false;
		}
	}
}