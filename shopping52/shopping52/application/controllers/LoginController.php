<?php
class LoginController extends CI_Controller
{
    public function index()
    {
        $this->load->view('shopview/loginView');
    }

    public function cekdt()
    {
        $this->load->model('shopmodel/LoginModel');

        $email = $this->input->post('email');
        $pass = md5($this->input->post('password'));
        $dtuser = $this->LoginModel->CariPengguna($email, $pass);

        if ($dtuser) {
            if ($dtuser->password == $pass) {
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata(
                    'nama',
                    $dtuser->nama_lengkap
                );
                redirect('Admin');
            } else {
                $data['error'] = 'Cek lagi passwordnya...';
                $this->load->view('shopview/loginView', $data);
            }
        } else {
            $data['error'] = 'Salah email atau password...';
            $this->load->view('shopview/loginView', $data);
        }
    }
    public function logout()
{
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('nama');
    redirect('LoginController');
}
}
?>