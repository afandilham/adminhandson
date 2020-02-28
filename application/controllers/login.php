<?php

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('m_login');
	}

	function index()
	{
		$data['judul'] = 'Login Admin Handson Kelola.net';
		$this->load->view('templates/header', $data);
		$this->load->helper('form');
		$this->load->view('v_login', $data);
		$this->load->view('templates/footer');
	}

	function aksi_login()
	{ 
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username
		);

		$hash = $this->m_login->cek_login("users", $where);
		if ($username == 'admin' && password_verify($password, $hash[0]->password)) {
			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);
			$data['pesan'] = 'sukses';
			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));
		} else {
			$data['pesan'] = 'gagal';
			echo 'Username atau password salah !';
			redirect(base_url("login"));
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
