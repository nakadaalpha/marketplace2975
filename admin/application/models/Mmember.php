<?php
class Mmember extends CI_Model
{
    function tampil(){
        $q = $this->db->get("member");

        $d = $q->result_array();

        return $d;
    }
}
?>