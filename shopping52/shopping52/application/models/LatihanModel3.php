<?php
class LatihanModel3 extends CI_Model
{
    public function SimpanDataKirim($data)
    {
        return $this->db->insert('pelanggan', $data);
    }

    public function TampilData()
    {
        return $this->db->get('pelanggan')->result();
    }
}
?>