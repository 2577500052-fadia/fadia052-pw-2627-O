<?php
class BarangController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("adminmodel/BarangModel");
    }

    public function index(){
        $data['dtbarang']=$this->BarangModel->dtbrg()->result();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('adminview/barangView',$data);
        $this->load->view('layout/footer');
    }
}
