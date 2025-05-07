<?php
class Mkategori extends CI_Model
{
    function tampil()
    {
        $q = $this->db->get("kategori");

        $d = $q->result_array();

        return $d;
    }

    function simpan($dataInput)
    {
        $config['upload_path'] = './assets/kategori/';
        $config['allowed_types'] = 'gif|jpeg|png|jpg';

        $this->load->library('upload', $config);

        $dataUpload = $this->upload->do_upload("foto_kategori");

        if ($dataUpload) {
            $dataInput['foto_kategori'] = $this->upload->data("file_name");
        }

        $this->db->insert('kategori', $dataInput);
    }

    function detail($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $q = $this->db->get('kategori');
        $d = $q->row_array();

        return $d;
    }

    function edit($dataInput, $id_kategori)
    {
        $config['upload_path'] = './assets/kategori/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $this->load->library("upload", $config);

        $dataUpload = $this->upload->do_upload("foto_kategori");

        if ($dataUpload) {
            $dataInput['foto_kategori'] = $this->upload->data("file_name");
        }

        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('kategori', $dataInput);
    }

    function hapus($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori');
    }
}
