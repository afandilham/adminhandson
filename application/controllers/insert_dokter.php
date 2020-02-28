<?php 

class Insert_dokter extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_dokter');
        $this->load->helper('form');
	}

	function index(){
		$data['judul'] = 'Manage Dokter';
		$this->load->view('templates/header', $data);
		$this->load->view('dokter/insert_dokter');
		$this->load->view('templates/footer');
    }

    function insert_dokter(){
		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Jakarta');
		$data = array(
			'name_doctor' => $this->input->post('namadokter'),
			'speciality' => $this->input->post('spesialis'),
			'education_history' => $this->input->post('riwayatpendidikan'),
			'work_history' => $this->input->post('riwayatpekerjaan'),
			'motto' => $this->input->post('motto'),
			'insert_by' => $this->session->userdata("nama")
			//'waktuinsert' => mdate($datestring, $time),
			//'waktuupdate' => mdate($datestring, $time)
		);
		$data = $this->security->xss_clean($data);
        $result = $this->m_dokter->insert($data);
        if ($result == TRUE) {
            
			// redirect('admin/index');
			echo 'berhasil';
        } else {
			// redirect('admin/index');
			echo 'gagal';
        }
		

		

	}
}