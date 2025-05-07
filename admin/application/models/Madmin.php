<?php
class Madmin extends CI_Model{

    function login($dataInput){
        $username = $dataInput["username"];
        $password = $dataInput["password"];
        $password = sha1($password);

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $q = $this->db->get('admin');
        $cekadmin = $q->row_array();

        if(!empty($cekadmin)){
            $this->session->set_userdata("id_admin", $cekadmin['id_admin']);
            $this->session->set_userdata("username", $cekadmin['username']);
            $this->session->set_userdata("nama", $cekadmin['nama']);
            return "exist";
        } else {
            return "not exist";
        }
    }

    function ubah($dataInput, $id_admin) {

        if(!empty($dataInput['password'])){
            $dataInput['password'] = sha1($dataInput['password']);
        } else {
            unset($dataInput['password']);
        }

        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $dataInput);
        
        $this->db->where('id_admin', $id_admin);
        $q = $this->db->get('admin');
        $cekadmin = $q->row_array();

        $this->session->set_userdata("id_admin", $cekadmin['id_admin']);
        $this->session->set_userdata("password", $cekadmin['password']);
        $this->session->set_userdata("nama", $cekadmin['nama']);
    }
}
?>