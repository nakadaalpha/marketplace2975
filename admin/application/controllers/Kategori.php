<?php
class Kategori extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id_admin")){
            redirect('/', 'refresh');
        }
    }
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

        $this->form_validation->set_rules("nama_kategori", "Nama Kategori", "required");

        $this->form_validation->set_message("required", "%s wajib diisi");

        if ($this->form_validation->run()==TRUE) {
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

        $this->form_validation->set_rules("nama_kategori", "Nama Kategori", "required");

        $this->form_validation->set_message("required", "%s wajib diisi");

        if($this->form_validation->run()==TRUE) {
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
