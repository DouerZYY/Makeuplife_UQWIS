<?php
class Users extends CI_Controller {
	public function view_login($page = array('users/', 'login')) {
		if (!file_exists(APPPATH . 'views/' . $page[0] . $page[1] . '.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page[1]);
		$this->load->view('templates/header');
		$this->load->view($page[0] . $page[1], $data);
		$this->load->view('templates/footer');
	}
	public function profile() {
		$data['title'] = 'Personal Management Center';
		$id = $this->session->userdata['user_id'];
		$data['post'] = $this->user_model->fetchUserData($id);
		$this->load->view('templates/header');
		$this->load->view('users/profile', $data);
		$this->load->view('templates/footer');
	}
	public function update($id) {
		// Check login
		if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}
		$data['title'] = 'Personal Management Center';
		$id = $this->session->userdata['user_id'];
		$data['post'] = $this->user_model->fetchUserData($id);
		$this->form_validation->set_rules('name', 'Update Name', '');
		$this->form_validation->set_rules('zipcode', 'Update Zipcode', 'integer', array('integer' => 'The Zipcode field must only contain integers.'));
		$this->form_validation->set_rules('username', 'Update Username', 'callback_check_username_exists');
		$this->form_validation->set_rules('email', 'Update Email', 'callback_check_email_exists');
		$this->form_validation->set_rules('password', 'Original Password', 'callback_check_password');
		// $this->form_validation->set_rules('password2', 'New Password', '');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/profile', $data);
			$this->load->view('templates/footer');
		} else {
			$result = $this->user_model->update($id);
			if ($result) {
				$this->session->set_flashdata('profile_updated', 'Your profile has been updated');

				redirect('posts');

			} else {

				$this->session->set_flashdata('profile_updated_invalid', 'Your profile update is invalid!');

				redirect('posts');

			}

		}
	}
	//send email
	public function email() {
		$data['title'] = 'Related Posts';
		$this->form_validation->set_rules('from_email', 'From: ', 'required');
		$this->form_validation->set_rules('to_email', 'To: ', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('pages/email', $data);
			$this->load->view('templates/footer');
		} else {
			$result = $this->user_model->email();
			if ($result) {
				$this->session->set_flashdata('email_send', 'Email sent successfully!');
				redirect('home');
				// echo "successfully!";

			} else {
				$this->session->set_flashdata('send_failed', 'You have encountered an error');
				redirect('email');
				// echo "faild!";

			}

		}
		// $from_email = $this->input->post('from_email');

	}
	// Register user
	public function register() {
		$data['title'] = 'Sign Up';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('zipcode', 'Zipcode', 'integer', array('integer' => 'The Zipcode field must only contain integers.'));
		$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
		$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/register', $data);
			$this->load->view('templates/footer');
		} else {
			$this->user_model->register();
			// Encrypt password
			// $enc_password = md5($this->input->post('password'));

			// $this->user_model->register($enc_password);

			// Set message
			$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

			redirect('posts');
		}
	}

	// public function login() {

	// 	$validator = array('success' => false, 'messages' => array());

	// 	$validate_data = array(
	// 		array(
	// 			'field' => 'username',
	// 			'label' => 'Username',
	// 			'rules' => 'required|callback_validate_username',
	// 		),
	// 		array(
	// 			'field' => 'password',
	// 			'label' => 'Password',
	// 			'rules' => 'required',
	// 		),
	// 	);

	// 	$this->form_validation->set_rules($validate_data);
	// 	$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

	// 	if ($this->form_validation->run() === true) {

	// 		$result = $this->user_model->login();

	// 		if ($result) {

	// 			$this->load->library('session');

	// 			$user_data = array(
	// 				'user_id' => $result['id'],
	// 				'username' => $result['username'],
	// 				'logged_in' => true,
	// 			);

	// 			$this->session->set_userdata($user_data);

	// 			$validator['success'] = true;
	// 			$this->session->set_flashdata('user_loggedin', 'You are now logged in');

	// 			redirect('posts');
	// 			// $validator['messages'] = 'index.php/dashboard';

	// 			//$this->load->view();
	// 		} else {
	// 			$validator['success'] = false;
	// 			$validator['messages'] = 'Incorrect username/password combination';
	// 		} // /else
	// 	} else {
	// 		$validator['success'] = false;
	// 		foreach ($_POST as $key => $value) {
	// 			$validator['messages'][$key] = form_error($key);
	// 		}
	// 	}

	// 	echo json_encode($validator);

	// }

	// Log in user
	public function login() {
		$data['title'] = 'Log In';
		// $validator = array('success' => false, 'messages' => array());

		$this->form_validation->set_rules('username', 'Username', 'required|callback_validate_username');
		$this->form_validation->set_rules('password', 'Password', 'required');
		// $this->form_validation->set_rules('remember', 'Remember me', 'integer');
		// $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/login', $data);
			$this->load->view('templates/footer');
			// $validator['success'] = false;
			// foreach ($_POST as $key => $value) {
			// 	$validator['messages'][$key] = form_error($key);
			// }

		} else {
			$result = $this->user_model->login();

			// Get username
			// $username = $this->input->post('username');
			// Get and encrypt the password
			// $password = md5($this->input->post('password'));
			// $remember = (bool) $this->input->post('remember');

			// Login user
			// $user_id = $this->user_model->login($username, $password);

			if ($result) {
				// Create session
				$user_data = array(
					'user_id' => $result['id'],
					'username' => $result['username'],
					'logged_in' => true,
				);

				$this->session->set_userdata($user_data);
				$validator['success'] = true;

				// Set message
				$this->session->set_flashdata('user_loggedin', 'You are now logged in');

				redirect('posts');
			} else {
				// Set message
				$validator['success'] = false;
				$validator['messages'] = 'Incorrect username/password combination';
				$this->session->set_flashdata('login_failed', 'Login is invalid');

				redirect('users/login');
			}
		}
	}

	// Log user out
	public function logout() {
		// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		// Set message
		$this->session->set_flashdata('user_loggedout', 'You are now logged out');

		redirect('users/login');
	}

	public function check_password() {
		$this->form_validation->set_message('check_password', 'Wrong Password!');
		$user_id = $this->session->userdata('user_id');
		$password_exist = $this->user_model->check_password($user_id);
		// var_dump($this->user_model->check_password($user_id));
		if ($this->user_model->check_password($user_id)) {

			return true;
		} else {
			$this->form_validation->set_message('check_password', 'Wrong Password!');
			return false;
		}

	}

	public function validate_username() {
		$username = $this->user_model->validate_username();

		if ($username === true) {
			return true;
		} else {
			$this->form_validation->set_message('validate_username', 'The {field} does not exists');
			return false;
		}
	}

	// Check if username exists
	public function check_username_exists($username) {
		$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
		// var_dump($this->user_model->check_username_exists($username));
		if ($this->user_model->check_username_exists($username)) {
			return true;
		} else {
			return false;
		}
	}

	// Check if email exists
	public function check_email_exists($email) {
		$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
		if ($this->user_model->check_email_exists($email)) {
			return true;
		} else {
			return false;
		}
	}
}