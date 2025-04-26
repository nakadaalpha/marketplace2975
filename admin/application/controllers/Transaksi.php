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
}
