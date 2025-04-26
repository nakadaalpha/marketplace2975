<?php
class Produk extends CI_Controller
{
    public function index()
    {
        $this->load->model("MProduk");

        $data["produk"] = $this->MProduk->tampil();
        
        $this->load->view('templates/header');
        $this->load->view('pages/produk/index', $data);
        $this->load->view('templates/footer');
    }
}
