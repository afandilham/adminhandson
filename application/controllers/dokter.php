<?php

class Dokter extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('m_dokter');
        $this->load->helper('form');
        $this->load->database();
        $this->load->helper('url');
    }

    function index()
    {
        $data['judul'] = 'Manage Dokter';
        $data['data']=$this->m_dokter->display();
        $this->load->view('templates/header', $data);
        $this->load->view('dokter/index', $data);
        $this->load->view('templates/footer');



        echo 's';
    }
}
