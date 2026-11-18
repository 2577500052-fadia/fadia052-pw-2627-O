<?php
class LatihanController1 extends CI_Controller
{
    public function index()
    {
        $data['mahasiswa'] = [
            [
                'nim' => '3022500212',
                'nama' => 'Fakhril',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Penyusuk'
            ],
            [
                'nim' => '3011500313',
                'nama' => 'Dresta',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Merawang'
            ],
            [
                'nim' => '3077500414',
                'nama' => 'Rani',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Selindung'
            ]
        ];

        $this->load->view('latihanView1', $data);
    }
}
?>