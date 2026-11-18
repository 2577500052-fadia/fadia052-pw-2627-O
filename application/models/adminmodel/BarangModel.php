<?php
class BarangModel extends CI_Model{

    function dtbrg(){
        $caridt = $this->db->get('barang');
        return $caridt;
    }

}
