<?php
class Mproduk extends CI_Model
{
    function tampil()
    {
        $q = $this->db->get("produk");
        $d = $q->result_array();

        return $d;
    }

    function produk_member($id_member)
    {
        $this->db->where("id_member", $id_member);
        $q = $this->db->get("produk");
        $d = $q->result_array();

        return $d;
    }

    function simpan($dataInput){
        $config["upload_path"] = "./assets/produk/";
        $config["allowed_type"] = "gif|jpg|png|jpeg";

        $this->load->library('upload', $config);

        $dataUpload = $this->upload->do_upload("foto_produk");

        if($dataUpload) {
            $dataInput["foto_produk"] = $this->upload->data("file_name");
        }

        $dataInput['id_member'] = $this->session->userdata("id_member");

        $this->db->insert('produk', $dataInput);
    }

    function detail($id_produk){
        $this->db->where('id_member', $this->session->userdata("id_member"));
        $this->db->where('id_produk', $id_produk);
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $q = $this->db->get('produk');
        $d = $q->row_array();

        return $d;
    }

    function ubah($dataInput, $id_produk){
        $config["upload_path"] = "./assets/produk/";
        $config["allowed_type"] = "gif|jpg|png|jpeg";

        $this->load->library('upload', $config);

        $dataUpload = $this->upload->do_upload("foto_produk");

        if($dataUpload) {
            $dataInput["foto_produk"] = $this->upload->data("file_name");
        }

        $dataInput['id_member'] = $this->session->userdata("id_member");

        $this->db->where('id_produk', $id_produk);
        $this->db->update('produk', $dataInput);
    }

    function hapus($id_produk) {
        $this->db->where('id_member', $this->session->userdata("id_member"));
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
    }
}
