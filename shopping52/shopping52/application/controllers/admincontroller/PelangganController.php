<?php
class PelangganController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("adminmodel/PelangganModel");
    }

    public function index(){
        $data['dtpelanggan'] = $this->PelangganModel->dtplg()->result();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('adminview/pelangganView', $data);
        $this->load->view('layout/footer');
    }
}