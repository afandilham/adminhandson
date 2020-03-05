<?php

class Bahasa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        //$this->load->model('m_bahasa');
        $this->load->helper('form');
        $this->load->database();
        $this->load->helper('url');
    }

    function index()
    {
        $data['judul'] = 'Manage Bahasa';
        $this->load->view('templates/header', $data);
        $this->load->view('bahasa/index');
        $this->load->view('templates/footer');
    }

    function insert(){
        $data['judul'] = 'Insert Bahasa';
        $this->load->view('templates/header', $data);
        $this->load->view('bahasa/insert_bahasa');
        $this->load->view('templates/footer');
    }

    function update(){
        $data['judul'] = 'Update Bahasa';
        $this->load->view('templates/header', $data);
        $this->load->view('bahasa/update_bahasa');
        $this->load->view('templates/footer');
    }

    function delete(){

    }
}
