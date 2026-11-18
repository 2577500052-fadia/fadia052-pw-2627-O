<?php
class LatihanController3 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LatihanModel3');
    }

    public function index()
    {
        $data['daftar_pelanggan'] = $this->LatihanModel3->TampilData();
        $this->load->view('latihanView3', $data);
    }

    public function SimpanDataPlg()
    {
        $data = array(
            'kd_pelanggan'     => $this->input->post('kd_pelanggan'),
            'nama_pelanggan'   => $this->input->post('nama_pelanggan'),
            'alamat_pelanggan' => $this->input->post('alamat_pelanggan'),
            'kota_pelanggan'   => $this->input->post('kota_pelanggan'),
            'telp_pelanggan'   => $this->input->post('telp_pelanggan'),
            'email'            => $this->input->post('email')
        );

        $this->LatihanModel3->SimpanDataKirim($data);
        redirect('LatihanController3');
    }
}
?>