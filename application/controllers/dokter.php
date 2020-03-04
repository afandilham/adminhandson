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
        $this->load->view('templates/header', $data);
        $this->load->view('dokter/index');
        $this->load->view('templates/footer');
    }

    function insert(){
        $data['judul'] = 'Insert Dokter';
        $this->load->view('templates/header', $data);
        $this->load->view('dokter/insert_dokter');
        $this->load->view('templates/footer');
    }

    function update(){
        $data['judul'] = 'Update Dokter';
        $this->load->view('templates/header', $data);
        $this->load->view('dokter/update_dokter');
        $this->load->view('templates/footer');
    }

    function delete(){

    }
}
