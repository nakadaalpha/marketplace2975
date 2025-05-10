<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id_member")) {
            $this->session->set_flashdata("pesan_gagal", "Anda harus login!");
            redirect('', 'refresh');
        }
    }
    public function index()
    {
        $id_member = $this->session->userdata("id_member");
        $this->load->model("Mproduk");

        $data["produk"] = $this->Mproduk->produk_member($id_member);

        $this->load->view('templates/header');
        $this->load->view('pages/seller/produk/index', $data);
        $this->load->view('templates/footer');
    }

    function tambah()
    {
        $this->load->model("Mkategori");
        $this->load->model("Mproduk");
        $data['kategori'] = $this->Mkategori->tampil();

        $dataInput = $this->input->post();
        if ($dataInput) {
            $this->Mproduk->simpan($dataInput);
            $this->session->set_flashdata('pesan_sukses', 'produk_tersimpan');
            redirect('seller/produk', 'refresh');
        }

        $this->load->view('templates/header');
        $this->load->view('pages/seller/produk/tambah', $data);
        $this->load->view('templates/footer');
    }

    function edit($id_produk)
    {
        $this->load->model("Mproduk");
        $data["produk"] = $this->Mproduk->detail($id_produk);

        $this->load->model("Mkategori");
        $data['kategori'] = $this->Mkategori->tampil();

        $dataInput = $this->input->post();
        if($dataInput) {
            $this->Mproduk->ubah($dataInput, $id_produk);
            $this->session->set_flashdata('pesan_sukses', 'Produk telah diubah');
            redirect('sellesr/produk', 'refresh');
        }

        $this->load->view('templates/header');
        $this->load->view('pages/seller/produk/edit', $data);
        $this->load->view('templates/footer');
    }

    function hapus($id_produk){
        $this->load->model('Mproduk');
        $this->Mproduk->hapus($id_produk);

        $this->session->set_flashdata('pesan_sukses', 'Produk telah dihapus');
        redirect('seller.produk', 'refresh');
    }
}
