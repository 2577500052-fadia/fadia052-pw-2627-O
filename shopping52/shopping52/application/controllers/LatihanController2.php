<?php
class LatihanController2 extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("LatihanModel2");
    }

    public function index(){
        $data['ambilData'] = $this->LatihanModel2->get_pelanggan();
        $this->load->view('latihanView2', $data);
    }
}
?>