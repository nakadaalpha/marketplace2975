<?php
class Mmember extends CI_Model
{
    function tampil()
    {
        $q = $this->db->get("member");

        $d = $q->result_array();

        return $d;
    }

    function detail($id_member)
    {
        $this->db->where('id_member', $id_member);
        $q = $this->db->get("member");
        $d = $q->row_array();

        return $d;
    }

    function jumlah_member_distrik()
    {
        $q = $this->db->query("SELECT COUNT(*) as jumlah, nama_distrik_member FROM 'member' GROUP BY nama_distrik_member");
        $d = $q->result_array();

        return $d;
    }

    function login($dataInput)
    {
        $email_member = $dataInput["email_member"];
        $password_member = $dataInput["password_member"];
        $password_member = sha1($password_member);

        $this->db->where('email_member', $email_member);
        $this->db->where('password_member', $password_member);
        $q = $this->db->get('member');
        $cekmember = $q->row_array();

        if (!empty($cekmember)) {
            $this->session->set_userdata("id_member", $cekmember['id_member']);
            $this->session->set_userdata("email_member", $cekmember['email_member']);
            $this->session->set_userdata("nama_member", $cekmember['nama_member']);
            $this->session->set_userdata("alamat_member", $cekmember['alamat_member']);
            $this->session->set_userdata("nomor_member", $cekmember['nomor_member']);
            $this->session->set_userdata("nama_distrik_member", $cekmember['nama_distrik_member']);
            $this->session->set_userdata("kode_distrik_member", $cekmember['kode_distrik_member']);
            return "exist";
        } else {
            return "not exist";
        }
    }

    function ubah($dataInput, $id_member)
    {

        if (!empty($dataInput['password_member'])) {
            $dataInput['password_member'] = sha1($dataInput['password_member']);
        } else {
            unset($dataInput['password_member']);
        }

        $this->db->where('id_member', $id_member);
        $this->db->update('member', $dataInput);

        $this->db->where('id_member', $id_member);
        $q = $this->db->get('member');
        $cekmember = $q->row_array();

        $this->session->set_userdata("id_member", $cekmember['id_member']);
        $this->session->set_userdata("email_member", $cekmember['email_member']);
        $this->session->set_userdata("nama_member", $cekmember['nama_member']);
        $this->session->set_userdata("alamat_member", $cekmember['alamat_member']);
        $this->session->set_userdata("nomor_member", $cekmember['nomor_member']);
        $this->session->set_userdata("nama_distrik_member", $cekmember['nama_distrik_member']);
        $this->session->set_userdata("kode_distrik_member", $cekmember['kode_distrik_member']);
    }
}
