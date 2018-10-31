<?php
class User_model extends CI_Model {
	public function email() {
		$from_email = $this->input->post('from_email');
		$to_email = $this->input->post('to_email');
		$cc_email = $this->input->post('cc_email');
		$topic = $this->input->post('topic');
		$content = $this->input->post('content');

		$this->load->library('email');
		$this->load->library('encryption');
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'xkxjane@gmail.com',
			'smtp_pass' => 'XKXabm19691104',
			'mailtype' => 'html',
			'charset' => 'utf-8',
		);
		$this->email->set_newline("\r\n");

		// $config = array();
		// $config['protocol'] = 'sendmail';
		// $config['mailpath'] = '/usr/sbin/sendmail';
		// $config['charset'] = 'iso-8859-1';
		// $config['wordwrap'] = TRUE;
		$this->email->initialize($config);

		$this->email->from($from_email, 'Identification');
		$this->email->to($to_email);
		if ($cc_email) {
			$this->email->cc($cc_email);
		}
		if ($topic) {
			$this->email->subject($topic);
		}
		$this->email->message($content);
		return $this->email->send();

	}
	public function update($id) {
		$data = array();
		if ($this->input->post('name')) {
			$data['name'] = $this->input->post('name');
		}
		if ($this->input->post('username')) {
			$data['username'] = $this->input->post('username');
		}
		if ($this->input->post('zipcode')) {
			$data['zipcode'] = $this->input->post('zipcode');
		}
		if ($this->input->post('email')) {
			$data['email'] = $this->input->post('email');
		}
		if ($this->input->post('password2')) {
			$salt = $this->salt();
			$password = $this->makePassword($this->input->post('password2'), $salt);
			$data['password'] = $password;
			$data['salt'] = $salt;

		}
		$this->db->where('id', $id);
		var_dump($this->input->post('password2'));
		if (count($data) != 0) {

			$query = $this->db->update('users', $data);
			return ($query === true) ? true : false;
		} else {
			return true;
		}

	}
	public function register() {
		// User data array
		$salt = $this->salt();
		$enc_password = $this->makePassword($this->input->post('password'), $salt);

		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $enc_password,
			'zipcode' => $this->input->post('zipcode'),
			'salt' => $salt,
		);

		// Insert user
		return $this->db->insert('users', $data);
	}

	// Log user in
	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// Validate
		// $this->db->where('username', $username);
		// $this->db->where('password', $password);
		$userData = $this->fetchDataByUsername($username);

		if ($userData) {
			$password = $this->makePassword($password, $userData['salt']);

			$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
			$query = $this->db->query($sql, array($username, $password));
			$result = $query->row_array();

			return ($query->num_rows() == 1) ? $result : false;
		} // /if
		else {
			return false;
		}

		// $result = $this->db->get('users');

		// if ($result->num_rows() == 1) {

		// 	return $result->row(0)->id;
		// } else {
		// 	return false;
		// }
	}

	public function salt() {
		return password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
	}

	public function makePassword($password = null, $salt = null) {
		if ($password && $salt) {
			return hash('sha256', $password . $salt);
		}
	}

	public function fetchDataByUsername($username = null) {
		if ($username) {
			$sql = "SELECT salt FROM users WHERE username = ?";
			$query = $this->db->query($sql, array($username));
			$result = $query->row_array();

			return ($query->num_rows() == 1) ? $result : false;
			return $result;
		}
	}

	public function fetchUserData($userId = null) {
		if ($userId) {
			$sql = "SELECT * FROM users WHERE id = ?";
			$query = $this->db->query($sql, array($userId));
			$result = $query->row_array();

			return $result;
		}
	}

	public function validate_username() {
		$username = $this->input->post('username');
		$sql = "SELECT * FROM users WHERE username = ?";
		$query = $this->db->query($sql, array($username));
		return ($query->num_rows() == 1) ? true : false;
	}

	public function check_password($user_id) {
		if ($user_id) {
			$getUserDataById = $this->fetchUserData($user_id);
			// var_dump($getUserDataById);
			$salt = $getUserDataById['salt'];
			$currentPassword = $this->makePassword($this->input->post('password'), $salt);
			// var_dump($currentPassword);
			// var_dump($getUserDataById['password']);
			// var_dump($currentPassword == $getUserDataById['password']);

			return ($currentPassword == $getUserDataById['password']);
		}

	}

	// Check username exists
	public function check_username_exists($username) {
		$query = $this->db->get_where('users', array('username' => $username));
		if (empty($query->row_array())) {
			return true;
		} else {
			return false;
		}
	}

	// Check email exists
	public function check_email_exists($email) {
		$query = $this->db->get_where('users', array('email' => $email));
		// var_dump(empty($query->row_array()));
		if (empty($query->row_array())) {
			return true;
		} else {
			return false;
		}
	}

	//get username by user_id
	public function get_username($user_id) {
		$query = $this->db->get_where('users', array('user_id' => $user_id));

		$sql = "SELECT username FROM users WHERE id = ?";
		$query = $this->db->query($sql, array($user_id));
		// $result = $query->row_array();
		return $query;
	}
}