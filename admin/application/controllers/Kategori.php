<?php
class Kategori extends CI_Controller
{
    public function index()
    {
        $this->load->model("Mkategori");

        $data["kategori"] = $this->Mkategori->tampil();

        $this->load->view('templates/header');
        $this->load->view('pages/kategori/index', $data);
        $this->load->view('templates/footer');
    }

    function tambah()
    {
        $dataInput = $this->input->post();

        if ($dataInput) {
            $this->load->model('Mkategori');
            $this->MKategori->simpan($dataInput);
            $this->session->set_flashdata('pesan_sukses', 'Data kategori ditambahkan');
            redirect('kategori', 'refresh');
        }

        $this->load->view('templates/header');
        $this->load->view('pages/kategori/tambah');
        $this->load->view('templates/footer');
    }

    function edit($id_kategori)
    {
        $this->load->model("Mkategori");
        $data["kategori"] = $this->Mkategori->detail($id_kategori);

        $dataInput = $this->input->post();

        if($dataInput) {
            $this->Mkategori->edit($dataInput, $id_kategori);
            $this->session->set_flashdata('pesan_sukses', 'Kategori telah diubah');
            redirect('kategori', 'refresh');
        }

        $this->load->view('templates/header');
        $this->load->view('pages/kategori/edit', $data);
        $this->load->view('templates/footer');
    }
    function hapus($id_kategori)
    {
        $this->load->model('Mkategori');
        $this->Mkategori->hapus($id_kategori);
        $this->session->set_flashdata('pesan_sukses', 'kategori telah dihapus');
        redirect('kategori', 'refresh');
    }
}
