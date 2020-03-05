<?php

class Kursus extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        //$this->load->model('m_kursus');
        $this->load->helper('form');
        $this->load->database();
        $this->load->helper('url');
    }

    function index()
    {
        $data['judul'] = 'Manage Kursus';
        $this->load->view('templates/header', $data);
        $this->load->view('kursus/index');
        $this->load->view('templates/footer');
    }

    function insert(){
        $data['judul'] = 'Insert Kursus';
        $this->load->view('templates/header', $data);
        $this->load->view('kursus/insert_kursus');
        $this->load->view('templates/footer');
    }

    function update(){
        $data['judul'] = 'Update Kursus';
        $this->load->view('templates/header', $data);
        $this->load->view('kursus/update_kursus');
        $this->load->view('templates/footer');
    }

    function delete(){

    }
}
