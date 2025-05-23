<?php
class Transaksi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id_member")) {
            redirect('/', 'refresh');
        }
    }
    
    public function index()
    {
        $id_member = $this->session->userdata("id_member");

        $this->load->model("MTransaksi");

        $data["transaksi"] = $this->MTransaksi->transaksi_member_beli($id_member);

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
        $this->load->view('pages/seller/transaksi/detail', $data);
        $this->load->view('templates/footer');
    }
}
