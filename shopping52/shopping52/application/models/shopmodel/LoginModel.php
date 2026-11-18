<?php
class LoginModel extends CI_Model{
    function CariPengguna($email,$pass){
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $caridt = $this->db->get('pengguna')->row();
        return $caridt;
    }
}
?>