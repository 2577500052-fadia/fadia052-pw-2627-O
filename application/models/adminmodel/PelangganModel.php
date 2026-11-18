<?php
class PelangganModel extends CI_Model
{
    public function dtplg()
    {
        return $this->db->get('pelanggan');
    }
}