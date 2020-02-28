<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_admin');
        $this->load->helper('form');
	}

	function index(){
		$data['judul'] = 'Halaman Admin Handson Kelola.net';
		$this->load->view('templates/header', $data);
		$this->load->view('v_admin');
		$this->load->view('templates/footer');
	}

	

	function register_user() 
    {
        $hashed_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $hashed_password,
            'email' => $this->input->post('email')
        );
        $data = $this->security->xss_clean($data);
        $result = $this->m_register->registration_insert($data);
        if ($result == TRUE) {
            $data['message_display'] = 'Registration Successfully !';
            redirect('login/index', $data);
        } else {
            $data['message_display'] = 'Username already exist!';
            redirect('register/index', $data);
        }
    }
}