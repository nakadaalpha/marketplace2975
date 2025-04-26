<?php
class Mtransaksi extends CI_Model
{
    function tampil(){
        $q = $this->db->get("transaksi");

        $d = $q->result_array();

        return $d;
    }
}
?>