<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	function __construct(){
			parent::__construct();
			$this->load->model('Auth_model');
		}

	public function index()
	{
		$this->load->view('login');
	}


	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'user_name' => $username,
			'user_password' => md5($password)
			);

		$cek = $this->Auth_model->cek_login("user",$where)->num_rows();
		$user_obj = $this->select_config('user', "WHERE user_name = '$username' AND user_password = '" . md5($password) . "' ", 'user_type, user_id')->row();
		$branch_id = $this->select_config_one('user', 'branch', $where);

		$user_type = $user_obj->user_type;
		$branch_id = $branch_id->branch;

		$status = 0;

		if ($cek > 0) {
			$data_session = array(
				'user_id'				=> $user_obj->user_id,
				'nama' 					=> $username,
				'status' 				=> "a",
				'user_type'			=> $user_type
			);
			
			$this->session->set_userdata($data_session);
			// redirect('dashboard1');
			$status = 1;
			echo json_encode($status);
		} else {
			echo json_encode($status);
			// $this->index();
		}
	}

	public function check_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'user_name' => $username,
			'user_password' => md5($password)
			);


		$status = 0;
		$cek = $this->Auth_model->cek_login("user",$where)->num_rows();
		$user_type = $this->select_config_one('user', 'user_type', $where);
		$branch_id = $this->select_config_one('user', 'branch', $where);

		if ($cek > 0) {
			if ($username == $this->session->userdata('nama')) {
					$status = 1;
			}
		}

		echo json_encode($status);
	}

  public function logout()
	{
			$this->session->sess_destroy();
			redirect('Auth');
	}
}
