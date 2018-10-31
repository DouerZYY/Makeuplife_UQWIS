<?php
class Posts extends CI_Controller {
	public function index($offset = 0) {
		// Pagination Config
		$config['base_url'] = base_url() . 'posts/index/';
		$config['total_rows'] = $this->db->count_all('posts');
		$config['per_page'] = 3;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-link');

		// Init Pagination
		$this->pagination->initialize($config);

		$data['title'] = 'Latest Posts';

		$data['posts'] = $this->post_model->get_posts_id(FALSE, $config['per_page'], $offset);

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id) {
		$data['post'] = $this->post_model->get_posts_id($id);
		$post_id = $data['post']['id'];
		$data['comments'] = $this->comment_model->get_comments($post_id);

		if (empty($data['post'])) {
			show_404();
		}

		$data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/view', $data);
		$this->load->view('templates/footer');
	}

	public function search() {
		$data['title'] = 'Related Posts';
		$key = $this->input->post('keyword');
		$data['posts'] = $this->post_model->search($key);

		$this->load->view('templates/header');
		$this->load->view('posts/search', $data);
		$this->load->view('templates/footer');
	}

	public function create() {
		// Check login
		if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$data['title'] = 'Create Post';

		$data['categories'] = $this->post_model->get_categories();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');
		$this->form_validation->set_rules('name', 'Name', 'callback_check_category_exists');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');
		} else {
			// Upload Image
			$config['upload_path'] = './assets/images/posts';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '20480';
			$config['max_width'] = '20000';
			$config['max_height'] = '20000';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload()) {
				$errors = array('error' => $this->upload->display_errors());
				$post_image = 'noimage.jpg';
				// echo var_dump($errors);
			} else {
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_FILES['userfile']['name'];
			}
			// echo $this->upload->do_upload();

			$this->post_model->create_post($post_image);

			// Set message
			$this->session->set_flashdata('post_created', 'Your post has been created');

			redirect('posts');
		}
	}

	public function delete($id) {
		// Check login
		if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$this->post_model->delete_post($id);

		// Set message
		$this->session->set_flashdata('post_deleted', 'Your post has been deleted');

		redirect('posts');
	}

	public function edit($id) {
		// Check login
		if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$data['post'] = $this->post_model->get_posts_id($id);

		// Check user
		if ($this->session->userdata('user_id') != $this->post_model->get_posts_id($id)['user_id']) {
			redirect('posts');

		}

		$data['categories'] = $this->post_model->get_categories();

		if (empty($data['post'])) {
			show_404();
		}

		$data['title'] = 'Edit Post';

		$this->load->view('templates/header');
		$this->load->view('posts/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
		// Check login
		if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');
		$this->form_validation->set_rules('name', 'Name', 'callback_check_category_exists');
		$data['post'] = $this->post_model->get_posts_id($id);
		$data['title'] = 'Edit Post';
		$data['categories'] = $this->post_model->get_categories();

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$config['upload_path'] = './assets/images/posts';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '20480';
			$config['max_width'] = '20000';
			$config['max_height'] = '20000';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload()) {

				$data = array('upload_data' => $this->upload->data());
				$post_image = $_FILES['userfile']['name'];

			} else {
				// $errors = array('error' => $this->upload->display_errors());
				// echo var_dump($errors);
				$post_image = NULL;
			}

			$this->post_model->update_post($post_image);

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('posts');

		}

	}

	public function check_category_exists($name) {
		$this->form_validation->set_message('check_category_exists', 'That category already exits.');
		if ($this->category_model->check_category_exists($name)) {
			return true;
		} else {
			return false;
		}
	}

	public function savelikes($post_id) {

		$user_id = $this->session->userdata['user_id'];
		// echo $user_id;

		// $post_id = $this->input->post('id');
		// var_dump($post_id);

		// echo "$post_id";

		// $fetchlikes = $this->db->query('select likes from posts where id="' . $post_id . '"');
		$this->db->query('SELECT likes FROM posts');
		$query = $this->db->get_where('posts', array('id' => $post_id));
		$fetchlikes = $query->result_array()[0]['likes'];
		// var_dump($fetchlikes);
		$result = $fetchlikes;
		// var_dump($query->result_array()[0]);

		// $checklikes = $this->db->query('select * from postlikes
		//                                   where id="' . $post_id . '"
		//                                   and user_id = "' . $user_id . '"');
		$checklikes = $this->db->get_where('postlikes', array('post_id' => $post_id, 'user_id' => $user_id));
		// echo $post_id;

		$resultchecklikes = $checklikes->num_rows();
		// var_dump($resultchecklikes);
		if ($resultchecklikes == '0') {
			if ($result == "0" || $result == "NULL") {
				// $this->db->query('update posts set likes=1 where id="' . $post_id . '"');
				$this->db->query('UPDATE posts SET likes=1 WHERE id="' . $post_id . '"');
			} else {
				// $this->db->query('update posts set likes=likes+1 where id="' . $post_id . '"');

				$this->db->query('UPDATE posts SET likes=likes+1 WHERE id="' . $post_id . '"');
			}

			$data = array('post_id' => $post_id, 'user_id' => $user_id);
			$this->db->insert('postlikes', $data);
		} else {
			$this->db->delete('postlikes', array('post_id' => $post_id,
				'user_id' => $user_id));
			$this->db->query('UPDATE posts SET likes=likes-1 WHERE id="' . $post_id . '"');
		}

		$this->db->select('likes');
		$this->db->from('posts');
		$this->db->where('id', $post_id);
		$query = $this->db->get();
		$result = $query->result()[0]->likes;
		// var_dump($result);

		echo $result;
	}

}