<?php
class Transaksi extends CI_Controller
{
    public function index()
    {
        $this->load->model("MTransaksi");

        $data["transaksi"] = $this->MTransaksi->tampil();

        $this->load->view('templates/header');
        $this->load->view('pages/transaksi/index', $data);
        $this->load->view('templates/footer');
    }

    function detail($id_transaksi)
    {
        $this->load->model("Mtransaksi");

        $data["transaksi"] = $this->Mtransaksi->detail($id_transaksi);

        $data["transaksi_detail"] = $this->Mtransaksi->transaksi_detail($id_transaksi);

        $this->load->view('templates/header');
        $this->load->view('pages/transaksi/detail', $data);
        $this->load->view('templates/footer');
    }
}
