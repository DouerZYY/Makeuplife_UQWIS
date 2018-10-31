<?php
class Post_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE) {
		if ($limit) {
			$this->db->limit($limit, $offset);
		}
		if ($slug === FALSE) {
			$this->db->order_by('posts.id', 'DESC');
			$this->db->join('categories', 'categories.id = posts.category_id');
			$query = $this->db->get('posts');
			return $query->result_array();
		}

		$query = $this->db->get_where('posts', array('slug' => $slug));
		return $query->row_array();
	}

	public function get_posts_id($id = FALSE, $limit = FALSE, $offset = FALSE) {
		if ($limit) {
			$this->db->limit($limit, $offset);
		}
		if ($id === FALSE) {
			$query = $this->db->query('SELECT posts.*,categories.name FROM posts, categories WHERE posts.category_id=categories.id ORDER BY posts.id DESC');
			return $query->result_array();
		}
		// if ($id === FALSE) {
		// 	$this->db->order_by('posts.id', 'DESC');
		// 	$this->db->join('categories', 'categories.id = posts.category_id');
		// 	$query = $this->db->get('posts');
		// 	return $query->result_array();
		// }

		$query = $this->db->get_where('posts', array('id' => $id));
		return $query->row_array();

	}

	public function search($key) {
		$this->db->like('title', $key);
		$query = $this->db->get('posts');
		return $query->result();
	}

	public function create_post($post_image) {
		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body'),

			'user_id' => $this->session->userdata('user_id'),
			'post_image' => $post_image,
		);

		if ($this->input->post('name')) {
			$category = array(
				'name' => $this->input->post('name'),
				'user_id' => $this->session->userdata('user_id'),
			);
			$this->db->insert('categories', $category);
			$result = $this->category_model->get_category_id($this->input->post('name'));
			// echo $result->id;
			$data['category_id'] = $result->id;
		} elseif ($this->input->post('category_id')) {
			$data['category_id'] = $this->input->post('category_id');
		} else {
			$flag = $this->db->get_where('categories', array('user_id' => $this->session->userdata('user_id'), 'name' => 'others'));
			// var_dump($flag->row_array());
			// echo $flag->row_array() != 0;
			if ($flag->row_array() == 0) {
				$category = array(
					'name' => 'others',
					'user_id' => $this->session->userdata('user_id'),
				);
				$this->db->insert('categories', $category);
			} else {
				$category['name'] = 'others';
			}
			$result = $this->category_model->get_category_id($category['name']);
			$data['category_id'] = $result->id;
			// var_dump($result);
			// echo $data['category_id']->id;

		}

		// $flag = $this->db->get_where('categories', array('user_id' => $this->session->userdata('user_id'), 'name' => $data['category_id']));

		// if (empty($flag->row_array)) {
		// 	$this->category_model->create_category();

		// }

		return $this->db->insert('posts', $data);
	}

	public function delete_post($id) {
		$image_file_name = $this->db->select('post_image')->get_where('posts', array('id' => $id))->row()->post_image;
		$cwd = getcwd(); // save the current working directory
		$image_file_path = $cwd . "\\assets\\images\\posts\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); // Restore the previous working directory
		$this->db->where('id', $id);
		$this->db->delete('posts');
		return true;
	}

	public function update_post($post_image) {
		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body'),
			// 'category_id' => $this->input->post('category_id'),
		);
		if ($this->input->post('name')) {
			$category = array(
				'name' => $this->input->post('name'),
				'user_id' => $this->session->userdata('user_id'),
			);
			$this->db->insert('categories', $category);
			$result = $this->category_model->get_category_id($this->input->post('name'));
			// echo $result->id;
			$data['category_id'] = $result->id;
		} elseif ($this->input->post('category_id')) {
			$data['category_id'] = $this->input->post('category_id');
			// echo $this->input->post('category_id');
		}

		if ($post_image != NULL) {
			$data['post_image'] = $post_image;
		}
		// echo $post_image == NULL;
		// echo var_dump($data);

		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('posts', $data);
	}

	public function get_categories() {
		$this->db->order_by('name');
		$query = $this->db->get('categories');
		return $query->result_array();
	}

	public function get_posts_by_category($category_id) {
		$this->db->order_by('posts.id', 'DESC');
		$this->db->join('categories', 'categories.id = posts.category_id');
		$query = $this->db->get_where('posts', array('category_id' => $category_id, 'categories.user_id' => $this->session->userdata('user_id')));
		return $query->result_array();
	}

	public function get_data() {
		$query = $this->db->query("SELECT posts.*
                                 FROM posts
                                 ORDER BY posts.id ASC");
		return $query->result_array();
	}
}