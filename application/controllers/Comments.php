<?php
class Comments extends CI_Controller {
	public function create($post_id) {
		// $_POST['post_id']
		// $_POST['comment']

		$slug = $this->input->post('slug');
		//get postid, comment_content
		$data['post'] = $this->post_model->get_posts($slug);
		$username = $this->session->userdata('username');
		// $username = $this->user_model->get_username($user_id);

		$this->form_validation->set_rules('body', 'Body', 'required');

		if ($this->form_validation->run() === FALSE) {
			// $this->load->view('templates/header');
			// $this->load->view('posts/view', $data);
			// $this->load->view('templates/footer');
			redirect('posts/' . $post_id);
		} else {
			$result = $this->comment_model->create_comment($post_id, $username);
			echo json_encode($result);
			// var_dump($this->input->post());

			// redirect('posts/' . $post_id);
		}
	}

	// public function get_username($user_id) {
	// 	$data['username'] = $this->user_model->get_username($user_id);
	// 	return $data['username'];

	// }
}