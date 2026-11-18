<?php
class LatihanModel2 extends CI_Model
{
    public function get_pelanggan()
    {
        $sql = "SELECT kd_pelanggan, nama_pelanggan, alamat_pelanggan,
                       kota_pelanggan, telp_pelanggan, email_pelanggan
                FROM `pelanggan`";

        return $this->db->query($sql)->result();
    }
}